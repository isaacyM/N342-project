<?php
	require_once "aSession.php";
	if(checkAdminSession())
	{
		header("Location: login.php");
	}
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

		<h1 align = "center"><a href="#">Project</a></h1>
		
		<!-- Main -->
		<div class="container">	
            <button class="tablink" onclick="openPage('show', this, '#ff9900')" id="defaultOpen">Existing Projects</button>
			<button class="tablink" onclick="openPage('enter', this, '#ff9900')">Enter new Project</button>
			<!--First Tab Content-->
            <div id="show" class="tabcontent">
				<h1>Existing Content</h1>
				<p>gggg</p>
				<input type="reset" name ="reset" value="Reset" class="alt" />
				<h2>ggg</h2>
			</div><!--close #show tab-->

            <!--Second Tab Content-->
			<div id="enter" class="tabcontent">
				<div class="inner"> 
					
					<!--PHP Code--->
					<?php
						//always initialize variables to be used
						$projectNumber = "";
						$boothNumber = "";
						$cnID = "";
						$projectTitle = "";
						$abstract = "";
						$gradeLevel = "";
						$category = "";
						$averageRanking = "";
						$year = "";
						$msg = "";
				
						$everythingOk = false;

						if (isset($_POST['submit'])) //check if this page is requested after Submit button is clicked
						{
					
							//take the information submitted and send to a process file
							//always trim the user input to get rid of the additiona white spaces on both ends of the user input
							$projectNumber = trim($_POST['projectNumber']);
							$boothNumber = trim($_POST['boothNumber']);
							$cnID = trim($_POST['cnID']);
							$projectTitle = trim($_POST['projectTitle']);
							$abstract = trim($_POST['abstract']);
							$gradeLevel = trim($_POST['gradeLevel ']);
							$category = trim($_POST['category']);
							$averageRanking = trim($_POST['averageRanking']);
							$year = trim($_POST['year']);

							//VALIDATION
							//Making sure the required fields are not empty
							if (($projectNumber== "") | ($boothNumber== "") | ($projectTitle== ""))
							{
								$msg = $msg . '<br/><b>Please enter the required fields.</b>';
							}
							else
							{
								$everythingOk= true;
							}
					
							//if everything is correct
							if ($everythingOk) 
							{
								//direct to another page to process using query strings
								$_SESSION['projectNumber']= $projectNumber;
								$_SESSION['boothNumber']= $boothNumber;
								$_SESSION['cnID']= "$cnID";
								$_SESSION['projectTitle']= $projectTitle;
								$_SESSION['abstract']= $abstract;
								$_SESSION['gradeLevel']= $gradeLevel;
								$_SESSION['category']= $category;
								$_SESSION['averageRanking']= $averageRanking;
								$_SESSION['year']= $year;
								//header("Location: process.php");
							}                
						}	
					?>

					<!-- Form -->
					<form method="post" action="project.php">
						<div class="row uniform">
							<?php
								print $msg;
							?>
							<div class="4u 12u$(small)">
								<b>Project Number<sup>*</sup></b>
								<input type="text" maxlength="10" name="projectNumber" id="projectNumber" value="<?php print $projectNumber; ?>" placeholder="4" />
							</div>
							<div class="4u 12u$(small)">
								<b>Booth Number<sup>*</sup></b>
								<input type="text" maxlength="10" name="boothNumber" id="boothNumber" value="<?php print $boothNumber; ?>" placeholder="1" />
							</div>
							<div class="4u$ 12u$(small)">
								<b>Course Network ID</b>
								<input type="text" maxlength="10" name="cnID" id="cnID" value="<?php print $cnID; ?>" placeholder="Course Netwrok ID" />
							</div>
							<!-- Break -->
							<div class="12u$">
								<b>Project Title<sup>*</sup></b>
								<input type="text" maxlength="60" name="projectTitle" id="projectTitle" value="<?php print $projectTitle; ?>" placeholder="Robots" />
							</div>
							<!-- Break -->
							<div class="12u$">
								<b>Abstract</b>
								<textarea name="abstract" id="abstract" placeholder="Abstract" rows="5" value="<?php print $abstract; ?>"></textarea>
							</div>
							<!-- Break -->
							<div class="6u 12u$(xsmall)">
								<b>Grade Level</b>
								<div class="select-wrapper">
									<select name="gradeLevel" id="gradeLevel">
										<option value="" selected>Grade Level</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10">10</option>
										<option value="11">11</option>
										<option value="12">12</option>
									</select>
								</div>
							</div>
							<div class="6u$ 12u$(xsmall)">
								<b>Category</b>
								<div class="select-wrapper">
									<select name="category" id="category">
										<option value="" selected>Category</option>
										<option value="Category1">Category1</option>
										<option value="Category2">Category2</option>
										<option value="Category3">Category3</option>
										<option value="Category4">Category4</option>
									</select>
								</div>
							</div>
							<!-- Break -->
							<div class="6u 12u$(small)">
								<b>Average Ranking</b>
								<input type="text" maxlength="4" name="averageRanking" id="averageRanking" value="<?php print $averageRanking; ?>" placeholder="3" />
							</div>
							<div class="6u$ 12u$(small)">
								<b>Year</b>
								<input type="text" maxlength="4" name="year" id="year" value="<?php print $year; ?>" placeholder="2020" />
							</div>
							<!-- Break -->
							<!--Submit buttons-->
							<div class="12u$">
								<ul class="actions">
									<li><input type="submit" name = "submit"  value="Add"/></li>
									<li><input type="reset" name ="reset" value="Reset" class="alt" /></li>
								</ul>
							</div>
						</div>
					</form><!--close form-->
				</div><!--close inner-->
			</div><!--close #enter collapse-->
		</div><!--close container-->

		<!-- Footer and Scripts-->
		<?php 
			include "footer.php";
			include "script.php";
		?>
	</body>
</html>