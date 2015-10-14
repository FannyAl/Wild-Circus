# Wild-Circus
Code source du site Wild Circus by the Peacocks Company

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="design_style.css" title="design"/>
		<link rel="stylesheet" type="text/css" href="home_style.css"/>
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
						<h1>The Wild Cirus Program</h1>
												
						<p>Miss Peacockspider(wo)man welcomes you to the Wild Circus show introduced by the exceptional peacocks dance compagny.
						Five remarkable dancers are comming from Australia, to share with you unforgettable moments.
						They cross web all around the world to reveal their dance shows, so poetic and amazing.
						Let's discover its, now!</p>
					</div>
					
					<div id="container">
					
						<div id="performances">
							<h2>The Tribal Dance</h2>
							<img src="photos/home_tribal.jpg" alt="Photo Tribal Dance"/>
							<p>We start the show with the tribal dance presented by the marabou spider. This primitive dance connect you with the forest spirits. Its tribal mask will capt your intention throughout the show.</p>
							<p>
								<a href="Tribal_page.php" class="bouton_performances">Photos and video of this performance</a>
							</p>
						</div>
						
						</br></br>
							
						<div id="performances">
							<h2>The Samurai demonstration</h2>
							<img src="photos/home_samurai.jpg" alt="Photo Samurai demonstration"/>
							<p>The Samurai spider is famous all around the world for its quickness moving and its agility. It realizes complexe mouvement chains. And it is the only spider in the world able to do that.</p>
							<p>
								<a href="Samurai_page.php" class="bouton_performances">Photos and video of this performance</a>
							</p>
						</div>
						
						</br></br>
						
						<div id="performances">
							<h2>The Charleston solo</h2>
							<img src="photos/home_charleston.jpg" alt="The solo's Charleston"/>
							<p>The Charleston spider dances since it's one year old. Professional dancer, it share its passion with enthusiasm and humour. We have the chance to count it among us. Here, its show.</p>
							<p>
								<a href="Charleston_page.php" class="bouton_performances">Photos and video of this performance</a>
							</p>
						</div>
						
						</br></br>
						
						<div id="performances">
							<h2>Hypnosis</h2>
							<img src="photos/home_hypnosis.jpg" alt="Photo Hypnosis"/>
							<p>With its 4 eyes, Peacockspnosis transports us throw a mystic dance. It drives its partner without touching it. Discover the power of Hypnosis.</p>
							<p>
								<a href="Hypnosis_page.php" class="bouton_performances">Photos and video of this performance</a>
							</p>
						</div>
						
						</br></br>
						
						<div id="performances">
							<h2>The exorcism show</h2>
							<img src="photos/home_exorcism.jpg" alt="Photo The exorcism show"/>
							<p>We finished the Wild Circus show whith the exorcist spider. This tense show can't be describe with world. You have to see it to belive it!</p>
							<p>
								<a href="Exorcist_page.php" class="bouton_performances">Photos and video of this performance</a>
							</p>
						</div>
						
						</br></br>
						
						<div id="mention">
							<p>The artists list presented can be modified.
								No animals were mistreated for the circus needs. </p>
						</div>
					</div>
						
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

