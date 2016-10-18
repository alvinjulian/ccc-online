<?php

	$fname = $_FILES[csv][name];
	$chk_ext= explode(".", $fname);

	$filename = $_FILES[csv][tmp_name];

	$handle = fopen($filename, "r");
	if(!$handle){
		die('Cannot open file for reading');
	}
	while (($data = fgetcsv($handle, 10000, ",")) !== false) {
		$query = "INSERT into tb_peserta (kode, nama, kelas) values ('$data[1]', '$data[2]', '$data[3]')" ;
		mysql_query($query) or die(mysql_error());
	}
?>
