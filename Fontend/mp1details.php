<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Font Awesome icon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Bootstrap icon -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
  <!-- Home page CSS -->
  <link rel="stylesheet" href="../css/custom.css">
  <title>Product Details</title>
</head>
<Style>
/* body {
	background: #e3f2fd;
	font-family: "Open Sans", sans-serif;
} */




.foter{
	background: LightGray;
}
.text-reset{
	text-decoration: none;


}
.button_buy_now {
    width: 200px;
    border: none;
    color: white;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    transition-duration: 0.4s;
    cursor: pointer;
  }

  .button_buy_now {
    background-color: #025262;
    color: white;
    border: 2px solid #025262;
  }

  .button_buy_now:hover {
    background-color: white;
    color: black;

  }

</Style>

<body>


  <!--Top Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <a href="#" class="nav-link ms-auto " style="color:rgb(75, 72, 72);"><i class="fa-solid fa-location-dot"></i> Store
      Location</a>
    <a href="index.php" class="navbar-brand ms-auto"><img src="./img/log.png" width="150px" height="50px" alt="logo"></a>
    <ul class="navbar-nav ms-auto">
      <li class="nav-item"><a href="#" class="nav-link"><i class="fa-solid fa-user"></i> Login</a></li>
      <li class="nav-item"><a href="#" class="nav-link me-2"><i class="fa-solid fa-cart-shopping"></i> Cart</a></li>
      <li class="nav-item">
        <form class="d-flex">
          <button class="btn btn-outline-dark" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
          <input class="form-control me-5" type="search" placeholder="Search" aria-label="Search">

        </form>
      </li>

    </ul>



  </nav>



  <!-- Support Navbar -->

  <div class="conatainer sticky-top" style="background-color: white;">
    <div class="row ">
      <nav class="navbar navbar-expand-md navbar-light  d-flex justify-content-center align-items-center text-center">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="#about-us">About Us</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Man
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Casual</a></li>
              <li><a class="dropdown-item" href="#">Formal</a></li>
              <li><a class="dropdown-item" href="#">Sandal</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Women
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Casual</a></li>
              <li><a class="dropdown-item" href="#">Formal</a></li>
              <li><a class="dropdown-item" href="#">Sandal</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Kids
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Sports</a></li>
              <li><a class="dropdown-item" href="#">Casual</a></li>
              <li><a class="dropdown-item" href="#">Sandal</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">E-Voucher</a>
          </li>
        </ul>
      </nav>
    </div>
  </div>

  <!-- Product Details -->

  <div class="container">
    <div class="row mt-4">
        <div class="col-md-7">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active" >
                    <img src="./img/Product/Man/Casual/P1/p1-1.jpg" class="d-block w-100 " style="height: 400px;" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="./img/Product/Man/Casual/P1/p1-1.jpg" class="d-block w-100" style="height: 400px;" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="./img/Product/Man/Casual/P1/p1-1.jpg" class="d-block w-100" style="height: 400px;" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="./img/Product/Man/Casual/P1/p1-1.jpg" class="d-block w-100" style="height: 400px;" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class=" d-flex border-1 border-secondary">
                <a href=""><img class="col-md-2 w-100" src="./img/Product/Man/Casual/P1/p1-1.jpg" alt=""></a>
                <a href=""><img class="col-md-2 w-100" src="./img/Product/Man/Casual/P1/p1-2.jpg" alt=""></a>
                <a href=""><img class="col-md-2 w-100" src="./img/Product/Man/Casual/P1/p1-3.jpg" alt=""></a>
                <a href=""><img class="col-md-2 w-100" src="./img/Product/Man/Casual/P1/p1-4.jpg" alt=""></a>
            </div>
        </div>
        <div class="col-md-5">
            <div class="card w-100" style="box-shadow: 2px 18px 39px -5px rgba(0,0,0,0.67);
            -webkit-box-shadow: 2px 18px 39px -5px rgba(0,0,0,0.67);
            -moz-box-shadow: 2px 18px 39px -5px rgba(0,0,0,0.67);">
                <div class="card-body">
                  <h5 class="card-title">Urbar Sneakers</h5>
                  <p class="card-subtitle mb-2"><a href="#" class="text-dark" style="text-decoration: none;">Be the first to review this product
                </a></p>
                <img class="w-100" src="./img/content_slider1.jpg" alt="">
                <h5 class="card-title mt-4">CASUAL SHOES</h5>
                <p class="card-text mt-2 ">eshopid-lx32 <br> Brand: eShop</p>
                  <h3 class="card-text mt-2" style="color:red">1,579/-</h3>
                  <div>
                    <h6 class="mt-4">COLOR </h6>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="COLORRADIO" id="COLORRADIO1" checked>
                      <label class="form-check-label" for="COLORRADIO1">
                          BLUE
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="COLORRADIO" id="COLORRADIO2" >
                      <label class="form-check-label" for="COLORRADIO2">
                      BLACK
                      </label>
                    </div>
                </div>

                  <div>
                    <h6 class="mt-4">SELECT SIZE </h6>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                      <label class="form-check-label" for="flexRadioDefault1">
                          41
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                      <label class="form-check-label" for="flexRadioDefault2">
                        42
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                      <label class="form-check-label" for="flexRadioDefault3">
                        43
                      </label>
                    </div>
                </div>
                  <div class="text-center">
                    <a href="#"><button class="button button_buy_now">ADD TO CART</button></a>
                    <a href="buynow.php"><button class="button button_buy_now">BUY NOW</button></a>
                  </div>

              </div>

        </div>
    </div>


    <div class="value"><h2>Urbarn Sneakers lx32 </h2>
        <ul>





        <li>Stylish upper gives a sophisticated appeal</li>
        <li>Contemporary elongated silhouette gives a refined look</li>
        <li>Flexible outsole for comfort and grip</li>

        </ul></div>

</div>
</div>




<?php include('include/footer.php'); ?>







  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous">
  </script>



</body>

</html>