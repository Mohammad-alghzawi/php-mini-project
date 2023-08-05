<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div>
        <form action="formpros.php" method="POST" class="form" id="AddProduct" enctype="multipart/form-data"><br>
            <label for="">product name:</label>
            <input type="text" name="product_name">
            <br>
            <label for="">Price:</label>
            <input type="text" name="product_price">
            <br>
            <label for="">Image:</label>
            <input type="file" name="product_img">
            <br><br>
            <input type="submit" class="submit">
        </form>
    </div>

</body>

</html>