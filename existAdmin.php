<?php
	require_once "aSession.php";
	if(checkAdminSession())
	{
		header("Location: login.php");
	}
	include "header.php";
	require_once "dbconnect.php";
?>
	<body>
		<!-- Header -->
		<header id="header">
			<nav class="left">
				<a href="#menu"><span>Menu</span></a>
			</nav>
			<a href="admin.php" class="logo">ADMIN</a>
		</header>
		
		<!--Navigation menu-->
		<?php
			include "menu.php";
		?>

		<h1 align = "center"><a href="#">Existing Admins</a></h1>
		
		<!-- Main -->
		<div class="container">	
			
            <h1>Existing Content</h1>
			<?php
				$query = "SELECT * FROM ADMIN"; //You don't need a ; like you do in SQL
				$result = mysql_query($query);

				echo "<table>"; // start a table tag in the HTML

				while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
				echo "<tr><td>" . $row['AdminID'] . "</td></tr>" .$row['FirstName'] . "</td><td>" . $row['LastName'] . "</td></tr>" . $row['MiddleName'] . "</td></tr>" 
				. $row['Email'] . "</td></tr>". $row['Password'] . "</td></tr>". $row['Level'] . "</td></tr>" . $row['Active'] . "</td></tr>";  //$row['index'] the index here is a field name
				}

				echo "</table>"; //Close the table in HTML

				mysql_close(); //Make sure to close out the database connection
			?>
        </div>

		<!-- Footer and Scripts-->
		<?php 
			include "footer.php";
			include "script.php";
		?>
	</body>
</html>