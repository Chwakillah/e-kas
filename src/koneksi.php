<?php


$koneksi = mysqli_connect('localhost', 'root', '', 'loginkas');


if ($koneksi->connect_error) {
    die("Connection failed: " . $koneksi->connect_error);
}
?>