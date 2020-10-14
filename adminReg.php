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
                <h1 align = "center"><a href="#">Enter a new Admin</a></h1>  
                
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
                
                        $adminLevel = trim($_POST['adminLevel']);

                        //Active
                        if (isset($_POST['active']))
                            $active = trim($_POST['active']);

                        //VALIDATION
                        //Validating email
                        if (!spamcheck($em))							
                                $msg = $msg . '<br/><b>Email is not valid.</b>';
                            else $emailok = true;

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

                <!-- Form -->
                <form method="post" action="adminReg.php">
                    <?php
                        print $msg;
                    ?>
                    <dl>
                        <dt>First Name<sup>*</sup></dt>
                        <input type="text" maxlength="30" name="firstName" id="firstName" value="<?php print $fn; ?>" placeholder="John" />
                    </dl>
                    <dl>
                        <dt>Middle Name</dt>
                        <input type="text" maxlength="30" name="middleName" id="middleName" value="<?php print $mn; ?>" placeholder="Adam" />
                    </dl>
                    <dl>
                        <dt>Last Name<sup>*</sup></dt>
                        <input type="text" maxlength="30" name="lastName" id="lastName" value="<?php print $ln; ?>" placeholder="Doe" />
                    </dl>
                    <dl>
                        <dt>Username (Email)<sup>*</sup></dt>
                        <input type="text" name="email" id="email" maxlength="50" value="<?php print $em; ?>" placeholder="johndoe@gmail.com" />
                    </dl>
                    <dl>
                        <dt>Confirm Username<sup>*</sup></dt>
                        <input type="text" name="confirmEmail" id="confirmEmail" maxlength="50" value="<?php print $cem; ?>" placeholder="johndoe@gmail.com" />
                    </dl>

                    <dl>
                        <dt>Password<sup>*</sup></dt>
                        <input type="password" name="password" id="password" maxlength="50" value="<?php print $pwd; ?>" placeholder="Password" />
                    </dl>

                    <dl>
                        <dt>Confirm Password<sup>*</sup></dt>
                        <input type="password" name="confirmPassword" id="confirmPassword" maxlength="50" value="<?php print $cpwd; ?>" placeholder="Confirm Password" />
                    </dl>	

                    <dl>
                        <dt>Admin Level:</dt>
                        <dt>
                            <select name="adminLevel" id="adminLevel">
                                    <option value="0" selected>-Admin Level-</option>
                                    <option value="1">Regular Admin</option>
                                    <option value="2">Grade Level Chair</option>
                            </select>
                        </dt>
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
                        <input class = "submit" type="submit" name = "submit"  value="Register" />
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
