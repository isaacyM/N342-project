<?php
	session_start();
		include "header.php";
		include "util.php";
?>

	<body>
		<div id="main">
			<div id="header">  
				<div id="welcome">
					<h1><a href="#">Admin Register</a></h1>
				</div><!--close welcome-->
				<div id="header_image"></div>	      	
			</div><!--close header-->	
			
			<div id="site_content">	  
				<div id="content">	  
					<div class="content_item" style="padding-top:20px;">
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
							$level = "";
							$active = "";
							$msg = "";

							$yesChecked = "";
							$noChecked = "";
					
							$fnok = false;
							$lnok = false;
							$emailok = false;
							$pwdok = false;

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
						
								$level = trim($_POST['level']);

								//Active
								if (isset($_POST['active']))
									$active = trim($_POST['active']);

								//VALIDATION
								//Validating email
								if (!spamcheck($em))							
										$msg = $msg . '<br/><b>Email is not valid.</b>';
									else $emailok = true;

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
									$fnok = true;
								}
						
								if ($ln== "")
								{
									$msg = $msg . '<br/><b>Please enter the Last Name</b>';
								}
								else
								{
									$lnok = true;
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
									$pwdok = true;
								}

								//if everything is correct
								if ($fnok && $lnok && $emailok && $pwdok) 
								{
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
									//header("Location: process.php");
								}                
							}	
						?>
						
						<div class="form_settings">
							<!-- Form -->
							<form method="post" action="adminreg.php">
								<?php
									print $msg;
								?>
								<p>
									<span>First Name</span>
									<input type="text" maxlength="30" name="firstName" id="firstName" value="<?php print $fn; ?>" placeholder="First Name" />
								</p>
								<p>
									<span>Middle Name</span>
									<input type="text" maxlength="30" name="middleName" id="middleName" value="<?php print $mn; ?>" placeholder="Middle Name" />
								</p>
								<p>
									<span>Last Name</span>
									<input type="text" maxlength="30" name="lastName" id="lastName" value="<?php print $ln; ?>" placeholder="Last Name" />
								</p>
								<p>
									<span>Username (Email)</span>
									<input type="text" name="email" id="email" maxlength="50" value="<?php print $em; ?>" placeholder="Email" />
								</p>
								<p>
									<span>Confirm Username</span>
									<input type="text" name="confirmEmail" id="confirmEmail" maxlength="50" value="<?php print $cem; ?>" placeholder="Confirm Email" />
								</p>
			
								<p>
									<span>Password</span>
									<input type="password" name="password" id="password" maxlength="50" value="<?php print $pwd; ?>" placeholder="Password" />
								</p>

								<p>
									<span>Confirm Password</span>
									<input type="password" name="confirmPassword" id="confirmPassword" maxlength="50" value="<?php print $cpwd; ?>" placeholder="Confirm Password" />
								</p>	
							

								<!-- Break -->
								<span>Level:</span>
								<div>
									<select name="level" id="level">
											<option value="Super Admin" selected>Super Admin</option>
											<option value="Regular Admin">Regular Admin</option>
											<option value="Grade Level Chair">Grade Level Chair</option>
									</select>
								</div><br />
					
								<!-- Break -->

								Active:
								<div>
									<p>
										<input type="radio" name="active" id = "yes" value = "Yes" <?php print $yesChecked; ?> checked />
										<label for="yes">Yes</label>
									</p>
									<p>
										<input type="radio" name="active" id = "no" value = "No" <?php print $noChecked; ?> />
										<label for="no">No</label>
									</p>
								</div><br />

								<!-- Break -->
								<!--Submit buttons-->
								<div>
									<input class = "submit" type="submit" name = "submit"  value="Submit" />
									<input class = "submit" type="reset" name = "reset" value="Reset"/>
								</div>
							</form>
					
						</div><!--close form_settings-->
					</div><!--close content_item-->  		
				</div><!--content--> 
			</div><!--close site_content--> 
	</div><!--close main-->	
</body>
</html>
