<?php 

$connection = new mysqli("localhost","root","","latihan");
$data       = mysqli_query($connection, "select * from mahasiswa");
$data       = mysqli_fetch_all($data, MYSQLI_ASSOC);

header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");
echo json_encode($data);