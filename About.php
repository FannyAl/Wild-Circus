# Wild-Circus
Code source du site Wild Circus by the Peacocks Company

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="design_style.css" title="design"/>
		<link rel="stylesheet" type="text/css" href="About_style.css"/>
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
	
					<h1>The Peacock Company</h1>
						
					<div id="photos">
						<img src="photos/about_tribal.jpg" alt="Tribal peacock photo"/>
						<img src="photos/about_samurai.jpg" alt="Samurai peacock photo"/>
						<img src="photos/about_charleston.jpg" alt="Charleston peacock photo"/>
						<img src="photos/about_hypnosis.jpg" alt="Hypnosis peacock photo"/>
						<img src="photos/about_exocist.jpg" alt="Exocist peacock photo"/>
					</div>
							
					<p>The Peacocks Compagny was created in 2005 in Australia. Jürgen Otto, the initiator of this Wild Circus, whishes share those amazing spectacles of the animal world, filmed, edited and narrated by himself.
					With those videos, he hopes change people's opinions about spiders. Currently, he has realized 12 videos of 12 different peacocks spiders species. You can help by sharing his productions in your networks.</p>
						
					</br>
						
					<h1>Why do we do that?</h1>
					
					<p></p>

					<div ="video">
						<video controls poster="photos/video_peacock_hand.jpg" width= "800px">
						It's time to upgrade your browser!
							<source src="videos/doc-peacock _spider.mp4">
							<source src="videos/doc-peacock _spider.webm">
							<source src="videos/doc-peacock _spider.ogv">
						</video>
					</div>
				
					<a href="https://www.youtube.com/user/Peacockspiderman/" target="_blank"><img id="youtube" src="illustrations/youtube-logo.png" alt="Youtube"/></a>
					</br>
					
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
