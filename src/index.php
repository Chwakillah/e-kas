<?php
session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <?php
        require "header.php";
    ?>
    <nav class="flex flex-col justify-center items-center text-center py-1 bg-ijomuda">
        <div class="flex gap-2 py-2 px-4 rounded-md bg-putih">
            <p class="font-bold text-ijomuda text-sm">Username:</p>
            <p class="font-bold text-ijomuda text-sm"><?=$_SESSION['username']?></p>
        </div>
        <dv class="flex gap-8 items-center text-center align-middle justify-center mt-8 mb-4 text-putih font-semibold py-2 px-8 rounded-lg bg-ijotua">
            <a href="link1.php" class="px-4 py-2 hover:border-b-putih">Link 1</a>
            <a href="link2.php" class="px-4 py-2 hover:border-b-putih ">Link 2</a>
            <a href="link3.php" class="px-4 py-2 hover:border-b-putih ">Link 3</a>
            <a href="logout.php" class="px-4 py-2 hover:border-b-putih rounded-md bg-merah">Logout</a>
        </dv>
    </nav>
    <section class="m-12">
        <div class="flex px-8 py-4 gap-14 justify-center items-center align-middle text-center">
            <img src="https://th.bing.com/th/id/OIP.Kdo4pzMFCZ5bHw5lk3_ehwAAAA?rs=1&pid=ImgDetMain" alt="login" srcset="" class="w-96">
            <h1 class="text-[52px] font-semibold">Selamat Datang
                <span class="text-[52px] font-bold text-ijomuda">
                    <?=$_SESSION['username']?>
                </span>
            </h1>
        </div>
    </section>
    <?php
        require "footer.php";
    ?>
</body>
</html>