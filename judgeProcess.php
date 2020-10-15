<?php
	session_start();
    include "header.php";
    include "util.php";
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

        <!-- Main -->
        <section id="main" class="wrapper">
            <div class="inner">
                <!--PHP Code--->
                <?php
                    include "menu.php"; //navigation menu
                
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
                    $msg = "";

                    //assigning session variables values to variables
                    $fn = $_SESSION['firstName'];
                    $mn = $_SESSION['middleName'];
                    $ln =  $_SESSION['lastName'];
                    $title = $_SESSION['title'];
                    $degree = $_SESSION['degree'];
                    $employer = $_SESSION['employer'];
                    $em = $_SESSION['email'];
                    $pwd = $_SESSION['password'];      
                ?>
                <h1 align = "center" style='color:#e0ac0d; font-size:50px;'>Judge Registration Confirmation</h1>
                <form>
                    <!--Field names-->
                    First Name: <?php print $fn ?> <br />
                    Middle Name: <?php print $mn ?> <br />	
                    Last Name: <?php print $ln ?> <br />
                    Title: <?php print $title ?> <br />
                    Degree: <?php print $degree ?> <br />
                    Employer: <?php print $employer ?> <br />
                    Email:	<?php print $em; ?> <br />
                    Encrypted Password:	<?php print password_hash($pwd, PASSWORD_BCRYPT); ?> <br />
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