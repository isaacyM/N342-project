<?php
	session_start();
    include "header.php";
    include "util.php";
?>

    <body>
        <div id="main">
            <div id="header">  
                <div id="welcome">
                    <h1><a href="#">Judge Registeration</a></h1>
                </div><!--close welcome-->	
                
                <!--menu--->
                <?php
                    include "menu.php";
				?>
                
                <div id="header_image"></div>	    	
            </div><!--close header-->	
            
            <div id="site_content">	  
                <div id="content">	  
                    <div class="content_item" style="padding-top:20px;">
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
                        
                        <div class="form_settings">
                            <!-- Form -->
                            <form method="post" action="judgereg.php">
                                <?php
                                    print $msg;
                                ?>
                                <div>
                                    <p>
                                        <span>First Name</span>
                                        <input type="text" maxlength="30" name="firstName" id="firstName" value="<?php print $fn; ?>" placeholder="John" /><br />
                                    </p>
                                    <p>
                                        <span>Middle Name</span>
                                        <input type="text" maxlength="30" name="middleName" id="middleName" value="<?php print $mn; ?>" placeholder="Adam" /><br />
                                    </p>
                                    <p>
                                        <span>Last Name</span>
                                        <input type="text" maxlength="30" name="lastName" id="lastName" value="<?php print $ln; ?>" placeholder="Doe" /> <br />
                                    </p>
                                </div>

                                <div>
                                    <p>
                                        <span>Title</span>
                                        <input type="text" maxlength="30" name="title" id="title" value="<?php print $title; ?>" placeholder="Title" /><br />
                                    </p>
                                    <p>
                                        <span>Highest Degree Earned</span>
                                        <div>
                                            <select name="degree" id="degree">
                                                <option value="High School Diploma">High School Diploma</option>
                                                <option value="Associate Degree">Associate Degree</option>
                                                <option value="Bachelor's Degree" selected>Bachelor's Degree</option>
                                                <option value="Master's Degree">Master's Degree</option>
                                                <option value="PHD">PHD</option>
                                            </select>
                                        </div>
                                    </p>
                                    <p>
                                        <span>Employer</span>
                                        <input type="text" maxlength="50" name="employer" id="employer" value="<?php print $employer; ?>" placeholder="Employer" /><br />
                                    </p>
                                </div>

                                <div>
                                    <p>
                                        <span>Username (Email)</span>
                                        <input type="text" name="email" id="email" maxlength="50" value="<?php print $em; ?>" placeholder="johndoe@gmail.com" /><br />
                                    </p>
                                    <p>
                                        <span> Confirm Username</span> 
                                        <input type="text" name="confirmEmail" id="confirmEmail" maxlength="50" value="<?php print $cem; ?>" placeholder="johndoe@gmail.com" /><br />
                                    </p>
                                </div> 

                                <div>
                                    <p>
                                        <span>Password</span>
                                        <input type="password" name="password" id="password" maxlength="50" value="<?php print $pwd; ?>" placeholder="Password" /><br/>
                                    </p>
                                    <p>
                                        <span>Confirm Password</span>
                                        <input type="password" name="confirmPassword" id="confirmPassword" maxlength="50" value="<?php print $cpwd; ?>" placeholder="Confirm Password" /><br />	
                                    </p>
                                </div>

                                <div>
                                    <p>
                                        <span>Year of Birth</span>
                                        <select  name = "birthYear">
                                            <?php   $today = getdate();
                                                $yr = $today["year"];
                                                print birthOptionList($yr-5); 
                                            ?>
                                        </select>
                                    </p>
                                </div><br />

                                <!-- Break -->
                                <!--Submit buttons-->
                                <div>
                                    <input class = "submit" type="submit" name = "submit"  value="Submit" /></li>
                                    <input class = "submit" type="reset" name = "reset" value="Reset"/></li>
                                </div>
                            </form>
                        </div><!--close form_settings-->
                    </div><!--close content_item-->  		
                </div><!--content--> 
            </div><!--close site_content--> 
        </div><!--close main-->	
    </body>
</html>
