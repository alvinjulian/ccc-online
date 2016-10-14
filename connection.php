<?php


if($_POST['server_auth']=='cccOnlineAuth')
{
	$mysqli=mysqli_connect("http://ccconline.cloudapp.net","root","CCCOnline123","ccc_online") or die("Cannot Connect.");
	
	//Set Timezone
	$query="set time_zone = '+7:00'";
	$stmt=$mysqli->prepare($query);
	$stmt->execute();
	$stmt->close();
}
else
{
	echo "Could not reach server!";
	die();
}

?>