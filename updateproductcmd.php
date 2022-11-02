<?php
include ("conn.php");
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