<?php
	include "header.php";
?>
	<body>
		<!-- Header -->
			<header id="header">
				<nav class="left">
					<a href="#menu"><span>Menu</span></a>
				</nav>
				<a class="logo">SEFI</a>
			</header>

			<?php
				include "menu.php";
			?>
		<!-- Banner -->
			<section id="banner">
				<div class="content">
					<h1>Welcome</h1>
						<p>Please make sure to log-in or register</p>
					<ul class="actions">
						<li><a href="login.php" class="button scrolly">Login</a></li>
					</ul>
					<ul class="actions">
						<li><a href="register.php" class="button scrolly">Register</a></li>
					</ul>

				</div>
			</section>


		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<h2>Get In Touch</h2>
					<ul class="actions">
						<li><span class="icon fa-phone"></span> <a href="#">(000) 000-0000</a></li>
						<li><span class="icon fa-envelope"></span> <a href="#">information@untitled.tld</a></li>
						<li><span class="icon fa-map-marker"></span> 123 Somewhere Road, Indianapolis, IN 00000</li>
					</ul>
				</div>
				<div class="copyright">
					&copy; Untitled. Design <a href="https://templated.co">TEMPLATED</a>. Images <a href="https://unsplash.com">Unsplash</a>.
				</div>
			</footer>

		<!-- Scripts -->
		<?php 
			include "script.php";
		?>
	</body>
</html>