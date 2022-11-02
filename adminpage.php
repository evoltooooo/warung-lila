<?php
include ("conn.php");

session_start();

if(!isset($_SESSION['admin_name'])){
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/css/adminpage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <title>Admin Page</title>
</head>
<body>
    <div class="container">
        <nav>
            <ul>
                <li>
                    <a href="#" class="logo">
                        <img src="./src/img/astesia.png" alt="">
                        <span class="nav-item"><?php echo $_SESSION['admin_name'] ?></span>
                    </a>
                </li>
                <li><a href="#">
                    <i class="fa-solid fa-user"></i>
                    <span class="nav-item">Manage User</span>
                </a></li>
                <li><a href="adminpage-products.php">
                    <i class="fa-solid fa-cart-plus"></i>
                    <span class="nav-item">Manage Product</span>
                </a></li>
                <li><a href="logout.php" class="logout">
                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                    <span class="nav-item">Logout</span>
                </a></li>
            </ul>
        </nav>
        <div class="content">
            <div class="title">
                <h1>This is Admin Page</h1>
                <p>Welcome, <?php echo $_SESSION['admin_name'] ?></p>
                <img src="./src/img/astesia.png" alt="">
            </div>
        </div>
    </div>
</body>
</html>