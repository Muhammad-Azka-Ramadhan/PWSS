<?php
// session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body style="background-color: #f5f5f5;">
    <div class="header">
        <div class="container">
            <h1>Toko Online</h1>
        </div>
    </div>
    <div class="menu">
        <div class="container">
            <input type="checkbox" id="menu-toggle">
            <label for="menu-toggle" class="hamburger">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </label>
            <ul>
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Products</a></li>
                <li><a href="login.php">Logout</a></li>
            </ul>
        </div>
    </div>
    <br>
    <div class="content">
        <div class="container">
            <div class="row">
                 <?php
                if (isset($_GET['page'])) {
                    $page = $_GET['page'];
                    switch ($page) {
                        case 'produk':
                            # code...
                            include "produk.php";
                            break;
                        case 'create-produk':
                            include 'create-produk.php';
                            break;
                        default:
                            # code...
                            include "login.php";
                            break;
                    }
                } else {
                    include "login.php";
                }
                ?>
            </div>
        </div>
    </div>