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

		<h1 align = "center"><a href="#">Judge Session</a></h1>
		
		<!-- Main -->
		<div class="container">	
            <button class="tablink" onclick="openPage('show', this, '#ff9900')" id="defaultOpen">Existing Judge Sessions</button>
			<button class="tablink" onclick="openPage('enter', this, '#ff9900')">Enter new Session</button>
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
						$sessionNumber = "";
						$startTime = "";
						$endTime = "";
						$active = "";
						$msg = "";

						$yesChecked = "";
						$noChecked = "";
						$everythingOk= false;

						if (isset($_POST['submit'])) //check if this page is requested after Submit button is clicked
						{
					
							//take the information submitted and send to a process file
							//always trim the user input to get rid of the additiona white spaces on both ends of the user input
							$sessionNumber = trim($_POST['sessionNumber']);
							$startTime = trim($_POST['startTime']);
							$endTime = trim($_POST['endTime']);

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
							if (($sessionNumber == "") | ($startTime == "") | ($endTime == ""))
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
								$_SESSION['judgeSession']= $judgeSession;
								$_SESSION['active']=$active;
								//header("Location: process.php");
							}                
						}	
					?>

					<!-- Form -->
					<form method="post" action="judgeSession.php">
						<div class="row uniform">
							<?php
								print $msg;
							?>
							<div class="12u$">
								<b>Session Number<sup>*</sup></b>
								<input type="text" maxlength="10" name="sessionNumber" id="sessionNumber" placeholder="Session Number" />
							</div>
							<!-- Break -->
							<div class="6u$">
								<b>Start Time<sup>*</sup></b>
								<input type="time" name="startTime" id="startTime" />
							</div>
							<div class="6u$">
								<b>End Time<sup>*</sup></b>
								<input type="time" name="endTime" id="endTime" />
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
		</div><!--close container-->

		<!-- Footer and Scripts-->
		<?php 
			include "footer.php";
			include "script.php";
		?>
	</body>
</html>