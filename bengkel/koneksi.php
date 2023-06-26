<?php
$server = 'localhost';
$username = 'root';
$password = '';
$namadatabase = 'bengkell';

$conn = mysqli_connect($server, $username, $password, $namadatabase);


function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc(($result))) {
        $rows[] = $row;
    }
    return $rows;
}
?>