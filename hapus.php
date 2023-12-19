<?php 
	
	$id_hapus = $_GET['id_hapus'];


	echo "Data yang akan dihapus id = ".$id_hapus."<br>";

	include "koneksi.php";

	$delete = $conn->query("delete from listLayanan where no = '$id_hapus'");

	if($delete){
        header('Location: http://tugasuas.test/?menu=5');
		echo "Data berhasil terhapus";
	}else{
		echo "Data gagal terhapus";
	}





?>