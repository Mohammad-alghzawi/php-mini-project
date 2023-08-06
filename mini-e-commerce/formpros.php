<?php
session_start();
if(!isset($_SESSION['products'])){
  $_SESSION['products']=array();
}
function addproduct($name,$price,$image){
  $product=array(
    'name'=>$name,
    'price'=>$price,
    'image'=>$image
  );
  $_SESSION['products'][]=$product;
}
if($_SERVER['REQUEST_METHOD']==='POST'){
  $productname=$_POST['product_name'];
  $productprice=$_POST['product_price'];
  $productimage=$_FILES['product_img']['name'];
  addproduct($productname,$productprice,$productimage);
  header('Location:tableproduct.php');
exit();
}
else{
    header('Location:home.php');
    exit();
}

?>
