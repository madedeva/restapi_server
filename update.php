<?php

$connection = new mysqli("localhost", "root", "", "latihan");
$nim        = $_POST['nim'];
$nama       = $_POST['nama'];
$jk         = $_POST['jk'];
$alamat     = $_POST['alamat'];
$jurusan    = $_POST['jurusan'];
$id         = $_POST['id'];
    
$result = mysqli_query($connection, "update mahasiswa set nim='$nim', nama='$nama', jk='$jk', alamat='$alamat', jurusan='$jurusan' where id='$id'");
    
if($result){
    header('Content-Type: application/json');
    header("Access-Control-Allow-Origin: *");
    echo json_encode([
        'message' => 'Data edit successfully'
    ]);
}else{
    header('Content-Type: application/json');
    header("Access-Control-Allow-Origin: *");
    echo json_encode([
        'message' => 'Data Failed to update'
    ]);
}