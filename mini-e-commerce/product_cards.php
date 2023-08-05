<?php 
Session_start();
include_once('nav.php');
include_once('slider.php');
if(isset($_SESSION['products'])&& is_array($_SESSION['products'])){
    foreach($_SESSION['products'] as $product){
        echo'<div>';
        echo '<img class="product-image" src="./image/' . trim($product['image'], 'uploads/') . '" width="100px" height="100px" alt="' . $product['name'] . '">';
        echo'<div>'.$product['name'].'</div>';
        echo'<div>'.$product['price']. '</div>';
        echo'</div>';
    }
}else{
    echo '<p>we dont have any product</p>';
}
echo "<a href='tableproduct.php'><button>table product</button></a>";






include_once('footer.php');





?>