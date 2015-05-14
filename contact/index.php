<?php $dr = str_replace($_SERVER['SCRIPT_NAME'], '/includes/', $_SERVER['SCRIPT_FILENAME']); ?>

<?php
	$title = "Contact";
	$section = "contact";
?>

<?php include($dr . "head.inc.php"); ?><!-- HEADER -->


<div class="section notwide">

<?php

$email_to = 'info@clearleft.com';
$sent_message = '';
    
if ($_POST) {
    $name = trim(isset($_POST['name']) ? $_POST['name'] : '');
    $email = trim(isset($_POST['email']) ? $_POST['email'] : '');
    $message = trim(isset($_POST['message']) ? $_POST['message'] : '');
    // Validation checks
    if (!$name) {
        $name_error = '<p class="error">Please tell us your name</p>'; 
    }
    if (!preg_match('/^\S+?@\S+?$/i', $email)) {
        $email_error = '<p class="error">Please enter a valid e-mail address</p>';
    }
    if (!$message) {
        $message_error = '<p class="error">Don\'t forget your message!';
    }
    if (!$name_error && !$email_error && !$message_error) {
        // Actually send the message
		$header = "From: ".$name." <".$email.">\r\n"
			."Reply-To: ".$email;
        $body = "The message reads:\n " . $message . "\n\nFrom:\n" . $name . "\n" . $email;
        if(mail($email_to, 'd.Construct 2009 contact message', $body, $header)) {
            $sent_message = '<p class="notice">Your message has been sent</p>';
        } else {
            $sent_message = '<p class="error">An error occurred; your message could not be sent</p>';
        }
    }
} else {
    $name = '';
    $email = '';
    $message = '';
    $name_error = '';
    $email_error = '';
    $message_error = '';
}
?>
		
	<h2>Contact</h2>
	
	<form action="/contact/" method="post">
       <?php echo $sent_message; ?>
	<div class="text-container container">
		<label for="name">Your name</label>
		<input type="text" id="name" name="name" value="<?php echo htmlspecialchars($name); ?>" />
		<?php echo $name_error; ?>
	</div>

	<div class="text-container container">
		<label for="email">Email</label>
		<input type="text" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>" />
		<em class="help">So we can contact you</em>
		<?php echo $email_error; ?>
	</div>

	<div class="textarea-container container">
		<label for="message">Your message</label>
		<textarea rows="5" cols="20" id="message" name="message"><?php echo htmlspecialchars($message); ?></textarea>
		<?php echo $message_error; ?>
	</div>

	<div class="button-container container">
		<button type="submit"><span>Send</span></button>
	</div>

	</form>

</div>

<!-- FOOTER -->
<?php include($dr . "footer.inc.php"); ?>