<?php
	session_start();
		include "header.php";
		include "util.php";
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

			
        
        <!-- Main -->
        <section id="main" class="wrapper">
            <div class="inner">
                <!--header class="align-left"-->
                <h1 align = "center"><a href="#">Judge Registration</a></h1>  
                
                <!--PHP Code--->
                <?php
                    //always initialize variables to be used
                    $fn = "";
                    $mn = "";
                    $ln = "";
                    $title = "";
                    $degree = "";
                    $employer = "";
                    $em = "";
                    $cem = "";
                    $pwd = "";
                    $cpwd = "";
                    $year = "";
                    $msg = "";
                    
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

                        $title = trim($_POST['title']);
                        $degree = trim($_POST['degree']);
                        $employer = trim($_POST['employer']);

                        $em = trim($_POST['email']);
                        $cem = trim($_POST['confirmEmail']);

                        $pwd = $_POST['password'];
                        $cpwd = $_POST['confirmPassword'];
                        
                        $birthYear = $_POST['birthYear'];

                        //VALIDATION
                        //Validating email
                        if (!spamcheck($em))
                            $msg = $msg . '<br/><b>Email is not valid.</b>';
                        else $emailok = true;
                        
                        //Making sure the required fields are not empty
                        if ($fn== "")
                            $msg = $msg . '<br/><b>Please enter the First Name</b>';
                        else
                            $fnok = true;
                        
                        if ($ln== "")
                            $msg = $msg . '<br/><b>Please enter the Last Name</b>';
                        else
                            $lnok = true;

                        if ($pwd== "")
                            $msg = $msg . '<br/><b>Please enter the Password</b>';
                        
                        //Matching the emails       
                        if ($em!=$cem)
                        {
                            $msg = $msg . '<br/><b>Emails are not the same.</b>';
                        }
                        
                        //Matching the passwords
                        if ($pwd != $cpwd)
                            $msg = $msg . '<br/><b>Passwords are not the same.</b>';
                        else $pwdok = true;

                        //if everything is correct
                        if ($fnok && $lnok && $emailok && $pwdok) 
                        {


                            //direct to another page to process using query strings
                            $_SESSION['firstName']= $fn;
                            $_SESSION['middleName']= $mn;
                            $_SESSION['lastName']= $ln;
                            $_SESSION['title']= $title;
                            $_SESSION['degree']= $degree;
                            $_SESSION['employer']= $employer;
                            $_SESSION['email']= $em;
                            $_SESSION['confirmEmail']= $cem;
                            $_SESSION['password']=$pwd;
                            $_SESSION['confirmPassword']=$cpwd;
                            $_SESSION['birthYear']= $birthYear;
                            //header("Location: process.php");
                        }                
                    }
                    
                ?>

                <!-- Form -->
                <form method="post" action="judgeReg.php">
                    <?php
                        print $msg;
                    ?>
                    <dl>
                        <dt>First Name</dt>
                        <input type="text" maxlength="30" name="firstName" id="firstName" value="<?php print $fn; ?>" placeholder="John" />
                    </dl>
                    <dl>
                        <dt>Middle Name</dt>
                        <input type="text" maxlength="30" name="middleName" id="middleName" value="<?php print $mn; ?>" placeholder="Adam" />
                    </dl>
                    <dl>
                        <dt>Last Name</dt>
                        <input type="text" maxlength="30" name="lastName" id="lastName" value="<?php print $ln; ?>" placeholder="Doe" />
                    </dl>
                    <dl>
                        <dt>Title</dt>
                        <input type="text" maxlength="30" name="title" id="title" value="<?php print $title; ?>" placeholder="Title" />
                    </dl>
                    <dl>
                        <dt>Highest Degree Earned</dt>
                        <dt>
                            <select name="degree" id="degree">
                                <option value="High School Diploma">High School Diploma</option>
                                <option value="Associate Degree">Associate Degree</option>
                                <option value="Bachelor's Degree" selected>Bachelor's Degree</option>
                                <option value="Master's Degree">Master's Degree</option>
                                <option value="PHD">PHD</option>
                            </select>
                        </dt>
                    </dl>
                    <dl>
                        <dt>Employer</dt>
                        <input type="text" maxlength="50" name="employer" id="employer" value="<?php print $employer; ?>" placeholder="Employer" />
                    </dl>
                    <dl>
                        <dt>Username (Email)</dt>
                        <input type="text" name="email" id="email" maxlength="50" value="<?php print $em; ?>" placeholder="johndoe@gmail.com" />
                    </dl>
                    <dl>
                        <dt>Confirm Username</dt>
                        <input type="text" name="confirmEmail" id="confirmEmail" maxlength="50" value="<?php print $cem; ?>" placeholder="johndoe@gmail.com" />
                    </dl>

                    <dl>
                        <dt>Password</dt>
                        <input type="password" name="password" id="password" maxlength="50" value="<?php print $pwd; ?>" placeholder="Password" />
                    </dl>

                    <dl>
                        <dt>Confirm Password</dt>
                        <input type="password" name="confirmPassword" id="confirmPassword" maxlength="50" value="<?php print $cpwd; ?>" placeholder="Confirm Password" />
                    </dl>	

                    <dl>
                        <dt>Active:</dt>
                        <dt>
                            <input type="radio" name="active" id = "yes" value = "Yes" <?php print $yesChecked; ?> checked />
                            <label for="yes">Yes</label>

                            <input type="radio" name="active" id = "no" value = "No" <?php print $noChecked; ?> />
                            <label for="no">No</label>
                        </dt>
                    </dl><br />

                    <!-- Break -->
                    <!--Submit buttons-->
                    <dl>
                        <input class = "submit" type="submit" name = "submit"  value="Submit" />
                        <input class = "submit" type="reset" name = "reset" value="Reset"/>
                    </dl>
                </form>
        
            </div><!--close inner-->
        </section>
       
        <!-- Footer and Scripts-->
        <?php 
            include "footer.php";
            include "script.php";
        ?>
	</body>
</html>
