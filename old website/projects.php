<?php
	include "header.php";
?>

<body>
  <div id="main">
  
	<div id="header">  
	  
	  <div id="welcome">
	    <h1><a href="#">Add</a></h1>
	  </div><!--close welcome-->	  
	  
		
	<?php
		include "menu.php";
	?>
	<?php
		$school = "";
		$county = "";
		$project = "";
		$student = "";
		$category = "";
		$grade = "";
		$gradelevel = "";
		$judgeSession = "";
		$booth = "";


	?>
		
	
	
    <div id="header_image"></div>		
	
	</div><!--close header-->		
	
	<div id="site_content">	  
		
      <div id="content">		  
        
		<div class="content_item">
          	<h1>Add Contents</h1>
			<div class="form_settings">
				<form method="post" action="projects.php">
					<p><span>Enter a new school</span>
						<input type="text" name="school" id="school" maxlength="50" value="<?php print $school; ?>" placeholder="School" />
					</p>
					<p><span>Enter a new county</span>
						<div>
							<select name="county" id="scounty">
									<option value="County1" selected>County1</option>
									<option value="County2">County2</option>
									<option value="County3">County3</option>
							</select>
						</div>
					</p>
					<p><span>Enter a new project</span>
						<input type="text" name="project" id="project" maxlength="50" value="<?php print $project; ?>" placeholder="Project" />
					</p>
					<p><span>Enter a new student</span>
						<input type="text" name="student" id="student" maxlength="50" value="<?php print $student; ?>" placeholder="Student" />
					</p>
					<p><span>Enter a new category</span>
						<div>
							<select name="category" id="category">
									<option value="Category1" selected>Category1</option>
									<option value="Category2">Category2</option>
									<option value="Category3">Category3</option>
							</select>
						</div>
					</p>
					<p><span>Enter a new student grade</span>
						<input type="text" name="grade" id="grade" maxlength="50" value="<?php print $grade; ?>" placeholder="grade" />
					</p>
					<p><span>Enter a new project grade level</span>
						<div>
							<select name="gradelevel" id="gradelevel">
									<option value="Level1" selected>Level1</option>
									<option value="Level2">Level2</option>
									<option value="Level3">Level3</option>
							</select>
						</div>
					</p>
					<p><span>Enter a new judge session</span>
						<input type="judgeSession" name="judgeSession" id="judgeSession" maxlength="50" value="<?php print $judgeSession; ?>" placeholder="judgeSession" />
					</p>
					<p><span>Enter a new booth number</span>
						<input type="text" name="booth" id="booth" maxlength="50" value="<?php print $booth; ?>" placeholder="Booth" />
					</p>
					<!--Submit buttons-->
					<div>
						<input class = "submit" type="submit" name = "submit"  value="Submit" />
						<input class = "submit" type="reset" name = "reset" value="Reset"/>
					</div>
				</form>
			</div><!--close form setting--> 
  						
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
