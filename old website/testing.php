<?php
	include "header.php";
   	ob_start();
	session_start();
?>
<html>
<body>
	<div id="main">
 
	<div id="header">  

	<div id="welcome">
		<h1><a href="#">Judge</a></h1>
	</div><!--close welcome-->
	
	<div id="header_image"></div>
	<?
		include "menu.php";
	?>

	  		    	
	</div><!--close header-->

       	<style> 
        
         	.form-signin 
		{
            		max-width: 330px;
            		padding: 15px;
            		margin: 0 auto;
            		color: #284020;
         	}
         
         	.form-signin .form-signin-heading, .form-signin .checkbox
		{
            		margin-bottom: 10px;
         	}
         
         	.form-signin .checkbox 
		{
            		font-weight: normal;
        	}
         
         	.form-signin .form-control 
		{
            		position: relative;
            		height: auto;
            		-webkit-box-sizing: border-box;
            		-moz-box-sizing: border-box;
            		box-sizing: border-box;
            		padding: 10px;
            		font-size: 16px;
         	}
         
         	.form-signin .form-control:focus 
		{
            		z-index: 2;
         	}
         
         	.form-signin input[type="email"] 
		{
            		margin-bottom: 10px;
            		border-bottom-right-radius: 0;
            		border-bottom-left-radius: 0;
            		border-color:#284020;
         	}
         
         	.form-signin input[type="password"] 
		{
            		margin-bottom: 10px;
            		border-top-left-radius: 0;
            		border-top-right-radius: 0;
            		border-color:#284020;
         	}
         
      	</style>
 
	<?php
		
        	$msg = '';
            
            	if (isset($_POST['login']) && !empty($_POST['username']) && !empty($_POST['password'])) 
		{
			if ($_POST['username'] == 'testing' && $_POST['password'] == '1234') 
			{
                  		$_SESSION['valid'] = true;
                  		$_SESSION['timeout'] = time();
                  		$_SESSION['username'] = 'tutorialspoint';
                  
                  		echo 'You have entered valid use name and password';
               		}
			else
			{
                  		$msg = 'Wrong username or password';
               		}
            	}

	?>      
		 
	
	<div id="site_content">  
	 
		<div id="content">		
		
		<div class="content_container">			
		
			<h1>Judge Login</h1>
      
	

      				<h2>Enter Username and Password</h2> 
      
        				<form class = "form-signin" role = "form" action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method = "post">


						<h4 class = "form-signin-heading"><?php echo $msg; ?></h4>

							<input type = "text" class = "form-control" name = "username" placeholder = "username" required autofocus></br>

							<input type = "password" class = "form-control" name = "password" placeholder = "password" required>
        
						<div>
							<input class = "button" type="submit" name = "submit"  value="Submit" />
							<input class = "submit" type="reset" name = "reset" value="Reset"/>
						</div>


         				</form>         
      	</div> 



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
