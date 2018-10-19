<?php

	include 'koneksi.php';

	$sql = "SELECT nama, nim, jeniskelamin, programstudi, fakultas, asal, mottohidup FROM daftar";
	$hasil = mysqli_query($conn, $sql);

	echo "<table border=1>
				<tr style='background: grey;'>
					<th>Nama</th>
					<th>NIM</th>
					<th>Jenis Kelamin</th>
					<th>Program Studi</th>
					<th>fakultas</th>
					<th>Asal</th>
					<th>Motto Hidup</th>
				</tr>";

	if($hsl=$hasil->fetch_array()){		
		echo "<tr>
				<td>".$hsl['nama']."</td>
				<td>".$hsl['nim']."</td>
				<td>".$hsl['jeniskelamin']."</td>
				<td>".$hsl['programstudi']."</td>
				<td>".$hsl['fakultas']."</td>
				<td>".$hsl['asal']."</td>
				<td>".$hsl['mottohidup']."</td>
				<td><a href='detailbarang.php'>view</a> | 
				    <a href='editbarang.php'>edit</a> | 
				    <a href='updatestokbrg.php'>+stok</a> | 
				    <a href='hapusbarang.php'>hapus</a></td>
			  </tr>";	
	}
?>