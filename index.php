<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/css/index.css">
    <link rel="stylesheet" href="./src/css/footer.css"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <script src="./src/js/index.js" type="text/javascript"></script>
    <title>Warung Lila | Home</title>
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
        <div class="rglgn">
            <a href="register.php"><button class="rgbtn">Register</button></a>
            <a href="login.php"><button class="lgbtn">Login</button></a>
        </div>
    </header>
    <!--Hero-->
    <div class="hero1">
        <section class="container hero row">
            <div class="content">
                <h2>LENGKAPI KEBUTUHAN ANDA</h2>
                <p>SELAMAT DATANG DI WARUNG KAMI!!! Penuhi kebutuhan sehari-harimu dengan barang yang berkualitas dan harga yang terjangkau. Warung kami pula mengutamakan Pelanggan dengan pelayanan yang ramah dan sopan.
                </p>
                <a href="#" class="row">
                    Belanja Sekarang
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
            <div class="img">
                <img src="./src/img/hero.png">
                <span></span>
            </div>
        </section>
    </div>
    <!--End Hero-->
    <!--Body-->
    <div class="body">
        <!--About-->
        <section class="about">
            <div class="main">
                <img src="./src/img/warungmain.png">
                <div class="about-text">
                    <h1>Tentang Kami</h1>
                    <h5>Warung Lila</h5>
                    <p>Warung Lila sudah berdiri sekitar 15 tahun, pada tahun 2007. Warung Lila menyediakan kebutuhan pokok keseharian anda, seperti sayuran dan sembako. Tidak hanya itu, kami juga menyediakan jajanan bagi anak-anak dengan beragam pilihan.</p>
                    <a href="#" class="row">
                        Pelajari Lebih Banyak
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </section>
        <!--End About-->
        <!--Menu-->
        <div class="container2">
            <div class="card">
                <div class="face face1">
                    <div class="thumbnail">
                        <img src="./src/img/sayuran.png">
                    </div>
                </div>
                <div class="face face2">
                    <div class="menudesc">
                        <h3>Sayuran</h3>
                        <a href="#">GO
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="face face1">
                    <div class="thumbnail">
                        <img src="./src/img/sembako.png">
                    </div>
                </div>
                <div class="face face2">
                    <div class="menudesc">
                        <h3>Sembako</h3>
                        <a href="#">GO
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="face face1">
                    <div class="thumbnail">
                        <img src="./src/img/jajanan.png">
                    </div>
                </div>
                <div class="face face2">
                    <div class="menudesc">
                        <h3>Jajanan</h3>
                        <a href="#">GO
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
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