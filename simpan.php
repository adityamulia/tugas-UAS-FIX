<?php 
	include 'koneksi.php';

	$nama = $_POST['nama'];
	$deskripsi = $_POST['deskripsi'];

	if(isset($_FILES['img']) && $_FILES['img']['error'] === UPLOAD_ERR_OK) {
		$targetDirectory = "uploads/";
		$targetFile = $targetDirectory . basename($_FILES["img"]["name"]);

		if (move_uploaded_file($_FILES["img"]["tmp_name"], $targetFile)) {
			$imgUrl = $targetFile;
		} else {
			echo "File upload failed.";
			exit;
		}
	} else {
		echo "File not properly uploaded or missing.";
		exit;
	}

	$simpan = $conn->query("INSERT INTO listLayanan (nama, deskripsi, img) VALUES ('$nama', '$deskripsi', '$imgUrl')");

	if($simpan){
		header('Location: http://tugasuas.test/?menu=5');
		exit;
	} else {
		echo "Gagal disimpan";
	}
?>
