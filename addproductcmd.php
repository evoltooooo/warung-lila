<?php
include ("conn.php");
if(isset($_POST['addProduct'])){

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
   $insert = "INSERT INTO tbproduk(productName, productPrice, productImage, tipe) VALUES('$product_name', '$product_price', '$product_image','$type')";
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

if(isset($_GET['delete'])){
$id = $_GET['delete'];
mysqli_query($conn, "DELETE FROM tbproduk WHERE id = $id");
header('location:adminpage-products.php');
};
?>