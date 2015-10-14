# Wild-Circus
Code source du site Wild Circus by the Peacocks Company

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="design_style.css" title="design"/>
		<link rel="stylesheet" type="text/css" href="performances_style.css"/>
        <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <title>Wild Circus by Peacock Co.</title>
    </head>
    
    <!--[if IE 6 ]><body class="ie6 old_ie"><![endif]-->
    <!--[if IE 7 ]><body class="ie7 old_ie"><![endif]-->
    <!--[if IE 8 ]><body class="ie8"><![endif]-->
    <!--[if IE 9 ]><body class="ie9"><![endif]-->
    <!--[if !IE]><!--><body><!--<![endif]-->
        
		<div id="bloc_page">
		
			<body background="photos/fond_tribal1.jpg">
		
			<?php
				include ("header.php");
			?>
			
			<section>
				<article>
				
					<div id="Intro">
						<h1>Performances</h1>
						<p>Living dance shows offered by five professional dancers known worldwide. </br>
						Come to discover the photos and video of the Wild Cirus artists.</p>
					</div>
					
					
					<center><div id="container">
					
						<div id="performances">
							<a href="Tribal_page.php" title="Access to the performance page"><img src="photos/menu_tribal.jpg" alt="Tribal Dance photo"/></a>
							<figcaption>The Tribal Dance</figcaption>
						</div>
							
						<div id="performances">
							<a href="Samurai_page.php" title="Access to the performance page"><img src="photos/menu_samurai.jpg" alt="Samurai demonstration photo"/></a>
							<figcaption>The Samurai demonstration</figcaption>
						</div>
						
						<div id="performances">
							<a href="Charleston_page.php" title="Access to the performance page"><img src="photos/menu_charleston.jpg" alt="Charleston solo photo"/></a>
							<figcaption>The Charleston solo</figcaption>
						</div>
						
						<div id="performances">
							<a href="Hypnosis_page.php" title="Access to the performance page"><img src="photos/menu_hypnosis.jpg" alt="Hypnosis photo"/></a>
							<figcaption>Hypnosis</figcaption>
						</div>
						
						<div id="performances">
							<a href="Exorcist_page.php" title="Access to the performance page"><img src="photos/menu_exorcism.jpg" alt="Exorcism show photo"/></a>
							<figcaption>The exorcism show</figcaption>
						</div>
												
					</div></center>
					
				</article>
					
				</br></br>
					
				<?php
					include ("bottom.php");
				?>
					
			</section>
			
				<?php
					include("footer_nav.php");
				?>
				
		</div>
    </body>
</html>

