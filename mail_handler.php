<?php
	if(isset($_POST['submit'])){		
		$first_name=$_POST['first_name'];
		$last_name=$_POST['last_name'];		
		$email_address=$_POST['email_address'];	
		$telephone_number=$_POST['telephone_number'];	
		$offer_price=$_POST['offer_price'];
		
		$to='domain@assistia.ca'; // Receiver Email ID, Replace with your email ID
		$subject='Form Submission';		
		$headers="From: ".$email;

		if(mail($to, $subject, $headers)){
			echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
		}
		else{
			echo "Something went wrong!";
		}
	}
?>

