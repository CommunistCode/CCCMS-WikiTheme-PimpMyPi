<html>
	
  <head>

  	<title><?php echo(SITE_NAME." : ".$_title); ?></title>

    <!-- Javascript CSS Hacks -->
    <script src="<?php echo(DIRECTORY_PATH); ?>/base/themes/berry/scripts/cssTricks.js"></script> 
	
    <link href="<?php echo(DIRECTORY_PATH); ?>/base/themes/<?php echo($_pageTools->getTheme("base")); ?>/stylesheets/cssReset.css" rel="stylesheet" />  	
    <link href="<?php echo(DIRECTORY_PATH); ?>/base/themes/<?php echo($_pageTools->getTheme("base")); ?>/stylesheets/base.css" rel="stylesheet" />
  	<link href="themes/<?php echo($_pageTools->getTheme("wiki")); ?>/stylesheets/wikiStyle.css" rel="stylesheet" />

    <!--[if IE]>
      <link href="<?php echo(DIRECTORY_PATH); ?>/base/themes/berry/stylesheets/ie.css" rel="stylesheet" />
    <![endif]-->

	</head>

	<body>

		<div id="mainContainer">

  		<div id="title">
	
  			<?php 
					require_once(FULL_PATH."/base/themes/".$_pageTools->getTheme("base")."/templates/title.inc.php"); 
				?>
	
  		</div>

      <div class='brownSpacer'></div>
	
  		<div id='navBar'>
	
  			<?php 
					require_once(FULL_PATH."/base/themes/".$_pageTools->getTheme("base")."/templates/links.inc.php"); 
				?>
	
  		</div>
	
      <div class='brownSpacer'></div>

  		<div id='body' class='faux'>

				<div class="sidebar">
	
  				<?php
						require_once("includes/wikiLinks.inc.php");
					?>
	
  			</div>
			
				<div class="sideBody">
		
			  <?php

					echo("<h1>".$_heading."</h1>");
					
          if (!isset($_disableWikiCategoryBar)) {
						
						require_once("includes/wikiCategoryBar.inc.php");

					}

					if (isset($_help)) {
						
						echo("<div class='help'>".$help."</div>");

					}

					if (isset($_content)) {

						echo($_content);

					}

        ?>

				
				</div>
	
  		</div>
	
	
    <div class='brownSpacer'></div>
  	
    <div id="footer">
	
  			<?php 
					require_once(FULL_PATH."/base/themes/".$_pageTools->getTheme("base")."/templates/footer.inc.php"); 
				?>
	
  	</div>

  	</div>
    
    <script type='text/javascript'>

      setCSSHeight();

    </script>
	
  </body>

</html>
