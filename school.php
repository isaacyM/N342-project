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

		<h1 align = "center"><a href="#">School</a></h1>
		
		<!-- Main -->
		<section id="main" class="wrapper">
			<div class="container"> 
				<div class="12u$">
					<button data-toggle="collapse" data-target="#enter"><i class="fas fa-sign-in-alt"> Enter new School</i></button>
					<div id="enter" class="collapse">
						<div class="inner"> 
							
							<!--PHP Code--->
							<?php
								//always initialize variables to be used
								$schoolName = "";
								$county = "";
								$city = "";
								$active = "";
								$msg = "";

								$yesChecked = "";
								$noChecked = "";
						
								$schoolNameok = false;

								if (isset($_POST['submit'])) //check if this page is requested after Submit button is clicked
								{
							
									//take the information submitted and send to a process file
									//always trim the user input to get rid of the additiona white spaces on both ends of the user input
									$schoolName = trim($_POST['schoolName']);
									$county = trim($_POST['county']);
									$city = trim($_POST['city']);

									//Active
									if (isset($_POST['active']))
										$active = trim($_POST['active']);

									//VALIDATION
									//Making sure the required fields are not empty
									if ($schoolName== "")
									{
										$msg = $msg . '<br/><b>Please enter the School Name</b>';
									}
									else
									{
										$schoolNameok = true;
									}

									//taking the selected value for active
									if ($active=="Yes") 
									{
										$yesChecked="checked";
										$noChecked="";
									}
									else 
									{
										$yesChecked="";
										$noChecked="checked";
									}
							
									//if everything is correct
									if ($schoolNameok) 
									{
										//direct to another page to process using query strings
										$_SESSION['schoolName']= $schoolName;
										$_SESSION['county']= $county;
										$_SESSION['city']= $city;
										$_SESSION['active']=$active;
										//header("Location: process.php");
									}                
								}	
							?>

							<!-- Form -->
							<form method="post" action="school.php">
								<div class="row uniform">
									<?php
										print $msg;
									?>
									<div class="12u$">
										<b>School Name<sup>*</sup></b>
										<input type="text" maxlength="60" name="schoolName" id="schoolName" value="<?php print $schoolName; ?>" placeholder="IUPUI" />
									</div>
									<!-- Break -->
									<div class="6u 12u$(xsmall)">
										<b>County</b>
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
										<b>County</b>
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
									<div class="row uniform">
										<b>Active</b>
										<div class="4u 12u$(small)">
											<input type="radio" name="active" id = "yes" value = "Yes" <?php print $yesChecked; ?> checked />
											<label for="yes">Yes</label>
										</div>
										<div class="4u$ 12u$(small)">
											<input type="radio" name="active" id = "no" value = "No" <?php print $noChecked; ?> />
											<label for="no">No</label>
										</div>
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