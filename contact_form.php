<?
// edit these lines
$your_name="Dante Bello";
$your_email="dante.r.bello@gmail.com";
$your_web_site_name="Ortodontia Dante Bello";
?>

<?php	 	  
//If the form is submitted
if(isset($_POST['name'])) {
		//Check to make sure that the name field is not empty
		if(trim($_POST['name']) === '') {
			$hasError = true;
		} else {
			$name = trim($_POST['name']);
		}
		
		//Check to make sure sure that a valid email address is submitted
		if(trim($_POST['email']) === '')  {
			$hasError = true;
		} else if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", trim($_POST['email']))) {
			$hasError = true;
		} else {
			$email = trim($_POST['email']);
		}

		//Check to make sure that the phone field is not empty
		if(trim($_POST['phone']) === '') {
			$hasError = true;
		} else {
			$phone = trim($_POST['phone']);
		}

		//company name
		$company_name = trim($_POST['company_name']);

		//company url
		$company_url = trim($_POST['company_url']);

			
		//Check to make sure comments were entered	
		if(trim($_POST['message']) === '') {
			$hasError = true;
		} else {
			if(function_exists('stripslashes')) {
				$comments = stripslashes(trim($_POST['message']));
			} else {
				$comments = trim($_POST['message']);
			}
		}



		//If there is no error, send the email
		if(!isset($hasError)) {

			$emailTo = $your_email;
			$subject = '[Ortodontia Dante Bello] Contato de '.$name;
			
			$body = "Nome: $name \n\nE-mail: $email \n\nTelefone:$phone\n\nMensagem: $comments";

			$headers = 'From: '.$your_web_site_name.' <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;
			
			mail($emailTo, $subject, $body, $headers);

			$emailSent = true;
	}
} 
?>

<?php	 	  if(isset($emailSent) == true) { ?>
	<script type="text/javascript">
		alert("Seu e-mail foi enviado com sucesso! Logo entrremos em contato!");
		location.href="http://www.ortodontiadantebello.com.br/contato/";
	</script>
<?php	 	  } ?>