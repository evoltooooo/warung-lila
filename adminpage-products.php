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
    <link rel="stylesheet" href="./src/css/adminpage-products.css">
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
                <form action="addproductcmd.php" method="post" enctype="multipart/form-data">
                    <h3>Add New Product</h3>
                    <input type="text" placeholder="Enter product name..." name="productName" class="box">
                    <input type="text" placeholder="Rp." name="productPrice" class="box">
                    <input type="file" accept="image/png, image/jpeg, image/jpg" name="productImage" class="box">
                    <input type="radio" value="Sayuran" name="tipe" id="Sayuran" class="choice">Sayuran</input>
                    <input type="radio" value="Sembako" name="tipe" id="Sembako" class="choice">Sembako</input>
                    <input type="radio" value="Jajanan" name="tipe" id="Jajanan" class="choice">Jajanan</input>
                    <input type="submit" class="btn" name="addProduct" value="Add Product">
                </form>
            </div>
            <?php
            
            $select = mysqli_query($conn, "SELECT * FROM tbproduk");

            ?>
            <div class="product-display">
                <table class="product-display-table">
                    <thead>
                    <tr>
                        <th>Product Image</th>
                        <th>Product Name</th>
                        <th>Product Price</th>
                        <th>Action</th>
                    </tr>
                    </thead>
            <?php while($row = mysqli_fetch_assoc($select)){ ?>
                    <tr>
                        <td><img src="uploaded_img/<?php echo $row['productImage']; ?>" height="100" alt=""></td>
                        <td><?php echo $row['productName']; ?></td>
                        <td>Rp.<?php echo $row['productPrice']; ?>/-</td>
                        <td>
                            <a href="adminpage-updateproduct.php?edit=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-edit"></i> edit </a>
                            <a href="addproductcmd.php?delete=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-trash"></i> delete </a>
                        </td>
                    </tr>
      <?php } ?>
      </table>
   </div>
        </div>
    </div>
</body>
</html>