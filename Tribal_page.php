# Wild-Circus
Code source du site Wild Circus by the Peacocks Company

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="design_style.css" title="design"/>
		<link rel="stylesheet" type="text/css" href="performance_page_style.css"/>
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
		
			<body background="photos/fond_tribal2.jpg">
		
			<?php
				include ("header.php");
			?>
			
			<section>
				<article>
				
					<div id="arrow">
						<a href="javascript:history.go(-1)" title="Previous"><img src="illustrations/before.png" alt="left arrow"/></a>
						<a href="Samurai_page.php" title="Next Performance"><img src="illustrations/next.png" alt="right arrow"/></a>
					</div>
	
					<h1>The Tribal dance</h1>
	
					<div id="photos">
						<a href="photos/page_tribal3_zoom.jpg" title="zoom"><img src="photos/page_tribal3.jpg" alt="Tribal Dance photo"/></a>
						<a href="photos/page_tribal4_zoom.jpg" title="zoom"><img src="photos/page_tribal4.jpg" alt="Tribal Dance photo"/></a>
						<a href="photos/page_tribal1_zoom.jpg" title="zoom"><img src="photos/page_tribal1.jpg" alt="Tribal Dance photo"/></a>
						<a href="photos/page_tribal2_zoom.jpg" title="zoom"><img src="photos/page_tribal2.jpg" alt="Tribal Dance photo"/></a>
					</div>
					
					<div ="video">
						<video controls poster="photos/video_tribal.jpg" width= "800px">
							It's time to upgrade your browser!
							<source src="videos/tribal_dance.mp4">
							<source src="videos/tribal_dance.webm">
							<source src="videos/tribal_dance.ogv">
						</video>	
					</div>
							
					</br>
					
					<p>This spider is a male <strong>Maratus speciosus</strong> (Coastal peacock spider). With its length of 4 mm, it was discovered in 1874. It lives in the coastal dunes near Perth in Western Australia. 
					This peacocks spider specie is unique for its asymmetric and staccato legwork and for its tribal mask on its back.
					No footage of this specie exists in any wildlife documentary.</p>
							
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

