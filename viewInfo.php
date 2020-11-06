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
			<a href="adminLanding.php" class="logo">Admin Controls</a>
		</header>

		<!--Navigation menu-->
		<?php
			include "menu.php";
		?>

		<!-- Main -->
		<section id="main" class="wrapper">
			<h1 align = "center">View Informations</h1>
			<div class="container">
			<?php
				$query = "SELECT Judge.FirstName, Judge.LastName, Judge.Email, Project.ProjectNumber, Project.Title, Session.StartTime, Session.EndTime, Category.CategoryName FROM 
				((((Schedule INNER JOIN Judge ON Schedule.JudgeID = Judge.JudgeID) 
				INNER JOIN Project ON Schedule.ProjectID = Project.ProjectID)
				INNER JOIN Session ON Schedule.SessionID = Session.SessionID)
				INNER JOIN Category ON Schedule.CategoryID = Category.CategoryID)"; 
				$result = mysql_query($query);

				// start a table tag in the HTML
				print '<table  id="example" class="display" cellspacing="0" width="100%">';
				print '<thead><tr><th>FirstName</th><th>LastName</th><th>Email</th><th>Project Number</th><th>Title</th><th>Session Start</th>
				<th>Session End</th><th>Category Name</th></tr></thead>';

				while($row = mysql_fetch_array($result))
				{   
					//Creates a loop to loop through results
					print "<tr>";
					print "<td>".$row["FirstName"]."</td><td>".$row["LastName"]."</td><td>".$row["Email"]."</td><td>".$row["ProjectNumber"]."</td>
					<td>".$row["Title"]."</td><td>".$row["StartTime"]."</td><td>".$row["EndTime"]."</td><td>".$row["CategoryName"]."</td>";
					print "</tr>";
				}
				print "</table>"; //Close the table in HTML
				mysql_close(); //Make sure to close out the database connection
			?>
		</div><!--close container-->
		</section><!--close section--->

		<!-- Footer and Scripts-->
		<?php 
            include "footer.php";
            include "script.php";
		?>
	</body>
</html> 