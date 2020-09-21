<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
  <title>ARaynorDesign Template</title>
  <meta name="description" content="free website template" />
  <meta name="keywords" content="enter your keywords here" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'/>    
  <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>


<body>
	<div id="main">
 
	<div id="header">  

	<div id="welcome">
		<h1><a href="#">Judge</a></h1>
	</div><!--close welcome-->	
  
	<?php
		include "menu.php";
	?>

	<?php

		$em = "";
		$cem = "";
		$pass = "";
		$cpass = "";

		$emre="*";
		$lpass = "*"
	?>

	
	<div id="header_image"></div>	  		    	
	
	</div><!--close header-->		 
	
	<div id="site_content">  
	 
	<div id="content">		
		
	<div class="content_item">		
		
	<h1>Judge Login</h1>
        		  							
		<!-- Form -->

				<form method="post" action="#">

				<!----------------------------------------Text Boxes--------------------------------------------------------->

				<table>
					<tr>
						<td>	
							Username (Email): <?php print $emre; ?><br />
								<input type="text" maxlength = "50" value="<?php print $cem; ?>" name="email" id="email"  placeholder="example@gmail.com" />
							<br />
					

					
							Password: <?php print $lpass; ?> <br />
								<input type="password" maxlength = "50" value="<?php print $cpass; ?>" name="password" id="password"  placeholder="Password" />
							<br />
					

							<input name="enter" class="btn" type="submit" value="Submit" />
						</td>
					</tr>
				</table>

				<!----------------------------------------------------------------------------------------------------------->

	</div><!--close content_item-->	  
	</div><!--close content-->
	</div><!--close site_content--> 

	</div><!--close main-->

  	<div id="footer_container">
	<div id="footer">
		
		<div class="content_item_left">  	  			  
			<h3>Another Heading</h3>
		  	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed adipiscing rhoncus odio. Nulla pellentesque purus purus, in convallis ipsum viverra in. Proin at sapien vitae metus luctus faucibus ut eget nunc. Sed sollicitudin vestibulum risus a laoreet. Maecenas viverra diam risus, a porta odio sodales vel. Donec non varius magna, vitae cursus purus. Nulla facilisi. Integer semper ligula felis, eu tempor nisl placerat luctus. Donec rutrum risus eu enim tempus, nec ullamcorper tortor vulputate. Pellentesque in metus ipsum. Quisque adipiscing, ipsum a tristique condimentum, mauris quam consequat dui, eu eleifend lectus lorem euismod nibh. Integer quis pulvinar enim. Phasellus iaculis dui id tincidunt mollis. Curabitur at leo vestibulum, laoreet purus aliquet, blandit justo.</p>          		  				
		</div><!--close content_item-->		

		<div class="content_item_right">  	  			  
		  	<h3>Another Heading</h3>
		  	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed adipiscing rhoncus odio. Nulla pellentesque purus purus, in convallis ipsum viverra in. Proin at sapien vitae metus luctus faucibus ut eget nunc. Sed sollicitudin vestibulum risus a laoreet. Maecenas viverra diam risus, a porta odio sodales vel. Donec non varius magna, vitae cursus purus. Nulla facilisi. Integer semper ligula felis, eu tempor nisl placerat luctus. Donec rutrum risus eu enim tempus, nec ullamcorper tortor vulputate. Pellentesque in metus ipsum. Quisque adipiscing, ipsum a tristique condimentum, mauris quam consequat dui, eu eleifend lectus lorem euismod nibh. Integer quis pulvinar enim. Phasellus iaculis dui id tincidunt mollis. Curabitur at leo vestibulum, laoreet purus aliquet, blandit justo.</p>          		  				
		</div><!--close content_item-->		  
	      
		<div class="copyright">
			<a href="http://validator.w3.org/check?uri=referer">Valid XHTML</a> | <a href="http://fotogrph.com/">Images</a> | website template by <a href="http://www.araynordesign.co.uk">ARaynorDesign</a>
        </div>
		
    </div><!--close footer-->
  </div><!--close footer_container-->	
  
  </body>
</html>
