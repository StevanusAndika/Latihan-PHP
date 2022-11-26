
<?php
//panggil koneksi database
include "aksi.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Upload file</title>
	<style>
		img{
			align-items: center;
			text-align: center;
		}
	</style>
</head>
<body> 
	<center>
		<h1>Upload Gambar waifumu </h1>
		<form action="aksi.php"method ="post" enctype="multipart/form-data">
			<input type="file" name="file">
			<input type="submit" name="bupload" value="upload">
		</center>
	</form>
	<table>
		<?php 
		$tampil = mysqli_query($koneksi,"SELECT * from tupload");
		while ($data = mysqli_fetch_array($tampil)):
			?>
			<tr>
				<td align="">
					<img src="<?php echo "file/".$data['nama_file']  width=?>">
				</td>
			</tr>
		<?php endwhile;?>

	</table>
</body>
</html>
