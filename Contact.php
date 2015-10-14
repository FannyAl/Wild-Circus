# Wild-Circus
Code source du site Wild Circus by the Peacocks Company

<?php
if(!empty($_POST)){
	extract($_POST);
	$valid = true;
	if(empty($name)){
           $valid=false;
           $erreurname = "You have not filled out your full name!";
       }
	   if(!preg_match("/^[a-z0-9\-_.]+@[a-z0-9\-_.]+\.[a-z]{2,3}$/i",$email)){
           $valid=false;
           $erreuremail = "Your email is not valid!";
       }
       if(empty($surname)){
           $valid=false;
           $erreursurname = "You have not filled out your surnam!";
       }
       if(empty($mail)){
           $valid=false;
           $erreurmail = "Your email is not valid!";
       }
	
	if($valid){
           $to = "fanny.alliaume@gmail.com";
           $sujet = $name." has contacted the peacocks company";
		   $header = "From: $name <$mail>";
		   $header = "Reply-to: $mail";
		   $sweet_words = stripslashes($sweet_words);
		   $name = stripslashes($name);
           if(mail($to,$sujet)){
               $erreur = "We have received your message and we will reply you as soon as possible.";
			   unset($name);
               unset($surname);
               unset($mail);
           }
			else{
				$erreur = "Sorry, an error occured and your mail is not send.";
			}
	}
}
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="design_style.css" title="design"/>
		<link rel="stylesheet" type="text/css" href="contact_style.css"/>
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

					<h1>Contact us</h1>
						
					</br>

					<form methode="post" action="Contact.php">
						
						<?php
							if(isset($erreur)){ echo "<p>$erreur</p>"; };
						?>
						
						<div id="part1">
							<label for="name">Name</br></label> <input type="text" name="name" id="name" placeholder="Name" size="60" maxlength="20" value="<?php if(isset($name)) echo $name; ?>"required/> </br>
							<span class="error-message"><?php if(isset($erreurname)) echo $erreurname; ?></span>
							<label for="surname">Surname</br></label> <input type="text" name="surname" id="surname" placeholder="Surname" size="60" maxlength="20" value="<?php if(isset($surname)) echo $surname; ?>" required/></br>
							<span class="error-message"><?php if(isset($erreursurname)) echo $erreursurname; ?></span>
							<label for="mail">E-mail</br></label> <input type="text" name="mail" id="mail" placeholder="E-mail address" size="60" maxlength="50" value="<?php if(isset($mail)) echo $mail; ?>" required/> </br>
							<span class="error-message"><?php if(isset($erreurmail)) echo $erreurmail; ?></span>
							
							<label for="pays">Select your country</label><br />
								<select name="country" id="pays">
									<optgroup label="Europe">
										<option value="france" selected>France</option>
										<option value="italy">Italy</option>
										<option value="spain">Spain</option>
										<option value="United-kingdom">United-Kingdom</option>
									</optgroup>
									
									<optgroup label="America">
										<option value="brazil">Brazil</option>
										<option value="canada">Canada</option>
										<option value="mexico">Mexico</option>
										<option value="usa">USA</option>
									</optgroup>
								</select>
								
						</div>	
						
						</br>
								
						<fieldset>
							<legend>Why do you want to contact us ?</legend>
							<input type="checkbox" name="meet" id="meet" />
							<label for="meet">Meet us</label><br />
								
							<input type="checkbox" name="date" id="date" />
							<label for="date">Our next dates</label><br />
   
							<input type="checkbox" name="video" id="video" />
							<label for="video">Receive our videos</label><br />
								
							<input type="checkbox" name="learn" id="learn" />
							<label for="learn">Learn dance</label><br />		
						</fieldset>
								
						<p>Your sweet-words</p>
						<textarea name="sweet_words" id="sweet_words" placeholder="Your sweet-words" rows="5" cols="45" maxlength="200"></textarea> 
						
						</br></br>
						
						<div id="social_networks">
							<a href="https://www.facebook.com/PeacockSpider" target="_blank"><img id="facebook" src="illustrations/facebook-logo.png" alt="Facebook"/></a>
							<a href="https://www.youtube.com/user/Peacockspiderman/" target="_blank"><img id="youtube" src="illustrations/youtube-logo.png" alt="Youtube"/></a>
						</div>
						
						</br>
							
						<input type="submit" value="send" id="send" />
					
					</form>
					
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

