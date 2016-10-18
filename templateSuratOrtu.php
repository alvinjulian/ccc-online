<?php
	function ortuTemplate($nama, $kode, $kelas, $sekolah, $nilai)
	{
		$message='
		<html>
		<head>
			<title>Pengumuman Kompetisi Babak I</title>
		<style>
			@page{
				size : A4;
				margin: 2,54cm;
				font-size:11px;;
			}
		</style>
		<link rel="stylesheet" type="text/css" href="style.css">
		</head>
		<body style="text-align:justify; line-height:115%">
		<
			<div class="header">
				<img src="img/ektizo3c16-logo.png">
				<img class="right" src="img/ektizo-logo.png">
			</div>
			<br>
			No: 02/3C16/EKT/X/2016<br>
			Perihal: Pengumuman Kompetisi Babak 1<br>
			<br>
			Kepada Yth.<br>
			Orang tua/wali<br>
			<span style="text-transform: uppercase; font-weight: bold;">
				'.$nama.'<br>
			</span>
			<b>'.$kelas.'</b><br>
			<p><b>'.$sekolah.'</b><br></p>
			di Tempat
			<p>Salam sejahtera,</p>
			<p>Semoga surat ini menjumpai Bapak/Ibu dalam kondisi yang sehat dan baik. Izinkan kami memperkenalkan diri.  Kami, EKTIZO Education, sebuah institusi pelatihan coding untuk anak dan remaja, bekerja sama dengan pihak sekolah dalam menyelenggarakan lomba coding bernama <b>EKTIZO Creative Coding Competition 2016 (#EKTIZO3C16).</b></p>
			<p>Dalam kesempatan ini, kami ingin memberitahukan bahwa anak Bapak/Ibu:</p>
				
				<table style="border:0 !important;margin-left:50px">
					<tr>
						<td width="100">Nama</td>
						<td>:</td>
						<td><span style="font-weight: bold;text-transform: uppercase;">'.$nama.'</span></td>
					</tr>
					<tr>
						<td>No. Peserta</td>
						<td>:</td>
						<td><span style="font-weight: bold;">'.$kode.'</span></td>
					</tr>
					<tr>
						<td>Kelas</td>
						<td>:</td>
						<td><span style="font-weight: bold">'.$kelas.'</span></td>
					</tr>
					<tr>
						<td>Grade Nilai</td>
						<td>:</td>
						<td><span style="font-weight: bold">'.$nilai.'</span></td>
					</tr>
				</table>
			<p><span style="text-decoration: underline; font-weight: bold;">berhasil lolos</span> dari <b>Babak I</b> (Babak Penyisihan Sekolah) dan <span style="text-decoration: underline; font-weight: bold;">berhak</span> mengikuti <b>Babak Online.</b> Untuk mengikuti babak online, Anda perlu membayar biaya kompetisi sebesar Rp. 100.000,- kepada EKTIZO dan dibayarkan melalui pihak sekolah paling lambat 7 hari setelah tanggal surat. Pada saat melakukan pembayaran, Anda perlu memberikan data berupa nama orang tua, no. hp orang tua dan email orang tua/siswa kepada pihak sekolah. Selanjutnya, Anda hanya perlu menunggu email dari EKTIZO. Untuk lebih memahami proses aktivasi email dan tata cara melakukan login ke website kompetisi, kami kirimkan lampiran berupa <span style="text-decoration: underline;">Petunjuk Mengikuti Babak Online</span>.</p>
			<p>Demikian surat pemberitahuan ini kami sampaikan. Jika Anda memiliki pertanyaan atau jika anak Anda mengalami kesulitan dalam login, Anda dapat membaca petunjuk kompetisi secara online melalui website kompetisi kami di <a href="www.ektizo.com/ccc">ektizo.com/ccc</a> atau dapat juga menghubungi kami melalui email ke <a href="mailto:ccc@ektizoedu.com">ccc@ektizoedu.com</a>. Terima kasih.</p>
			<p>Hormat kami,</p><br><br>
			Jasmine<br>
			Panitia #EKTIZO3C16
			<div class="footer">
				<hr>
				<b>EKTIZO Creative Coding Competition 2016</b><br>
				PT EKTIZO KREASI TALENTA<br>
				Taman Kedoya Baru<br>
				Jalan Albasia Raya Blok XI No. 13
				08111733330
			</div>
		</body>
	</html>
		';
	}
?>