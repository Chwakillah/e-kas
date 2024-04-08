<?php

require_once('fungsi.php');
require_once('koneksi.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        if (login($username, $password, $koneksi)) {
            $_SESSION['logged_in'] = true;
            header("Location: index.php");
            exit();
        } 
    } 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Kas</title>
    <link href="./output.css" rel="stylesheet">
</head>
<body>
    <?php
        require "header.php";
    ?>
    <form class="mx-32 my-16 h-[466px]" method="post">
        <div class="bg-ijotua flex flex-col justify-left items-center align-middle gap-4 px-6 py-5 rounded-lg">
            <h1 class="text-putih font-bold text-2xl">
                Login
            </h1>
            <div class="flex flex-col gap-4">
                <div class="flex gap-4">
                    <label for="" class="font-semibold text-putih text-sm">Username</label>
                    <input type="text" name="username">
                </div>
                <div class="flex gap-4">
                    <label for="" class="font-semibold text-putih text-sm">Password</label>
                    <input type="password" name="password">
                </div>
            </div>
            <button type="submit" class="px-4 py-2 rounded-md bg-ijomuda text-lg font-semibold text-putih" name="login">Login</button>
        </div>
    </form>
    <?php
        require "footer.php";
    ?>
</body>
</html>