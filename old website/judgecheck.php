<?php
	include "header.php";
?>

<body>
	<div id="main">
 
	<div id="header">  

	<div id="welcome">
		<h1><a href="#">Judge Check In</a></h1>
	</div><!--close welcome-->	
  
	<?php
		include "menu.php";
	?>

	<?php

		$score = "";
	?>

	
	<div id="header_image"></div>	  		    	
	
	</div><!--close header-->		 
	
	<div id="site_content">  
	 
	<div id="content">		
		
	<div class="content_item">		
		
	<h1>Judge Check In</h1>
        		  							
		<!-- Form -->

				<form method="post" action="#">

				<!----------------------------------------Text Boxes--------------------------------------------------------->

				<table>
					<tr>
						<td>	
                            
                            <input class  = "submit" name="check" class="btn" type="submit" value="Check In" />
								
							<br />
					

					
							Enter a score for a project: <?php print $score; ?> <br />
								<input type="text" maxlength = "10" value="score" name="score" id="score"  placeholder="Score" />
							<br />
				
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
