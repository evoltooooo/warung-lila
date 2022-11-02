<?php
include ("conn.php");

session_start();

if(!isset($_SESSION['user_name'])){
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/css/sayuranlist.css">
    <link rel="stylesheet" href="./src/css/footer.css"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <script src="./src/js/index.js" type="text/javascript"></script>
    <title>Warung Lila | Sayuran</title>
</head>
<body>
    <header>
        <a href class="logo">Warung Lila</a>
        <nav>
            <ul class="nav_links">
                <li><a href="#">Beranda</a></li>
                <li><a href="#">Produk</a></li>
                <li><a href="#">Tentang</a></li>
            </ul>
        </nav>
        <div class="account">
            <p><i class="fa-solid fa-user" id="profile"></i> <?php echo $_SESSION['user_name'] ?>
            <a href="logout.php"><button class="lgbtn"><i class="fa-solid fa-arrow-right-from-bracket"></i>  Logout</button></a>
            </p>
        </div>
    </header>
    <!--Hero-->
    <!--End Hero-->
    <!--Body-->
    <div class="body">
            <?php
            
            $select = mysqli_query($conn, "SELECT * FROM tbproduk where tipe='Sayuran'");

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
                            <a href="admin_update.php?edit=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-edit"></i> Beli </a>
                            <a href="addproductcmd.php?delete=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-trash"></i> Keranjang </a>
                        </td>
                    </tr>
      <?php } ?>
      </table>
   </div>

    </div>
    <!--End About-->
        <!--Menu-->
        <!--End Menu-->
    </div>
    <!--Footer-->
    <footer>
        <div class="footer_content">
            <h3>Warung Lila</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quae vero nesciunt placeat necessitatibus totam velit. Ex, repellat. Reiciendis, est beatae corporis voluptatem debitis quisquam harum doloremque aperiam commodi in!</p>
        </div>
        <div class="footer_bottom">
            <p>Copyright &copy;2022</p>
        </div>
    </footer>
</body>
</html>