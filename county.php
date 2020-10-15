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

		<h1 align = "center"><a href="#">County</a></h1>
		
		<!-- Main -->
		<div class="container">	
            <button class="tablink" onclick="openPage('show', this, '#ff9900')" id="defaultOpen">Existing Counties</button>
			<button class="tablink" onclick="openPage('enter', this, '#ff9900')">Enter new County</button>
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
						$countyName = "";
						$city = "";
						$msg = "";
				
						$countyNameok = false;

						if (isset($_POST['submit'])) //check if this page is requested after Submit button is clicked
						{
					
							//take the information submitted and send to a process file
							//always trim the user input to get rid of the additiona white spaces on both ends of the user input
							$countyName = trim($_POST['countyName']);
							$city = trim($_POST['city']);

							//VALIDATION
							//Making sure the required fields are not empty
							if ($countyName== "")
							{
								$msg = $msg . '<br/><b>Please enter the county Name</b>';
							}
							else
							{
								$countyNameok = true;

							}
					
							//if everything is correct
							if ($countyNameok) 
							{
								//direct to another page to process using query strings
								$_SESSION['countyName']= $countyName;
								$_SESSION['city']= $city;
								//header("Location: process.php");
							}                
						}	
					?>

					<!-- Form -->
					<form method="post" action="county.php">
						<div class="row uniform">
							<?php
								print $msg;
							?>
							<div class="12u$">
								County Name<sup>*</sup>
								<input type="text" maxlength="30" name="countyName" id="countyName" value="<?php print $countyName; ?>" placeholder="Marion" />
							</div>
							<!-- Break -->
							<div class="12u$">
								City
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
			</div><!--close #enter tab-->
		</div><!--close container-->

		<!-- Footer and Scripts-->
		<?php 
			include "footer.php";
			include "script.php";
		?>
	</body>
</html>