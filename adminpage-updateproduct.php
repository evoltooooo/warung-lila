<?php
include ("conn.php");

session_start();

if(!isset($_SESSION['admin_name'])){
    header('location:login.php');
}
$id = $_GET['edit'];
if(isset($_POST['updateProduct'])){

$product_name = $_POST['productName'];
$product_price = $_POST['productPrice'];
$product_image = $_FILES['productImage']['name'];
$product_image_tmp_name = $_FILES['productImage']['tmp_name'];
$product_image_folder = 'uploaded_img/'.$product_image;
$type = $_POST['tipe'];

if(empty($product_name) || empty($product_price) || empty($product_image)){
   $message[] = 'please fill out all';
   header('location:adminpage-products.php');
}else{
   $insert = "UPDATE tbproduk SET productName='$product_name', productPrice='$product_price', productImage='$product_image' WHERE id=$id";
   $upload = mysqli_query($conn, $insert);
   if($upload){
      move_uploaded_file($product_image_tmp_name, $product_image_folder);
      $message[] = 'new product added successfully';
      header('location:adminpage-products.php');
   }else{
      $message[] = 'could not add the product';
   }
}

};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/css/adminpage-updateproduct.css">
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
        <?php

            if(isset($message)){
            foreach($message as $message){
                echo '<span class="message">'.$message.'</span>';
            }
        }

        ?>
            <div class="admin-product-form-container">
                <form action="" method="post" enctype="multipart/form-data">
                    <h3>Update Product</h3>
                    <input type="text" placeholder="Enter product name..." name="productName" class="box">
                    <input type="text" placeholder="Rp." name="productPrice" class="box">
                    <input type="file" accept="image/png, image/jpeg, image/jpg" name="productImage" class="box">
                    <input type="radio" value="Sayuran" name="tipe" id="Sayuran" class="choice">Sayuran</input>
                    <input type="radio" value="Sembako" name="tipe" id="Sembako" class="choice">Sembako</input>
                    <input type="radio" value="Jajanan" name="tipe" id="Jajanan" class="choice">Jajanan</input>
                    <input type="submit" class="btn" name="updateProduct" value="Add Product">
                </form>
            </div>
        </div>
    </div>
</body>
</html>