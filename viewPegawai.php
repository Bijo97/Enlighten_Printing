<?php
	include 'connect.php';
	$result = mysql_query("SELECT * FROM pegawai");
?>
 <div class="col-md-10 content">
	<table class="table table-striped" style="font-size: 80%;" id="tabel">
		<tr>
			<th>No.</th>
			<th>Nama Pegawai</th>
			<th>Email</th>
			<th>Joindate</th>
			<th>No. HP</th>
			<th>Alamat</th>
		</tr>
		<?php while ($row=mysql_fetch_array($result)){ ?>
			<tr>
				<td><?php echo $i; ?></td>
				<td><?php echo $row['nama']; ?></td>
				<td><?php echo $row['email']; ?></td>
				<td><?php echo $row['joindate']; ?></td>
				<td><?php echo $row['nohp']; ?></td>
				<td><?php echo $row['alamat']; ?></td>
			</tr>
		<?php $i++; } ?>
	</table>
</div>