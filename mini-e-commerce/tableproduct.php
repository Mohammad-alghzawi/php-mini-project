<?php 
Session_start();
include_once('nav.php');
include_once('form.php');
echo"<div>";
echo "<table class='table table-striped' id='tabel' style= 'margin-right: 12px;'>";
echo"<thead>";
echo"<tr>";
echo"<th>product name</th>";
echo"<th>product price</th>";
echo"<th>product image</th>";
echo"</tr>";
echo"</thead>";

echo"<tbody>";
if(isset($_SESSION['products'])&& is_array($_SESSION['products'])){
    foreach($_SESSION['products'] as $product){
        echo'<tr>';
        echo'<td>'.$product['name'].'</td>';
        echo'<td>'.$product['price'].'</td>';
        echo '<td><img class="product-image" src="./image/' . trim($product['image'], 'uploads/') . '" width="100px" height="100px" alt="' . $product['name'] . '"></td>';
        echo'<tr>';
    }
}
echo "</tbody>";
echo "</table>";
echo "</div>";


echo "<a href='product_cards.php'><button>preview cards</button></a>";

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