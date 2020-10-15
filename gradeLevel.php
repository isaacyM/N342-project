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

		<h1 align = "center"><a href="#">Project Grade Level</a></h1>
		
		<!-- Main -->
		<div class="container">	
            <button class="tablink" onclick="openPage('show', this, '#ff9900')" id="defaultOpen">Existing Project Grade Levels</button>
			<button class="tablink" onclick="openPage('enter', this, '#ff9900')">Enter new Project Grade Level</button>
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
						$gradeLevel = "";
						$active = "";
						$msg = "";

						$yesChecked = "";
						$noChecked = "";
						$gradeLevelOk= false;
						$activeOk = false;

						if (isset($_POST['submit'])) //check if this page is requested after Submit button is clicked
						{
					
							//take the information submitted and send to a process file
							//always trim the user input to get rid of the additiona white spaces on both ends of the user input
							$gradeLevel = trim($_POST['gradeLevel']);
							$active = trim($_POST['active']);
							
							//VALIDATION
							if ($active == "")
							{
								$msg = $msg . '<br/><b>Please select if active.</b>';
							}
							else
							{
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
								$activeOk = true;
							}
							//Making sure the required fields are not empty
							if ($gradeLevel== "")
							{
								$msg = $msg . '<br/><b>Please enter the required fields.</b>';
							}
							else
							{
								$gradeLevelOk= true;
							}
					
							//if everything is correct
							if ($gradeLevelOk && $activeOk) 
							{
								//query to send data to database
								$statement = $connect->prepare("INSERT INTO PROJECT_GRADE_LEVEL(LevelName, Active) VALUES($gradeLevel, $active)");
								$statement->execute();

								//direct to another page to process using query strings
								$_SESSION['gradeLevel']= $gradeLevel;
								$_SESSION['active']=$active;
								$msg = '<br/><b>New project Grade Level added</b><br/>';
								header("Location: gradeLevel.php");
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
								<input type="text" maxlength="20" name="gradeLevel" id="gradeLevel" placeholder="1" />
							</div>
							<!-- Break -->
							<div class="row uniform">
								<b>Active<sup>*</sup></b>
								<div class="4u 12u$(small)">
									<input type="radio" name="active" id = "yes" value = "Yes" <?php print $yesChecked; ?> />
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