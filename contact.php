<?php 
	if (array_key_exists('Send', $_POST)) {
		// mail processing script
		$to = "contact@ezrunpc.com";
		$subject = "EZRunPC.com email contact";
		
		// list expected fileds
		$expectedArgs = array('realname', 'email', 'phone', 'message');		
		// set required fields
		$requiredArgs = array('realname', 'email', 'message');		
		$headers = "From: EZRunPC.com<contact@ezrunpc.com>";
		$process = 'process_mail.inc.php';
		
		if (file_exists($process) && is_readable($process)) {
			include($process);
			$mailsent = processMailRequest($to, $subject, $expectedArgs, $requiredArgs, $headers);
		}
		else {
			$mailsent = false;
			mail($to, 'Server problem', "process cannot read", $headers);
		}		
	}
?>

<!DOCTYPE html>

<html lang="eng">
<head>
	<meta charset="UTF-8">
  <title>EZRunPC.com - In Home Computer Services - Contact</title>
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="contact.css">
</head>

<body id="contactPage">
<div id="pageWrapper">    
	<div id="masthead">
  	<div id="navContainer">
    	<div id="navigation">            
      	<?php require_once('navigation.php'); ?>
      </div> <!-- navigation -->
		</div> <!-- navContainer -->
	</div> <!-- masthead -->
    
    
		<div id="content" class="clearfix">
		
				<h2>Contact EZRunPC.com</h2>
				<br />
					
				<?php
						if ($_POST && isset($missing) && !empty($missing)) {
				?>
					
				<p class="warning">Not all required fields have been filled in.</p>
					
				<?php 
						}
						else if ($_POST && !$mailsent) {
				?>
						
				<p class="warning">Sorry, there was a problem sending your message. Please try again later.</p>
					
				<?php 
						}
						else if ($_POST && $mailsent) {
				?>
						
				<p>Thank you, your message has been sent.
					
				<?php 
						}
				?>
						
				<div class="formWrapper">
						<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
										<p class="help">Send us an email and let us know how we can help you. Required fields are indicated by a <em>*</em>.</p>
										<div>
												<label for="realname">Name <em>*</em></label>
												<input class="formField" type="text" id="realname" name="realname" size="30" required="required" />
										</div>
			
										<div>
												<label for="email">Email address <em>*</em></label>
												<input class="formField" type="email" id="email" name="email" size="30" required="required" placeholder="name@example.com" />
										</div>
				
									<div>
												<label for="phone">Telephone</label>
												<input class="formField" type="text" id="phone" name="phone" size="30" />
										</div>
				
										<div>
												<label for="message">Message <em>*</em></label>
												<textarea class="formField" id="message" name="message" rows="15" cols="20" required="required"></textarea>
											</div>
								
										<div class="submit">
										 <input class="submitButton" type="submit" name="Send" value="Send" />
										</div>
										
										<div id="hiddenCaptcha">
											<input type="text" name="hiddenCaptcha" value="" />
										</div>																												
						</form>				
				</div> <!-- formWrapper -->
					
				<div class="phonenumWrapper">
						<p class="help">Call us and book an appointment.</p>				
						<p class="phoneNumber">555-555-5555</p>				
				</div>
			
		</div> <!-- content -->      
</div> <!-- wrapper -->

</body>
</html>
