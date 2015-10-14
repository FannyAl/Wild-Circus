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
		
			<body background="photos/fond_hypnosis.jpg">
		
			<?php
				include ("header.php");
			?>
			
			<section>
				<article>
				
					<div id="arrow">
						<a href="javascript:history.go(-1)" title="Previous"><img src="illustrations/before.png" alt="left arrow"/></a>
						<a href="Exorcist_page.php" title="Next Performance"><img src="illustrations/next.png" alt="right arrow"/></a>
					</div>
	
					<h1>Hypnosis</h1>
	
					<div id="photos">
						<a href="photos/page_hypnosis3_zoom.jpg" title="zoom"><img src="photos/page_hypnosis3.jpg" alt="Hypnosis photo"/></a>
						<a href="photos/page_hypnosis2_zoom.jpg" title="zoom"><img src="photos/page_hypnosis2.jpg" alt="Hypnosis photo"/></a>
						<a href="photos/page_hypnosis4_zoom.jpg" title="zoom"><img src="photos/page_hypnosis4.jpg" alt="Hypnosis photo"/></a>
						<a href="photos/page_hypnosis1_zoom.jpg" title="zoom"><img src="photos/page_hypnosis1.jpg" alt="Hypnosis photo"/></a>
					</div>
					
					<div ="video">
						<video controls poster="photos/video_hypnosis.jpg" width= "800px">
							It's time to upgrade your browser!
							<source src="videos/hypnosis_dance.mp4">
							<source src="videos/hypnosis_dance.webm">
							<source src="videos/hypnosis_dance.ogv">
						</video>	
					</div>
												
					</br>
									
					<p>This spider is a male <strong>Maratus linnaei</strong> (Linnaeus' peacock spider). It lives in the Two Peoples Bay National Park in the southwestern corner of Western Australia near Albany. 
					This peacocks spider specie is unique for its seduction strategy based essentially on visual contact with the female.
					This video is the first footage of this peacocks spider specie.</p>
							
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

