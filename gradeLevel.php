<?php
	session_start();
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

		<h1 align = "center"><a href="#">Project Grade Level</a></h1>
		
		<!-- Main -->
		<section id="main" class="wrapper">
			<div class="container"> 
				<div class="12u">
					<button data-toggle="collapse" data-target="#enter"><i class="fas fa-sign-in-alt"> Enter new Project Grade Level</i></button>
					<div id="enter" class="collapse">
						<div class="inner"> 
							
							<!--PHP Code--->
							<?php
								//always initialize variables to be used
								$gradeLevel = "";
								$active = "";
								$msg = "";

								$yesChecked = "";
								$noChecked = "";
								$everythingOk= false;

								if (isset($_POST['submit'])) //check if this page is requested after Submit button is clicked
								{
							
									//take the information submitted and send to a process file
									//always trim the user input to get rid of the additiona white spaces on both ends of the user input
									$gradeLevel = trim($_POST['gradeLevel']);

									//Active
									if (isset($_POST['active']))
										$active = trim($_POST['active']);
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

									//VALIDATION
									//Making sure the required fields are not empty
									if ($gradeLevel== "")
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
										$_SESSION['gradeLevel']= $gradeLevel;
										$_SESSION['active']=$active;
										//header("Location: process.php");
									}                
								}	
							?>

							<!-- Form -->
							<form method="post" action="gradeLevel.php">
								<div class="row uniform">
									<?php
										print $msg;
									?>
									<div class="12u$">
										<b>Project Grade Level<sup>*</sup></b>
										<input type="text" maxlength="2" name="gradeLevel" id="gradeLevel" placeholder="1" />
									</div>
									<!-- Break -->
									<div class="1u$ 12u$(small)">
										<b>Active</b>
									</div>
									<div class="1u$ 12u$(small)">
										<input type="radio" name="active" id = "yes" value = "Yes" <?php print $yesChecked; ?> checked />
										<label for="yes">Yes</label>
									</div>
									<div class="1u$ 12u$(small)">
										<input type="radio" name="active" id = "no" value = "No" <?php print $noChecked; ?> />
										<label for="no">No</label>
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
				<div class="12u">
					<!--For Edit-->
					<button data-toggle="collapse" data-target="#edit"><i class="fas fa-edit"> Edit</i></button>
					<div id="edit" class="collapse">
						table here
					</div><!--close #delete collapse-->
				</div>
				<!-- Break -->
				<div class="12u">
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