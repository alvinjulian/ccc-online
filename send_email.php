<?php
// Send activation email to Users

require_once('template_email.php');

function()
{
	require_once('connection.php');

	$stmt->bind_param('sssss', $nama, $nopeserta, $tingkat, $sekolah, $email, $password);
	$result=$stmt->execute();

	$result or die("Fail to get data");

	// ---------------- SEND MAIL FORM ---------------- //
	//Send email to
	$to=$email;

	//Email Subject
	$subject="Email Aktivasi Babak Online EKTIZO CCC 2016";

	//From
	$header = "from: No-Reply Yo-Camp <no-reply@yo-camp.com>\r\n";
	$header .= "MIME-Version: 1.0\r\n";
	$header .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

	//Message untuk emailnya
	$message = emailData($nama, $nopeserta, $tingkat, $sekolah, $email, $password);

	//send the email
	$sentmail = mail($to, $subject, $message, $header, '-fno-reply@ektizo.com');
	return($sentmail);
}
?>