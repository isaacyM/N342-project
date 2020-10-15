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
			<a href="index.php" class="logo">SEFI</a>
		</header>
		
		<!--Navigation menu-->
		<?php
			include "menu.php";
		?>

		<h1 align = "center"><a href="#">Admin</a></h1>
		
		<!-- Main -->
		<div class="container">	
			<button class="tablink" onclick="openPage('show', this, '#ff9900')" id="defaultOpen">Existing Admins</button>
			<button class="tablink" onclick="openPage('enter', this, '#ff9900')">Enter new Admin</button>
            
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
						$fn = "";
						$mn = "";
						$ln = "";
						$em = "";
						$cem = "";
						$pwd = "";
						$cpwd = "";
						$adminLevel = "";
						$level = "";
						$active = "";
						$msg = "";

						$yesChecked = "";
						$noChecked = "";
				
						$fnOk = false;
						$lnOk = false;
						$emailOk = false;
						$pwdOk = false;

						if (isset($_POST['submit'])) //check if this page is requested after Submit button is clicked
						{
					
							//take the information submitted and send to a process file
							//always trim the user input to get rid of the additiona white spaces on both ends of the user input
							$fn = trim($_POST['firstName']);
							$mn = trim($_POST['middleName']);
							$ln = trim($_POST['lastName']);

							$em = trim($_POST['email']);
							$cem = trim($_POST['confirmEmail']);

							$pwd = $_POST['password'];
							$cpwd = $_POST['confirmPassword'];
					
							$adminLevel = trim($_POST['adminLevel']);

							//Active
							if (isset($_POST['active']))
								$active = trim($_POST['active']);

							//VALIDATION
							//Validating email
							if (!spamcheck($em))							
									$msg = $msg . '<br/><b>Email is not valid.</b>';
								else $emailOk = true;

							//assigning actual value for the admin level
							switch ($adminLevel)
							{
								case "1":
									$level = "Regular Admin";
									break;
								case "2":
									$level = "Grade Level Chair";
									break;
								default:
									$level = "";
									break;
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
							
							//Making sure the required fields are not empty
							if ($fn== "")
							{
								$msg = $msg . '<br/><b>Please enter the First Name</b>';
							}
							else
							{
								$fnOk = true;
							}
					
							if ($ln== "")
							{
								$msg = $msg . '<br/><b>Please enter the Last Name</b>';
							}
							else
							{
								$lnOk = true;
							}

							if ($pwd== "")
							{
								$msg = $msg . '<br/><b>Please enter the Password</b>';
							}
					
							//Matching the emails       
							if ($em!=$cem)
							{
								$msg = $msg . '<br/><b>Emails are not the same.</b>';
							}
					
							//Matching the passwords
							if ($pwd != $cpwd)
							{
								$msg = $msg . '<br/><b>Passwords are not the same.</b>';
							}
							else 
							{
								$pwdOk = true;
							}

							//if everything is correct
							if ($fnOk && $lnOk && $emailOk && $pwdOk) 
							{
								//query to send data to database
								$statement = $connect->prepare("INSERT INTO ADMIN(FirstName, LastName, MiddleName, Email, Password, Level, Active) 
								VALUES($fn, $ln, $mn, $em, $pwd, $adminLevel, $active)");
								$statement->execute();

								//direct to another page to process using query strings
								$_SESSION['firstName']= $fn;
								$_SESSION['middleName']= $mn;
								$_SESSION['lastName']= $ln;
								$_SESSION['email']= $em;
								$_SESSION['confirmEmail']= $cem;
								$_SESSION['password']=$pwd;
								$_SESSION['confirmPassword']=$cpwd;
								$_SESSION['level']= $level;
								$_SESSION['active']=$active;
								$msg = '<br/><b>New Admin added</b><br/>';
								header("Location: admin.php");
							}                
						}	
					?>

					<!-- Form -->
					<form method="post" action="admin.php">
						<div class="row uniform">
							<?php
								print $msg;
							?>
							<div class="4u 12u$(small)">
								<b>First Name<sup>*</sup></b>
								<input type="text" maxlength="50" name="firstName" id="firstName" value="<?php print $fn; ?>" placeholder="John" />
							</div>
							<!-- Break -->
							<div class="4u 12u$(small)">
								<b>Middle Name</b>
								<input type="text" maxlength="50" name="middleName" id="middleName" value="<?php print $mn; ?>" placeholder="Adam" />
							</div>
							<!-- Break -->
							<div class="4u$ 12u$(small)">
								<b>Last Name<sup>*</sup></b>
								<input type="text" maxlength="50" name="lastName" id="lastName" value="<?php print $ln; ?>" placeholder="Doe" />
							</div>
							<!-- Break -->
							<div class="6u 12u$(small)">
								<b>Username (Email)<sup>*</sup></b>
								<input type="text" name="email" id="email" maxlength="80" value="<?php print $em; ?>" placeholder="johndoe@gmail.com" />
							</div>
							<!-- Break -->
							<div class="6u$ 12u$(small)">
								<b>Confirm Username<sup>*</sup></b>
								<input type="text" name="confirmEmail" id="confirmEmail" maxlength="80" value="<?php print $cem; ?>" placeholder="johndoe@gmail.com" />
							</div>
							<!-- Break -->
							<div class="6u 12u$(small)">
								<b>Password<sup>*</sup></b>
								<input type="password" name="password" id="password" maxlength="30" value="<?php print $pwd; ?>" placeholder="Password" />
							</div>
							<!-- Break -->
							<div class="6u$ 12u$(small)">
								<b>Confirm Password<sup>*</sup></b>
								<input type="password" name="confirmPassword" id="confirmPassword" maxlength="30" value="<?php print $cpwd; ?>" placeholder="Confirm Password" />
							</div>	
							<!-- Break -->
							<div class="12u$">
								<b>Admin Level<sup>*</sup></b>
								<div class="select-wrapper">
									<select name="adminLevel" id="adminLevel">
											<option value="0" selected>Admin Level</option>
											<option value="1">Regular Admin</option>
											<option value="2">Grade Level Chair</option>
									</select>
								</div>
							</div>
							<!-- Break -->
							<div class="row uniform">
								<b>Active<sup>*</sup></b>
								<div class="4u 12u$(small)">
									<input type="radio" name="active" id = "yes" value = "Yes" <?php print $yesChecked; ?>/>
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
			</div><!--close #enter tab-->
		</div><!--close container-->

		<!-- Footer and Scripts-->
		<?php 
			include "footer.php";
			include "script.php";
		?>
	</body>
</html>