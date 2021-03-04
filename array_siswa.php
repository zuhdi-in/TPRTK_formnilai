<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form Nilai Siswa</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
	<div class="container ">
		<div class="px-5 shadow p-3 rounded-1 mt-5">						
			<?php
			$proses = $_GET['proses'];
		    $nama_siswa = $_GET['nama']; 
		    $mata_kuliah = $_GET['matkul'];
		    $nilai_uts = $_GET['nilai_uts'];
		    $nilai_uas = $_GET['nilai_uas'];
		    $nilai_tugas = $_GET['nilai_tugas'];		    

			$ns1 = ['id'=>1,'nama'=>'Junaedi', 'matakuliah'=>$mata_kuliah,'uts'=>80,'uas'=>84,'tugas'=>78];
			$ns2 = ['id'=>2,'nama'=>'Sutisna', 'matakuliah'=>$mata_kuliah,'uts'=>70,'uas'=>50,'tugas'=>68];
			$ns3 = ['id'=>3,'nama'=>'Malik Robani', 'matakuliah'=>$mata_kuliah,'uts'=>60,'uas'=>86,'tugas'=>70];
			$ns4 = ['id'=>4,'nama'=>'Galih Prasetyo', 'matakuliah'=>$mata_kuliah,'uts'=>90,'uas'=>91,'tugas'=>82];
			$ns5 = ['id'=>5,'nama'=> $nama_siswa, 'matakuliah'=>$mata_kuliah,'uts'=>$nilai_uts,'uas'=>$nilai_uas,'tugas'=>$nilai_tugas];

			$ar_nilai = [$ns1, $ns2 , $ns3, $ns4, $ns5];

			?>
			<h5 class="mt-2">Sistem Penilaian</h5><hr>
			<h2 class="mb-5 mt-3 text-center">Daftar Nilai Siswa</h2>
			<table border="1" width="100%" class="table table-striped table-hover">
			<thead>
				<tr>
					<th>No</th><th>Nama</th><th>Mata Kuliah</th><th>UTS</th>
					<th>UAS</th><th>Tugas</th><th>Nilai Akhir</th>
				</tr>
			</thead>
			<tbody>
				<?php
			 	$nomor = 1;
				foreach($ar_nilai as $ns){
					echo '<tr><td>'.$nomor.'</td>';
					echo '<td>'.$ns['nama'].'</td>';
					echo '<td>'.$ns['matakuliah'].'</td>';
					echo '<td>'.$ns['uts'].'</td>';
					echo '<td>'.$ns['uas'].'</td>';
					echo '<td>'.$ns['tugas'].'</td>';
					$nilai_akhir = ($ns['uts'] + $ns['uas']+$ns['tugas'])/3;
					echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
					echo '<tr/>';
					$nomor++;
				}
				?>
			</tbody>
			</table></br></br></br></br>
		</div>
	</div>
</body>
</html>