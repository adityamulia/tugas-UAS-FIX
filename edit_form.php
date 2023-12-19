
<?php 
	$no= $_GET['id_edit'];
	include "koneksi.php";
	$data = $conn->query("select * from listLayanan where no = '$no'");

	$value= $data->fetch_assoc();
?>
<h1>Edit Layanan</h1>

	<form method='POST' action="edit.php?no=<?php echo $no ?>">

		<div class="form-group">
		    <label for="Judul">Nama Layanan</label>

		    <input type="text" class="form-control" name="nama" id="judul" value="<?php echo $value['nama'] ?>" required >    
		</div>

		<div class="form-group">
			<label for="isi">Deskripsi</label>
			<textarea class="form-control" name="deskripsi" rows="10" required id="isi"><?php echo $value['deskripsi'] ?></textarea>
		</div>


        <br>
		<button type="submit" class="btn btn-primary">Edit</button>
	</form>
