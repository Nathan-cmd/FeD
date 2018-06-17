<?php

// Set email variables
$email_to = 'nsokoloff@gmail.com';
$email_subject = 'Je hebt een bericht via Portfolio!!';

// Set required fields
$required_fields = array('fullname','email','comment');

// set error messages
$error_messages = array(
	'fullname' => 'Vul een naam in om verder te gaan.',
	'email' => 'Vul een email adres in om verder te gaan.',
	'comment' => 'Vul een bericht in om de aanvraag te voltooien.'
);

// Set form status
$form_complete = FALSE;

// configure validation array
$validation = array();

// check form submittal
if(!empty($_POST)) {
	// Sanitise POST array
	foreach($_POST as $key => $value) $_POST[$key] = remove_email_injection(trim($value));
	
	// Loop into required fields and make sure they match our needs
	foreach($required_fields as $field) {		
		// the field has been submitted?
		if(!array_key_exists($field, $_POST)) array_push($validation, $field);
		
		// check there is information in the field?
		if($_POST[$field] == '') array_push($validation, $field);
		
		// validate the email address supplied
		if($field == 'email') if(!validate_email_address($_POST[$field])) array_push($validation, $field);
	}
	
	// basic validation result
	if(count($validation) == 0) {
		// Prepare our content string
		$email_content = 'New Website Comment: ' . "\n\n";
		
		// simple email content
		foreach($_POST as $key => $value) {
			if($key != 'submit') $email_content .= $key . ': ' . $value . "\n";
		}
		
		// if validation passed ok then send the email
		mail($email_to, $email_subject, $email_content);
		
		// Update form switch
		$form_complete = TRUE;
	}
}

function validate_email_address($email = FALSE) {
	return (preg_match('/^[^@\s]+@([-a-z0-9]+\.)+[a-z]{2,}$/i', $email))? TRUE : FALSE;
}

function remove_email_injection($field = FALSE) {
   return (str_ireplace(array("\r", "\n", "%0a", "%0d", "Content-Type:", "bcc:","to:","cc:"), '', $field));
}

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
		<link rel="stylesheet" href="styles/styles.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		<div class="personInfo">NATHAN SOKOLOFF
			<span><a href="mailto:nsokoloff@gmail.com">NSOKOLOFF@GMAIL.COM</a></span>
		</div>
		
		<header>
			<div class="headerPhoto"></div>
			
			<section>
				<p>Design principles are great.</p>
				<p>Testing those principles is awesome.
				</p>
				<p>Seeing them work is magic.</p>
			</section>

			<section>
				<p>I’m Nathan, an all-round digital media enthiusiast knees-deep in a designer study. This hand-coded website is a work in progress and I'm hoping it can help me get an internship! <br><br>Can I help you materialse some new ideas, or maybe even introduce  you to some of mine? <br><br> <span class="studies">Communication &amp; Multimedia Design <br>Hogeschool van Amsterdam</span></p>
			</section>
		</header>
		
		<main>
			<h2>Are these fields of interest for you?</h2>
			
			<div class="tabContainer">
				
				<div class="tab">
					<input type="radio" id="tabOne" name="tgOne" checked>
					<label for="tabOne">Visual &amp; Interaction</label>
					
					<div class="content">
						<p>In het kort, de look & feel van een dienst of product. Maar dat is te kort door de bocht. Digitale producten en diensten hebben een visuele representatie nodig. Deze moet niet alleen een beeld uitstralen, maar ook de ruimte creëren voor het ontwerpen van een interactieve ervaring. Hoe kunnen deze elkaar aanvullen en wat voor  interactie spreekt tot de gebruiker? <br><br>
						Deze fictieve opdracht voor Transavia daagde me uit om reizigers te voorzien van een fijne lees ervaring <span style="font-style:italic;">on-the-go</span>!	Aan ons om de huisstijl van het merk over te dragen naar een mobiele ervaring, hartstikke tof! <br><br>
						Binnenkort zullen deze afbeeldingen uitvergroot kunnen worden.
						</p>

						<div class="thumbnailProjects">
							<ul class="tabPhotosOne">
								<li><a class="projectThumbnail" href=""></a></li>
								<li><a class="projectThumbnail" href=""></a></li>
								<li><a class="projectThumbnail" href=""></a></li>
							</ul>
						</div>
					</div>

			</div>

			<div class="tab">
					<input type="radio" id="tabTwo" name="tgOne">
					<label for="tabTwo">User Experience</label>
					
					<div class="content">
						<p>
							User Experience. Vertaald, de gebruikerservaring. Ok, en dan? Wat nu? 
							<br><br>
							Producten en diensten hebben één ding in gemeen. Ze geven een ervaring. Hoe vertaald een visie naar een betekenisvolle ervaring? Lets find out!
							<br><br>
							Door gebruikerstesten uit te voeren, interviews te houden en te observeren kan er informatie gewonnen worden en de gebruikerservaring hierop worden afgesteld. Zo heb ik Customer Journey Maps gemaakt, Experience Maps en nog meer! 
							<br><br>
							Binnenkort zullen deze afbeeldingen uitvergroot kunnen worden.
						</p>

						<div class="thumbnailProjects">
							<ul class="tabPhotosTwo">
								<li><a href=""></a></li>
								<li><a href=""></a></li>
								<li><a href=""></a></li>
							</ul>
						</div>
					</div>

			</div>

			<div class="tab">
					<input type="radio" id="tabThree" name="tgOne">
					<label for="tabThree">Content</label>
					
					<div class="content">
						<p>

						Waar de gebruikers het voor doen! De inhoud! Maar het gaat verder. Geef de juiste inhoud weer in binnen de goede context en creëer de ultieme ervaring. Lang niet zo makkelijk als het klinkt, mocht het dat al doen!
						<br><br>
						Met content strategieën, content modelling en een zicht op de structuur versterkt de waarde van de inhoud. 
						</p>

						<div class="thumbnailProjects">
							<ul class="tabPhotosThree">
								<li><a href=""></a></li>
								<li><a href=""></a></li>
								<li><a href=""></a></li>
							</ul>
						</div>
					</div>

			</div>

			<div class="tab">
					<input type="radio" id="tabFour" name="tgOne">
					<label for="tabFour">Bonus!</label>
					
					<div class="content">
						<p>	Ik vind nog wel meer tof om te doen. Webdevelopment (deze site is from scratch) en web design sla ik graag mijn laptop voor open! De NodeMCU Arduino controller had ik in no-time draaiende met Python en ik wil nog graag een prive cloud aan de gang zien te krijgen.
						<br><br>
						Natuurlijk heb ik ook andere non-tech hobbies;
						<br><br>
						Grapje. In mijn gering recreatieve momenten eet ik gezond én ongezond. Ik mix wat electronische liedjes door en ik speel regelmatig videospelletjes.
						<br><br><br><br>
						Something I love and hate at the same time;<br><br>
						Backing up essential files and re-installing a clean OS.</p>

						<div class="thumbnailProjects">
							<ul class="tabPhotosThree">
								<li><a href=""></a></li>
								<li><a href=""></a></li>
								<li><a href=""></a></li>
							</ul>
						</div>
					</div>

			</div>
		</div>
				
			</main>

			<div class="downloadBestanden">
				<p>Terwijl deze site nog in ontwikkeling is</p>
				<a href="https://www.dropbox.com/s/ntrr7ug6fe1tfeo/NathanSokoloff_bestanden.zip?dl=0">Kun je de bestenden via dropbox downloaden!</a>
			</div>
		<footer>
			
			
			<h4>I'm currently looking for a suitable internship, think we can help eachother out?</h4>
			

<div>
	<div id="formWrap">
		<div id="contact-form">
		<?php if($form_complete === FALSE): ?>
			<form action="index.php" method="post" id="comments_form"> 
			<div class="input">
			<input placeholder="Enter your name" type="text" id="fullname" class="detail" name="fullname" value="<?php echo isset($_POST['fullname'])? $_POST['fullname'] : ''; ?>" /><?php if(in_array('fullname', $validation)): ?><span class="error"><?php echo $error_messages['fullname']; ?></span><?php endif; ?>
			</div>
			<!--  end input -->
		
		<div class="input">
		<input placeholder="Enter your e-mail" type="text" id="email" class="detail" name="email" value="<?php echo isset($_POST['email'])? $_POST['email'] : ''; ?>" /><?php if(in_array('email', $validation)): ?><span class="error"><?php echo $error_messages['email']; ?></span><?php endif; ?>
		</div>
		<!--  end input -->

		<div class="input">
		<textarea placeholder="Type your message" id="comment" name="comment" class="mess"><?php echo isset($_POST['comment'])? $_POST['comment'] : ''; ?></textarea><?php if(in_array('comment', $validation)): ?><span class="error"><?php echo $error_messages['comment']; ?></span><?php endif; ?>
		</div>
		<!--  end input -->
<div class="submit"> 
<input type="submit" id="submit" name="submit" value="versturen"/>
</div><!--  end submit -->
<?php else: ?>
<p>Dankjewel voor je bericht!</p>
<?php endif; ?>

</div>
</form>

<div class="contactText"><p>Fill in your name, adres and message to get in touch. Or use the oldschool way and <a href="mailto:nsokoloff@gmail.com">send me an email!</a>

</p></div>
		
		</footer>
		
		<script type="text/javascript" src="js/script.js"></script>
	</body>
</html>