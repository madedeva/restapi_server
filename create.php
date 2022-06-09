<?php

$connection = new mysqli("localhost", "root", "", "latihan");
$nim        = $_POST['nim'];
$nama       = $_POST['nama'];
$jk         = $_POST['jk'];
$alamat     = $_POST['alamat'];
$jurusan    = $_POST['jurusan'];

$result = mysqli_query($connection, "insert into mahasiswa set nim='$nim', nama='$nama', jk='$jk', alamat='$alamat', jurusan='$jurusan'");

if($result){
    header('Content-Type: application/json');
    header("Access-Control-Allow-Origin: *");
    echo json_encode([
        'message' => 'Data input successfully'
    ]);
}else{
    header('Content-Type: application/json');
    header("Access-Control-Allow-Origin: *");
    echo json_encode([
        'message' => 'Data Failed to input'
    ]);
}