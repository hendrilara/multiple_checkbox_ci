<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
  
	<form action="<?= base_url() ?>index.php/input/masuk" method="post" accept-charset="utf-8">
		<p><input type="checkbox" name="nama_data[]" id="id_data" value="Meghasilkan data pribadi dengan baik">Meghasilkan data pribadi dengan baik </p>
	    <p><input type="checkbox" name="nama_data[]" id="id_data" value="Meghasilkan data mahasiswa dengan baik">Meghasilkan data mahasiswa dengan baik </p>
	    <p><input type="checkbox" name="nama_data[]" id="id_data" value="Meghasilkan data lulusan yang terbaik ">Meghasilkan data lulusan yang terbaik </p>
	    <p><input type="checkbox" name="nama_data[]" id="id_data" value="Meghasilkan data manajemen yang baik">Meghasilkan data manajemen yang baik </p>
	    <p><input type="checkbox" name="nama_data[]" id="id_data" value="Meghasilkan data pribadi dengan baik dan benar">Meghasilkan data pribadi dengan baik dan benar </p>
	    <?php echo'<input type="submit" name="submit" value="simpan">'?>
</body>
	</form>

</body>
</html>