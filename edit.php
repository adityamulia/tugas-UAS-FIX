<?php
$no = $_GET['no'];
$nama = $_POST['nama'];
$deskripsi = $_POST['deskripsi'];

include "koneksi.php";

$update = $conn->query("update listLayanan set nama='$nama', 
deskripsi = '$deskripsi' where no = '$no'");

if($update){
    header('Location:http://tugasuas.test/?menu=5 ');
}else{
    echo "data gagal disimpan";
}
