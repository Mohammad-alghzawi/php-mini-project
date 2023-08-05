<!doctype html>

<html lang="en">


</html>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
      <nav class="navbar navbar-expand-lg navbar-light bg-light" id="Home">
 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <img class="logo" src="logo6-removebg-preview.png" alt="">
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#Home">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#AddProduct">AddProduct</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#Footer">Footer</a>
      </li>
    </ul>
  </div>
</nav>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
  </ol>
  <div class="carousel-inner">
    
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://cdn.pixabay.com/photo/2019/03/13/11/07/supermarket-4052658_640.jpg" alt="First slide">
      
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://w7.pngwing.com/pngs/453/501/png-transparent-grocery-store-food-supermarket-shopping-cart-store-shelf-miscellaneous-natural-foods-retail.png" alt="Second slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>

</div>

<div>
  <form action="" method="POST" class="form" id="AddProduct"><br>
  <label for="">Name:</label>
  <input type="text" name="product1">
  <br>
  <label for="">Price:</label>
  <input type="text" name="product2">
  <br>
  <label for="">Image:</label>
  <input type="file" name="product3">
  <br><br>
  <input type="submit" class="submit">
  </form>
</div>

<div class="footer" id="Footer">
<div class="logofooter">
        <img src="logo6-removebg-preview.png" alt="logo">
    </div>
        <div class="info-mid">
      <h3>Info</h3>
      <div class="icons">
        <i class="fa-solid fa-envelope"></i>
      <span>mohd.a.ghzawi@gmail.com</span>
    </div>
    <div> 
        <i class="fa-solid fa-phone"></i>
        <span>Tel.+962 797060670</span>
    </div>
    <div>  
         <i class="fa-solid fa-location-dot"></i>
        <span>Irbid</span>
    </div>
     
        </div>
       
        <div class="right-footer">
            <ul class="nav-footer">
                <li><a class="color" href="#Home">Home</a></li>
                <li><a class="color" href="#AddProduct">AddProduct</a></li>
              </ul>
              <div class="copy">
                <i class="fa-solid fa-registered"></i>
                <span>Copywrite-2023|Mohammad alghzawi</span>
              </div>
        </div>  


        </div>
      

</div>




  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    </body>
</html>

<!-- <?php

// $name=$_POST[""];
// echo $name;
// $price=$_POST[""];
// echo $price;



?> -->