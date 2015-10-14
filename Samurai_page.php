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
		
			<body background="photos/fond_samurai.jpg">
		
			<?php
				include ("header.php");
			?>
			
			<section>
				<article>
				
					<div id="arrow">
						<a href="javascript:history.go(-1)" title="Previous"><img src="illustrations/before.png" alt="left arrow"/></a>
						<a href="Charleston_page.php" title="Next Performance"><img src="illustrations/next.png" alt="right arrow"/></a>
					</div>
	
					<h1>The Samurai demonstration</h1>
	
					<div id="photos">
						<a href="photos/page_samurai1_zoom.jpg" title="zoom"><img src="photos/page_samurai1.jpg" alt="Samurai demonstration photo"/></a>
						<a href="photos/page_samurai3_zoom.jpg" title="zoom"><img src="photos/page_samurai3.jpg" alt="Samurai demonstration photo"/></a>
						<a href="photos/page_samurai2_zoom.jpg" title="zoom"><img src="photos/page_samurai2.jpg" alt="Samurai demonstration photo"/></a>
						<a href="photos/page_samurai4_zoom.jpg" title="zoom"><img src="photos/page_samurai4.jpg" alt="Samurai demonstration photo"/></a>
					</div>
					
					<div ="video">
						<video controls poster="photos/video_samurai.jpg" width= "800px">
							It's time to upgrade your browser!
							<source src="videos/samurai_dance.mp4">
							<source src="videos/samurai_dance.webm">
							<source src="videos/samurai_dance.ogv">
						</video>	
					</div>
											
					</br>
					
					<p>This spider is a male <strong>Maratus Amabilis</strong> (amabilis = lovely). A single specimen was discovered for the first time in 1878. 
					Then, it remained the only known to science until in December 2009, with the discovery of a population in bushland near Sydney.
					This peacocks spider specie is unique for its for its quickness moving and its agility. 
					All scenes you see are at the original speed, that is the way the spider moves.</p>
							
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

