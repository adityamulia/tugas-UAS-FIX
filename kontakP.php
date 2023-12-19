<?php 
include "koneksi.php";

$nama= $_POST['nama'];
$email= $_POST['email'];
$noHp= $_POST['noHp'];
$pesan= $_POST['pesan'];



$insert = $conn->query("insert into kontak(nama,email,noHp,pesan) values('$nama', '$email', '$noHp','$pesan')");

if($insert){
    header('Location:http://tugasuas.test/?menu=4');
}
else{
    echo('gagal insert');
}

?>