<?php 
include("connection.php");
 ?>
 <style>
	p {
		margin-top: 25px;
	} 	


	.table{
		margin-top: 15px;
	}

	.shadow-lg{
		margin-top: 50px;
	}
	a, a:hover{
		color: #ffff;
		text-decoration: none;
	}

/*	.btn:hover{
		font-size: 50px;*/
	/* } */
	/* .gambar:hover{
		font-size: 50px;
	} */

 </style>
<div class="shadow-lg p-3 mb-5 bg-body rounded">
 	
	<h3>Daftar Kehadiran Karyawan</h3>
	<table class="table table-hover">
		<thead>
			<th>No</th>
			<th>Nama Pegawai</th>
			<th>Waktu</th>
			<th>Foto</th>
		</thead>
<?php 
$no_urut = 0;
$query = mysqli_query($db, "SELECT * FROM mhs");
while($row = mysqli_fetch_array($query)){
	$no_urut++;
	$name = $row['nama'];
	// $lastname = $row['lastname'];
	// $contact = $row['contact'];
	$time = $row['waktu'];
	$photo = $row['foto'];
?>
		<tbody>
			<tr>
				<td><p><?php echo $no_urut; ?></p></td>
				<td><p><?php echo $name; ?></p></td>
				<td><p><?php echo $time; ?>	</p></td>
				<td class="gambar"><?php echo '<img style="width:75px;height:70px;border-radius:5px; margin-top:auto;" src="data:image/jpeg;base64,'.base64_encode( $photo ).'"/>';?></td>
			</tr>
		</tbody>
<?php 	} ?>
	</table>
 </div>