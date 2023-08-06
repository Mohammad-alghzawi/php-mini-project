<?php 
Session_start();
include_once('nav.php');
include_once('form.php');
echo"<div>";// creat table in PHP
echo "<table class='table table-striped' id='tabel' style= 'margin-right: 12px;'>";
echo"<thead>";
echo"<tr>";
echo"<th>product name</th>";
echo"<th>product price</th>";
echo"<th>product image</th>";
echo"</tr>";
echo"</thead>";

echo"<tbody>";
if(isset($_SESSION['products'])&& is_array($_SESSION['products'])){ // for first submit 
    foreach($_SESSION['products'] as $product){ //loop for all products 
        echo'<tr>'; //creat row for each product
        echo'<td>'.$product['name'].'</td>';
        echo'<td>'.$product['price'].'</td>';
        echo '<td><img class="product-image" src="./image/' . trim($product['image'], 'uploads/') . '" width="100px" height="100px" alt="' . $product['name'] . '"></td>';
        echo'<tr>';
    }
}
echo "</tbody>";
echo "</table>";
echo "</div>";


echo "<a style='margin-left:20px;'href='product_cards.php'><button style=' background-color:#ffe4c4a3; width: 120px; height:50px; border-radius:5px'>preview cards</button></a>";

include_once('footer.php');
?>

<style>
    .table{
 background-color: #ffe4c4a3;
margin-top: 50px;
    }

    body{
        background-image: url("https://img.freepik.com/free-photo/men39s-clothes-hanger-generative-ai_169016-29035.jpg?size=626&ext=jpg&ga=GA1.2.823856766.1688295675&semt=sph");
        background-repeat: no-repeat;
        background-size: cover;
    }

</style>