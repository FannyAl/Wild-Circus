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
		
			<body background="photos/fond_charleston.jpg">
		
			<?php
				include ("header.php");
			?>
			
			<section>
				<article>
				
					<div id="arrow">
						<a href="javascript:history.go(-1)" title="Previous"><img src="illustrations/before.png" alt="left arrow"/></a>
						<a href="Hypnosis_page.php" title="Next Performance"><img src="illustrations/next.png" alt="right arrow"/></a>
					</div>
	
					<h1>The Charleston solo</h1>
	
					<div id="photos">
						<a href="photos/page_charleston1_zoom.jpg" title="zoom"><img src="photos/page_charleston1.jpg" alt="Charleston solo photo"/></a>
						<a href="photos/page_charleston3_zoom.jpg" title="zoom"><img src="photos/page_charleston3.jpg" alt="Charleston solo photo"/></a>
						<a href="photos/page_charleston2_zoom.jpg" title="zoom"><img src="photos/page_charleston2.jpg" alt="Charleston solo photo"/></a>
						<a href="photos/page_charleston4_zoom.jpg" title="zoom"><img src="photos/page_charleston4.jpg" alt="Charleston solo photo"/></a>
					</div>
					
					<div ="video">
						<video controls poster="photos/video_charleston.jpg" width= "800px">
							It's time to upgrade your browser!
							<source src="videos/charleston_dance.mp4">
							<source src="videos/charleston_dance.webm">
							<source src="videos/charleston_dance.ogv">
						</video>	
					</div>
												
					</br>
									
					<p>This spider is a male <strong>Maratus personatus</strong> (Pied Bluemask Peacock Salspider). It was discovered by David Knowles in 1977. It lives in the Cape Riche near Albany in southwestern Western Australia.
					This peacocks spider specie is unique for its rhythmic and coordinated legwork and for its white and black stripes decorating its body.
					All scenes you see are at the original speed, that is the way the spider moves. A sequel is expected.</p>
						
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
