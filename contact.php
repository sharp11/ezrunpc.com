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
			
			<!-- use this with contact1.css
			<div class="formWrapper">
				<form action="<?php /*echo $_SERVER['PHP_SELF'];*/ ?>" method="post">
	      	<fieldset>
	        	<legend>Send us an Email</legend>
		        <div class="row clearFix">
		          <label for="realname">Name</label>
		          <input class="formField" type="text" id="realname" name="realname" size="30" required/>
		        </div>
			
		        <div class="row clearFix">
		          <label for="email">Email address</label>
		          <input class="formField" type="email" id="email" name="email" size="30" required/>
		        </div>
		  
			      <div class="row clearFix">
		          <label for="phone">Telephone</label>
		          <input class="formField" type="text" id="phone" name="phone" size="30" />
		        </div>
		  
			    	<div class="row clearFix">
		          <label for="message">Message</label>
		      		<textarea class="formField" id="message" name="message" rows="15" cols="20" required></textarea>
		      	</div>
						
						<div id="captcha">
							<input type="text" name="hiddenCaptcha" value="" />
						</div>
						
						<div class="submit">
							<input class="submitButton" type="submit" name="Send" value="Send" />
						</div>
					
		     	</fieldset>	      	      		      	
				</form>
			</div>
			-->
			
			<div class="formWrapper clearfix">
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
	      	<fieldset>
	        	<legend>Send us an Email</legend>
		        <div>
		          <label for="realname">Name</label>
		          <input class="formField" type="text" id="realname" name="realname" size="30" required="required" />
		        </div>
			
		        <div>
		          <label for="email">Email address</label>
		          <input class="formField" type="email" id="email" name="email" size="30" required="required" placeholder="name@example.com" />
		        </div>
		  
			      <div>
		          <label for="phone">Telephone</label>
		          <input class="formField" type="text" id="phone" name="phone" size="30" />
		        </div>
		  
			    	<div>
		          <label for="message">Message</label>
		      		<textarea class="formField" id="message" name="message" rows="15" cols="20" required="required"></textarea>
		      	</div>
						
						<div id="hiddenCaptcha">
							<input type="text" name="hiddenCaptcha" value="" />
						</div>
						
						<div class="submit">
							<input class="submitButton" type="submit" name="Send" value="Send" />
						</div>
		     	</fieldset>
				</form>				
			</div>
			
			
	</div> <!-- content -->
        
  </div> <!-- wrapper -->

</body>
</html>
