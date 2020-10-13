<?php
	include "header.php";
?>
	<body>
		<!-- Header -->
		<header id="header">
			<nav class="left">
				<a href="#menu"><span>Menu</span></a>
			</nav>
			<a href="index.php" class="logo">SEFI</a>
		</header>

		<!--Navigation menu-->
		<?php
			include "menu.php";
		?>

		<h1 align = "center"><a href="#">Admin</a></h1>
		
		<div align="center" class="container">
			<div class="row">
				<div class="col-sm-3">
					<a href="admin.php" class="button big">
						<i class="fas fa-user-shield"></i>
					</a><br />
					<b>Administrator</b>
				</div>
				<div class="col-sm-3">
					<a href="school.php" class="button big">
						<i class="fas fa-school"></i>
					</a><br />
					<b>School</b>
				</div>
				<div class="col-sm-3">
					<a href="county.php" class="button big">
						<i class="fas fa-location-arrow"></i>
					</a><br />
					<b>County</b>
				</div>
				<div class="col-sm-3">
					<a href="project.php" class="button big">
						<i class="fas fa-flask"></i>
					</a><br />
					<b>Project</b>
				</div>
			</div><br />
			<div align="center" class="row">
				<div class="col-sm-3">
					<a href="student.php" class="button big">
						<i class="fas fa-user-graduate"></i>
					</a><br />
					<b>Student</b>
				</div>
				<div class="col-sm-3">
					<a href="category.php" class="button big">
						<i class="fas fa-tasks"></i>
					</a><br />
					<b>Category</b>
				</div>
				<div class="col-sm-3">
					<a href="grade.php" class="button big">
						<i class="fas fa-chart-bar"></i>
					</a><br />
					<b>Student Grade</b>
				</div>
				<div class="col-sm-3">
					<a href="gradeLevel.php" class="button big">
						<i class="fas fa-poll"></i>
					</a><br />
					<b>Project Grade Level</b>
				</div>
			</div><br />
			<div align="center" class="row">
				<div class="col-sm-3">
					<a href="judgeSession.php" class="button big">
						<i class="fas fa-clock"></i>
					</a><br />
					<b>Judge Session</b>
				</div>
				<div class="col-sm-3">
					<a href="booth.php" class="button big">
						<i class="fas fa-store"></i>
					</a><br />
					<b>Booth Number</b>
				</div>
				<div class="col-sm-3">
				</div>
				<div class="col-sm-3">
				</div>
			</div><br />
		</div><br />

		<!-- Footer and Scripts-->
		<?php 
            include "footer.php";
            include "script.php";
		?>
	</body>
</html>