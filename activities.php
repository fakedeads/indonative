<?php
	include "class/first_class.php";

	$code = $_POST['code'];
	echo $code;
	switch ($code) {
		case "contact_us":
			$name = $_POST['name'];
			$phone_number = $_POST['phone_number'];
			$email_address = $_POST['email_address'];
			$message = $_POST['message'];
			$contactUsHandler->insert($name, $phone_number, $email_address, $message);
      header('Location: index.php');
	  break;
	  default:
		break;
	}


?>
