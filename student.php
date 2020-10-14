<?php
	require_once("aSession.php");
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

		<h1 align = "center"><a href="#">Student</a></h1>
		
		<!-- Main -->
		<section id="main" class="wrapper">
			<div class="container"> 
				<div class="12u$">
					<button data-toggle="collapse" data-target="#enter"><i class="fas fa-sign-in-alt"> Enter new Student</i></button>
					<div id="enter" class="collapse">
						<div class="inner"> 
							
							<!--PHP Code--->
							<?php
								//always initialize variables to be used
								$fn = "";
								$mn = "";
								$ln = "";
								$gradeLevel = "";
								$gender = "";
								$schoolName = "";
								$county = "";
								$city = "";
								$projectNumber = "";
								$projectID = "";
								$year = "";
								$msg = "";
						
								$everythingOk = false;

								if (isset($_POST['submit'])) //check if this page is requested after Submit button is clicked
								{
							
									//take the information submitted and send to a process file
									//always trim the user input to get rid of the additiona white spaces on both ends of the user input
									$fn = trim($_POST['firstName']);
									$mn = trim($_POST['middleName']);
									$ln = trim($_POST['lastName']);
									$gradeLevel = trim($_POST['gradeLevel']);
									$gender = trim($_POST['gender']);
									$schoolName = trim($_POST['schoolName']);
									$county = trim($_POST['county']);
									$city = trim($_POST['city']);
									$projectNumber = trim($_POST['projectNumber']);
									$projectID = trim($_POST['projectID']);
									$year = trim($_POST['year']);
									$msg = "";

									$everythingOk = "";

									//VALIDATION
									//Making sure the required fields are not empty
									if (($fn == "") | ($ln == "") | ($schoolName == ""))
									{
										$msg = $msg . '<br/><b>Please enter the required fields.</b>';
									}
									else
									{
										$everythingOk = true;
									}
									
									//if everything is correct
									if ($everythingOk) 
									{
										//direct to another page to process using query strings
										$_SESSION['fn'] = $fn;
										$_SESSION['mn'] = $mn;
										$_SESSION['ln'] = $ln;
										$_SESSION['gradeLevel'] = $gradeLevel;
										$_SESSION['gender'] = $gender;
										$_SESSION['schoolName'] = $schoolName;
										$_SESSION['county']= $county;
										$_SESSION['city']= $city;
										$_SESSION['projectNumber'] = $projectNumber;
										$_SESSION['projectID'] = $projectID;
										$_SESSION['year'] = $year;
										//header("Location: process.php");
									}                
								}	
							?>

							<!-- Form -->
							<form method="post" action="student.php">
								<div class="row uniform">
									<?php
										print $msg;
									?>
									<div class="4u 12u$(small)">
										<b>First Name<sup>*</sup></b>
										<input type="text" maxlength="30" name="firstName" id="firstName" value="<?php print $fn; ?>" placeholder="John" />
									</div>
									<div class="4u 12u$(small)">
										<b>Middle Name</b>
										<input type="text" maxlength="30" name="middleName" id="middleName" value="<?php print $mn; ?>" placeholder="Adam" />
									</div>
									<div class="4u 12u$(small)">
										<b>Last Name<sup>*</sup></b>
										<input type="text" maxlength="30" name="lastName" id="lastName" value="<?php print $ln; ?>" placeholder="Doe" />
									</div>
									<!-- Break -->
									<div class="12u$">
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
									<!-- Break -->
									<div class="row uniform">
										<b>Gender</b>
										<div class="4u 12u$(small)">
											<input type="radio" name="gender" id = "male" value = "M" checked />
											<label for="male">Male</label>
										</div>
										<div class="4u$ 12u$(small)">
											<input type="radio" name="gender" id = "female" value = "F" />
											<label for="female">Female</label>
										</div>
									</div>
									<!-- Break -->
									<div class="12u$">
										<b>School Name<sup>*</sup></b>
										<input type="text" maxlength="60" name="schoolName" id="schoolName" value="<?php print $schoolName; ?>" placeholder="School Name" />
									</div>
									<!-- Break -->
									<div class="6u$ 12u$(xsmall)">
										<b> School County</b>
										<div class="select-wrapper">
											<select name="county" id="county">
													<option value="County1" selected>County1</option>
													<option value="County2">County2</option>
													<option value="County3">County3</option>
													<option value="County4">County4</option>
											</select>
										</div>
									</div>
									<div class="6u$ 12u$(xsmall)">
										<b>School City</b>
										<div class="select-wrapper">
											<select name="city" id="city">
													<option value="City1" selected>City1</option>
													<option value="City2">City2</option>
													<option value="City3">City3</option>
													<option value="City4">City4</option>
											</select>
										</div>
									</div>
									<!-- Break -->
									<div class="4u 12u$(small)">
										<b>Project Number</b>
										<input type="text" maxlength="4" name="projectNumber" id="projectNumber" value="<?php print $projectNumber; ?>" placeholder="1" />
									</div>
									<div class="4u 12u$(small)">
										<b>Project ID</b>
										<input type="text" maxlength="10" name="projectID" id="projectID" value="<?php print $projectID; ?>" placeholder="Project ID" />
									</div>
									<div class="4u 12u$(small)">
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
				</div>
				<!-- Break -->
				<div class="12u$">
					<!--For Edit-->
					<button data-toggle="collapse" data-target="#edit"><i class="fas fa-edit"> Edit</i></button>
					<div id="edit" class="collapse">
						table here
					</div><!--close #delete collapse-->
				</div>
				<!-- Break -->
				<div class="12u$">
					<!--For Delete-->
					<button data-toggle="collapse" data-target="#delete"><i class="fas fa-trash-alt"> Delete</i></button>
					<div id="delete" class="collapse">
						table here
					</div><!--close #delete collapse-->
				</div>
			</div><!--close container-->
		</section><!--close section-->
		<!-- Footer and Scripts-->
		<?php 
            include "footer.php";
            include "script.php";
		?>
	</body>
</html>