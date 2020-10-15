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

		<h1 align = "center"><a href="#">Add New Project</a></h1>
		
		<!-- Main -->
		<div class="container">
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
            
                    $projectNumberOk= false;
                    $boothNumberOk= false;
                    $cnIDOk= false;
                    $projectTitleOk= false;
                    $abstractOk= false;
                    $gradeLevelOk= false;
                    $categoryOk= false;
                    $averageRankingOk= false;
                    $yearOk= false;

                    if (isset($_POST['submit'])) //check if this page is requested after Submit button is clicked
                    {
                
                        //take the information submitted and send to a process file
                        //always trim the user input to get rid of the additional white spaces on both ends of the user input
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
                        if ($projectNumber == "")
                        {
                            $msg = $msg . '<br/><b>Please enter the project number.</b>';
                        }
                        else
                        {
                            $projectNumberOk= true;
                        }
                        if ($boothNumber == "")
                        {
                            $msg = $msg . '<br/><b>Please enter the booth number.</b>';
                        }
                        else
                        {
                            $boothNumberOk= true;
                        }
                        if ($cnID== "")
                        {
                            $msg = $msg . '<br/><b>Please enter the course network ID.</b>';
                        }
                        else
                        {
                            $cnIDOk= true;
                        }
                        if ($projectTitle == "")
                        {
                            $msg = $msg . '<br/><b>Please enter the project Title.</b>';
                        }
                        else
                        {
                            $projectTitleOk= true;
                        }
                        if ($abstract == "")
                        {
                            $msg = $msg . '<br/><b>Please enter the abstract.</b>';
                        }
                        else
                        {
                            $abstractOk= true;
                        }
                        if ($gradeLevel == "")
                        {
                            $msg = $msg . '<br/><b>Please enter the project grade level.</b>';
                        }
                        else
                        {
                            $gradeLevelOk= true;
                        }
                        if ($category == "")
                        {
                            $msg = $msg . '<br/><b>Please enter the rcategory.</b>';
                        }
                        else
                        {
                            $categoryOk= true;
                        }
                        if ($averageRanking == "")
                        {
                            $msg = $msg . '<br/><b>Please enter the average ranking.</b>';
                        }
                        else
                        {
                            $averageRankingOk= true;
                        }
                        if ($year == "")
                        {
                            $msg = $msg . '<br/><b>Please enter the year.</b>';
                        }
                        else
                        {
                            $yearOk= true;
                        }
                
                        //if everything is correct
                        if ($everythingOk) 
                        {
                            //query to send data to database
                            $statement = "INSERT INTO PROJECT(ProjectNumber, Title, Abstract, GradeLevelID, CategoryID, BoothNumberID, GradeID, CouseNetworkID, AverageRanking, Year) 
                            VALUES($projectNumber, '$projectTitle', '$abstract', $gradeLevel, $category, $boothNumber, $gradeLevel, $cnID, $averageRanking, $year)";

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
                            $msg = '<br/><b>New Project added</b><br/>';
                            if(!mysql_query($statement))
                            {
                                    die("Error adding");
                            }
                            else
                            { 
                                mysql_close();
                                header("Location: project.php");
                            }
                        }                
                    }	
                ?>

                <!-- Form -->
                <form method="post" action="project.php" onsubmit="return false">
                    <?php
                        print $msg;
                    ?>
                    <div class="row uniform">
                        <div class="4u 12u$(small)">
                            <b>Project Number<sup>*</sup></b>
                            <input type="number" maxlength="11" name="projectNumber" id="projectNumber" value="<?php print $projectNumber; ?>" placeholder="4" />
                        </div>
                        <div class="4u 12u$(small)">
                            <b>Booth Number<sup>*</sup></b>
                            <input type="number" maxlength="11" name="boothNumber" id="boothNumber" value="<?php print $boothNumber; ?>" placeholder="1" />
                        </div>
                        <div class="4u$ 12u$(small)">
                            <b>Course Network ID<sup>*</sup></b>
                            <input type="number" maxlength="11" name="cnID" id="cnID" value="<?php print $cnID; ?>" placeholder="123" />
                        </div>
                        <!-- Break -->
                        <div class="12u$">
                            <b>Project Title<sup>*</sup></b>
                            <input type="text" maxlength="50" name="projectTitle" id="projectTitle" value="<?php print $projectTitle; ?>" placeholder="Robots" />
                        </div>
                        <!-- Break -->
                        <div class="12u$">
                            <b>Abstract<sup>*</sup</b>
                            <input type="text" maxlength="250" name="abstract" id="abstract" placeholder="Abstract" value="<?php print $abstract; ?>"/>
                        </div>
                        <!-- Break -->
                        <div class="6u 12u$(xsmall)">
                            <b>Grade Level<sup>*</sup</b>
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
                            <b>Category<sup>*</sup</b>
                            <div class="select-wrapper">
                                <select name="category" id="category">
                                    <option value="" selected>Category</option>
                                    <option value="1">Physics</option>
                                    <option value="2">Chemistry</option>
                                    <option value="3">Biology</option>
                                    <option value="4">Computer</option>
                                </select>
                            </div>
                        </div>
                        <!-- Break -->
                        <div class="6u 12u$(small)">
                            <b>Average Ranking<sup>*</sup</b>
                            <input type="number" maxlength="11" name="averageRanking" id="averageRanking" value="<?php print $averageRanking; ?>" placeholder="3" />
                        </div>
                        <div class="6u$ 12u$(small)">
                            <b>Year<sup>*</sup</b>
                            <input type="number" name="year" id="year" min="1900" max="2030" step="1" value="<?php print $year; ?>" placeholder="2020" />
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
		</div><!--close container-->

		<!-- Footer and Scripts-->
		<?php 
			include "footer.php";
			include "script.php";
		?>
	</body>
</html>