<html>

<head>
	<title>Cetak PDF</title>
</head>

<body>
	<h1 style="text-align: center;">Data Siswa</h1>
	<?php echo "tanggal : ".date('d-m-y'); ?>
	<table border="1" width="100%">
		<tr>
			<th>nik</th>
			<th>nama</th>
			<th>username</th>
			<th>telp</th>
			<th>email</th>
		</tr>
		<?php
if( ! empty($user)){
    
    foreach($user as $data){
        echo "<tr>";
        echo "<td>".$data->nik."</td>";
        echo "<td>".$data->nama."</td>";
        echo "<td>".$data->username."</td>";
        echo "<td>".$data->telp."</td>";
        echo "<td>".$data->email."</td>";
        echo "</tr>";
        
    }
}
?>
	</table>
</body>

</html>
