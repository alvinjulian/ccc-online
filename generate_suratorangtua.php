<?php
	require_once('connection.php');
	require_once('templateSuratOrtu.php');

	function generateParentsMail($id)
	{
		$stmt = $mysqli->prepare("select kode, nama, kelas, tahap_1 from tb_peserta join tb_nilai on tb_peserta.id = tb_nilai.no where tb_peserta.id=?");
		$stmt->bind_param('i', $id);
		$stmt->execute();
		$stmt->bind_result($kode, $nama, $kelas, $tahap_1);
		$stmt->fetch();
		$stmt->close();

		$kodesekolah = substr($kode, 0, 3);

		$stmt1 = $mysqli->prepare("select nama from tb_sekolah where kode=?");
		$stmt1->bind_param('s', $kodesekolah);
		$stmt1->execute();
		$stmt1->bind_result($namasekolah);
		$stmt1->fetch();
		$stmt1->close();

		$nilai = "";

		if($tahap_1 > 74)
		{
			$nilai = "A";
		}
		else if($tahap_1 > 44)
		{
			$nilai = "B";
		}
		elseif ($tahap_1 > 34) 
		{
			$nilai = "C";
		}
		else
		{
			$nilai = "D";
		}


		$message=ortuTemplate($nama, $kode, $kelas, $namasekolah, $nilai);
	}
?>