<?php 
Session_start();
include_once('nav.php');
include_once('slider.php');
if(isset($_SESSION['products'])&& is_array($_SESSION['products'])){
    foreach($_SESSION['products'] as $product){
        echo'<div class="product-card">';
        echo '<img class="product-image" src="./image/' . trim($product['image'], 'uploads/') . '" width="100px" height="100px" alt="' . $product['name'] . '">';
        echo'<div class="product-name">'.$product['name'].'</div>';
        echo'<div class="product-price">'.$product['price']. '</div>';
        echo'</div>';
    }
}else{
    echo '<p>we dont have any product</p>';
}
echo'<br>';
echo'<br>';
echo'<br>';
echo "<a href='tableproduct.php'><button>table product</button></a>";

include_once('footer.php');

?>



<style>
        .product-card {
            border: 1px solid #ccc;
            padding: 10px;
            margin: 30px;
            width: 300px;
            display: inline-block;
        }

        .product-image {
            width: 100%;
            height: 150px;
            object-fit: cover;
            margin-bottom: 10px;
        }

        .product-name {
            font-weight: bold;
            margin-bottom: 5px;
            font-size: 1rem;
        }

        .product-description {
            margin-bottom: 10px;
            font-size: 1rem;
        }

        .product-price {
            color: green;
            font-weight: bold;
            font-size: 1rem;
        }
    </style>
