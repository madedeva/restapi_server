<?php

$connection = new mysqli("localhost", "root", "", "latihan");
$id = $_POST['id'];
$result = mysqli_query($connection, "delete from mahasiswa where id=".$id);

if($result){
    header('Content-Type: application/json');
    header("Access-Control-Allow-Origin: *");
    echo json_encode([
        'message' => 'Data delete successfully'
    ]);
}else{
    header('Content-Type: application/json');
    header("Access-Control-Allow-Origin: *");
    echo json_encode([
        'message' => 'Data Failed to delete'
    ]);
}