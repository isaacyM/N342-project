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
			<a href="grade.php" class="logo">GRADE</a>
		</header>
		
		<!--Navigation menu-->
		<?php
			include "menu.php";
		?>

		<h1 align = "center"><a href="#">Existing Grades</a></h1>
		
		<!-- Main -->
		<div class="container">	
			<?php
				$query = "SELECT * FROM GRADE"; 
				$result = mysql_query($query);

				print '<br /><br /><span style="color:red">Data retrieved from database:</span><br/ >';
				// start a table tag in the HTML
				print '<table  id="example" class="display" cellspacing="0" width="100%">';
				print '<thead><tr><th>GradeID</th><th>Grade</th><th>Active</th></tr></thead>
				<tfoot><tr><th>GradeID</th><th>Grade</th><th>Active</th></tr></tfoot>';

				while($row = mysql_fetch_array($result))
				{   
					//Creates a loop to loop through results
					print "<tr>";
					print "<td>".$row["GradeID"]."</td><td>".$row["Grade"]."</td><td>".$row["Active"]."</td>";
				}

				print "</td>";
				print "</tr>";
				print "</table>"; //Close the table in HTML
				mysql_close(); //Make sure to close out the database connection
			?>
		</div><!--close container-->

		<!-- Footer and Scripts-->
		<?php 
            include "footer.php";
            include "script.php";
		?>
	</body>
</html>