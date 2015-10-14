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
		
			<body background="photos/fond_exorcist.jpg">
		
			<?php
				include ("header.php");
			?>
			
			<section>
				<article>
				
					<div id="arrow">
						<a href="javascript:history.go(-1)" title="Previous"><img src="illustrations/before.png" alt="left arrow"/></a>
						<a href="Tribal_page.php" title="Next Performance"><img src="illustrations/next.png" alt="right arrow"/></a>
					</div>
	
					<h1>The exorcism show</h1>
	
					<div id="photos">
						<a href="photos/page_exorcist3_zoom.jpg" title="zoom"><img src="photos/page_exorcist3.jpg" alt="Exorcism show photo"/></a>
						<a href="photos/page_exorcist4_zoom.jpg" title="zoom"><img src="photos/page_exorcist4.jpg" alt="Exorcism show photo"/></a>
						<a href="photos/page_exorcist2_zoom.jpg" title="zoom"><img src="photos/page_exorcist2.jpg" alt="Exorcism show photo"/></a>
						<a href="photos/page_exorcist1_zoom.jpg" title="zoom"><img src="photos/page_exorcist1.jpg" alt="Exorcism show photo"/></a>
					</div>
					
					<div ="video">
						<video controls poster="photos/video_exorcist.jpg" width= "800px">
							It's time to upgrade your browser!
							<source src="videos/exorcist_dance.mp4">
							<source src="videos/exorcist_dance.webm">
							<source src="videos/exorcist_dance.ogv">
						</video>	
					</div>
							
					</br>
									
					<p>This spider is a male <strong>Maratus caeruleus</strong> (Bright Blue peacock spider). It lives in Middle Island, a small uninhabited speck of land a few kilometers from Cape Arid in Western Australia. 
					This peacocks spider specie is unique for the quickness of its abdomen's movement and for its colored suit.
					This video is the first footage of this peacocks spider specie. The female is still "unknown to science".</p>
							
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

