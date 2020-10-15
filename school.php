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

		<h1 align = "center"><a href="#">School</a></h1>
		
		<!-- Main -->
		<div class="container">	
            <button class="tablink" onclick="openPage('show', this, '#ff9900')" id="defaultOpen">Existing Schools</button>
			<button class="tablink" onclick="openPage('enter', this, '#ff9900')">Enter new School</button>
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
						$schoolName = "";
						$county = "";
						$city = "";
						$msg = "";

						$yesChecked = "";
						$noChecked = "";
				
						$schoolNameOk = false;
						$countyOk = false;
						$cityOk = false;

						if (isset($_POST['submit'])) //check if this page is requested after Submit button is clicked
						{
					
							//take the information submitted and send to a process file
							//always trim the user input to get rid of the additional white spaces on both ends of the user input
							$schoolName = trim($_POST['schoolName']);
							$county = trim($_POST['county']);
							$city = trim($_POST['city']);
							
							//VALIDATION
							//Making sure the required fields are not empty
							if ($schoolName== "")
							{
								$msg = $msg . '<br/><b>Please enter the School Name</b>';
							}
							else
							{
								$schoolNameOk = true;
							}
							if ($county== "")
							{
								$msg = $msg . '<br/><b>Please select the county</b>';
							}
							else
							{
								$countyOk = true;

							}
							if ($city== "")
							{
								$msg = $msg . '<br/><b>Please select the city</b>';
							}
							else
							{
								$cityOk = true;

							}
					
							//if everything is correct
							if ($schoolNameOk && $countyOk && $cityOk) 
							{
								//query to send data to database
								$statement = $connect->prepare("INSERT INTO SCHOOL(SchoolName, SchoolCity, SchoolCountyID) VALUES($schoolName, $city, $county)");
								$statement->execute();

								//direct to another page to process using query strings
								$_SESSION['schoolName']= $schoolName;
								$_SESSION['county']= $county;
								$_SESSION['city']= $city;
								$msg = '<br/><b>New School added</b><br/>';
								header("Location: school.php");
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
								<b>County<sup>*</sup></b>
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
								<b>City<sup>*</sup></b>
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