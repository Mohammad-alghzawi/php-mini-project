<?php
session_start();
if(!isset($_SESSION['products'])){ // to check if no array in sesstion
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
if($_SERVER['REQUEST_METHOD']==='POST'){ // if the form method is post 
  $productname=$_POST['product_name']; // $_POST['product_name'] from form 
  $productprice=$_POST['product_price'];
  $productimage=$_FILES['product_img']['name'];// the methode is file
  addproduct($productname,$productprice,$productimage);
  header('Location:tableproduct.php'); //forwored to tableproduct
exit();
}
else{
    header('Location:home.php');
    exit();
}

?>
