<?php
	require_once('connection.php');
	require_once('templateSuratSekolah.php');

	function generateSchoolMail($kodesekolah)
	{
		$stmt1 = $mysqli->prepare("select nama from tb_sekolah where kode=?");
		$stmt1->bind_param('s', $kodesekolah);
		$stmt1->execute();
		$stmt1->bind_result($namasekolah);
		$stmt1->fetch();
		$stmt1->close();

		$message=sekolahTemplate($namasekolah);
	}
?>