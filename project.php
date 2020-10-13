<?php
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

		<h1 align = "center"><a href="#">Project</a></h1>
		
		<form method="post" action="#">
			<div class="container"> 
				<input type="text" name = "project"  value="Project" />
                <div>
                    <a href="#" class="button small">
                        <i class="fas fa-sign-in-alt"> Enter</i>
					</a>
					<a href="#" class="button small">
                        <i class="fas fa-edit"> Edit</i>
					</a>
					<a href="#" class="button small">
                        <i class="fas fa-trash-alt"> Delete</i>
                    </a>
                </div>
            </div>
        </form>

		<!-- Footer and Scripts-->
		<?php 
            include "footer.php";
            include "script.php";
		?>
	</body>
</html>