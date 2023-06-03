<?php 
$to = "your@mail.com";	//Put in your email address hear
$subject  = "Apply Now Form"; // The default subject.will appear by default in all message. change this if you want.

//User Info (DO NOT EDIT).
$loanamount = stripcslashes($_POST['loanamount']);	// User's Loan Amount
$income = stripcslashes($_POST['income']);	// User's Income
$purposeloan = stripcslashes($_POST['purposeloan']);	//User's purpose of loan
$loanyears = stripcslashes($_POST['loanyears']);	// Loan Years
$yourname = stripcslashes($_POST['yourname']);	//User's Name
$email = stripcslashes($_POST['your-email']);	//User's Email
$phone = stripcslashes($_POST['phonenumber']);	//User's Mobile Number			
$maritalstatus = stripcslashes($_POST['maritalstatus']);	//User's Martial Status
$birthdate = stripcslashes($_POST['birthdate']);	//User's Birth Date
$taxpayer = stripcslashes($_POST['taxpayer']);	//User's Taxtpayer Id
$address = stripcslashes($_POST['address']);	//User's Address
$employer_status = stripcslashes($_POST['employer_status']);	//User's Employer Status


$msg = "";

// The message you will receive in your mailbox
// Each parts are commented to help you understand what it does exaclty.
// YOU DON'T NEED TO EDIT IT BELOW BUT IF YOU DO, DO IT WITH CAUTION!

$msg .= "Loan Amount : ".$loanamount."\r\n\n";			// add sender's Loan Amount to the message
$msg .= "Income : ".$income."\r\n\n";					// add sender's Income to the message
$msg .= "Purpose of Loan : ".$purposeloan."\r\n\n";		// add sender's Purpose of Loan to the message
$msg .= "Loan Years : ".$loanyears."\r\n\n";			// add sender's Loan Years to the message
$msg .= "Your Name : ".$yourname."\r\n\n";				// add sender's name to the message
$msg .= "Email : ".$email."\r\n\n";						// add sender's Email to the message
$msg .= "Phone : ".$phone."\r\n\n";						// add sender's Phone Number to the message
$msg .= "Marital Status : ".$maritalstatus."\r\n\n";		// add sender's Martial Status to the message
$msg .= "Birth Date : ".$birthdate."\r\n\n";			// add sender's Birth Date to the message
$msg .= "Taxpayer Id : ".$taxpayer."\r\n\n";			// add sender's taxpayer id to the message
$msg .= "Address : ".$address."\r\n\n";					// add sender's Address to the message
$msg .= "Employer Status : ".$employer_status."\r\n\n";			// add sender's employer status to the message

$mail = @mail($to, $subject, $msg,"From:".$email);		// This command sends the e-mail to the e-mail address contained in the $to variable

if ($mail) {
header("Location:index.html");
} else {
	echo "Message could not be sent!";	//This is the message that will be shown when an error occured: the message was not send
}
 ?>
