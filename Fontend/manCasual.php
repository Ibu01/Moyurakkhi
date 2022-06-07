<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- Font Awesome icon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Bootstrap icon -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
  <!-- Home page CSS -->
  <link rel="stylesheet" href="../css/custom.css">
  <title>Man| Casual</title>
</head>
<Style>



.foter{
	background: LightGray;
}
.text-reset{
	text-decoration: none;


}
/* Product Image */
.p-img:hover{
	transform: translateY(20px);
	transition: 0.5s;

}

.p-img:hover{
	transform: translateY(20px);
	transition: 0.5s;

}

.ratting .fa{
    color:rgb(233, 197, 38);
}

.card:hover {
	box-shadow: 0px 0px 5px 1px;
	transition: 0.3s;
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

  <div class="container-fluid">

    <div class="row ">
      <div class="col-3">
        <div class="accordion accordion-flush" id="accordionFlushExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                Color
              </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <button type="button" class="btn btn-lg btn-dark rounded-circle"> </button>
                <button type="button" class="btn btn-lg rounded-circle" style="background-color:#994d00;"> </button>
                <button type="button" class="btn btn-lg rounded-circle" style="background-color:#2013aa;"> </button>
                <button type="button" class="btn btn-lg rounded-circle" style="background-color:#69676b;"> </button>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                Price
              </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                  <label class="form-check-label" for="flexRadioDefault1">
                    200-500/-
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                  <label class="form-check-label" for="flexRadioDefault2">
                    500-1000/-
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                  <label class="form-check-label" for="flexRadioDefault1">
                    1000-1500/-
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                  <label class="form-check-label" for="flexRadioDefault1">
                    1500-2000/-
                  </label>
                </div>

                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                  <label class="form-check-label" for="flexRadioDefault1">
                    2500-3000/-
                  </label>
                </div>

              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                Brand
              </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Hush Puppies
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    North Star
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" >
                  <label class="form-check-label" for="flexCheckDefault">
                    Weinbrenner
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Mocassino
                  </label>
                </div>


              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-9">
        <h4>Casual</h4>
        <div class="row d-flex justify-content-between">
          <div class="col">
            <h6>View as</h6>
            <i class="fa-solid fa-grip"></i>
            <i class="fa-solid fa-bars"></i>

          </div>
          <div class="col ">
            <h6>Sort By</h6>
              <select class="form-select" aria-label="Default select example">
                <option selected>None</option>
                <option value="1">Price,Low to High</option>
                <option value="2">Price,High to Low</option>
                <option value="3">Best Selling</option>
              </select>
         </div>
        </div>



        <!-- Product -->
        <div class="row mt-5">
          <div class="col-md-3 mb-4">
            <div class="card ">
              <img class="card-img p-img img-fluid" src="./img/Product/Man/Casual/P1/p1-1.jpg" alt="">
              <div class="card-body text-center">
                <h5 class="card-title ">Urban Sneakers</h5>
                <div class="ratting">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  </div>
                <del style="color:red ;">2250/-</del>
                <p class="Card-text"><strong>1570/-</strong></p>
                <a class="btn btn-outline-success rounded-pill" href="./mp1details.php" role="button">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card mb-4">
              <img class="card-img p-img img-fluid " src="./img/Product/Man/Casual/P2/p2-1.jpg" alt="">
              <div class="card-body text-center">
                <h5 class="card-title ">Brown Shoe</h5>
                <div class="ratting">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa-regular fa-star"></i>
                  </div>
                <del style="color:red ;">1950/-</del>
                <p class="Card-text"><strong>1730/-</strong></p>
                <a class="btn btn-outline-success rounded-pill" href="#" role="button">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card mb-4">
              <img class="card-img p-img img-fluid" src="./img/Product/Man/Casual/P3/p3-1.jpg" alt="">
              <div class="card-body text-center">
                <h5 class="card-title ">Red Label</h5>
                <div class="ratting">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  </div>
                <del style="color:red ;">2170/-</del>
                <p class="Card-text"><strong>1950/-</strong></p>
                <a class="btn btn-outline-success rounded-pill" href="#" role="button">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card mb-4">
              <img class="card-img p-img img-fluid" src="./img/Product/Man/Casual/P4/p4-1.jpg" alt="">
              <div class="card-body text-center">
                <h5 class="card-title ">Wei.Lace-Up</h5>
                <div class="ratting">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa-regular fa-star"></i>
                  </div>
                <del style="color:red ;">2740/-</del>
                <p class="Card-text"><strong>2170/-</strong></p>
                <a class="btn btn-outline-success rounded-pill" href="#" role="button">Buy Now</a>
              </div>
            </div>
          </div>
        </div>

        <div class="row mt-5">
          <div class="col-md-3 mb-4">
            <div class="card ">
              <img class="card-img p-img img-fluid" src="./img/Product/Man/Casual/P5/p5-1.jpg" alt="">
              <div class="card-body text-center">
                <h5 class="card-title ">Favian Sneakers</h5>
                <div class="ratting">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  </div>
                <del style="color:red ;">2850/-</del>
                <p class="Card-text"><strong>1670/-</strong></p>
                <a class="btn btn-outline-success rounded-pill" href="#" role="button">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card mb-4">
              <img class="card-img p-img img-fluid " src="./img/Product/Man/Casual/P6/p6-1.jpg" alt="">
              <div class="card-body text-center">
                <h5 class="card-title ">Weinbrenner</h5>
                <div class="ratting">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  </div>
                <del style="color:red ;">2550/-</del>
                <p class="Card-text"><strong>1930/-</strong></p>
                <a class="btn btn-outline-success rounded-pill" href="#" role="button">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card mb-4">
              <img class="card-img p-img img-fluid" src="./img/Product/Man/Casual/P7/p7-1.jpg" alt="">
              <div class="card-body text-center">
                <h5 class="card-title ">Loafer</h5>
                <div class="ratting">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa-regular fa-star"></i>
                  <i class="fa-regular fa-star"></i>
                  </div>
                <del style="color:red ;">1570/-</del>
                <p class="Card-text"><strong>1150/-</strong></p>
                <a class="btn btn-outline-success rounded-pill" href="#" role="button">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card mb-4">
              <img class="card-img p-img img-fluid" src="./img/Product/Man/Casual/P8/p8-1.jpg" alt="">
              <div class="card-body text-center">
                <h5 class="card-title ">Loafer</h5>
                <div class="ratting">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa-regular fa-star"></i>
                  </div>
                <del style="color:red ;">1540/-</del>
                <p class="Card-text"><strong>1120/-</strong></p>
                <a class="btn btn-outline-success rounded-pill" href="#" role="button">Buy Now</a>
              </div>
            </div>
          </div>
        </div>

        <div class="row mt-5">
          <div class="col-md-3 mb-4">
            <div class="card ">
              <img class="card-img p-img img-fluid" src="./img/Product/Man/Casual/P9/p9-1.jpg" alt="">
              <div class="card-body text-center">
                <h5 class="card-title ">Black Lofer</h5>
                <div class="ratting">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa-regular fa-star"></i>
                  </div>
                <del style="color:red ;">2250/-</del>
                <p class="Card-text"><strong>1570/-</strong></p>
                <a class="btn btn-outline-success rounded-pill" href="#" role="button">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card mb-4">
              <img class="card-img p-img img-fluid " src="./img/Product/Man/Casual/P10/p10-1.jpg" alt="">
              <div class="card-body text-center">
                <h5 class="card-title ">Urban Sneakers</h5>
                <div class="ratting">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa-regular fa-star"></i>
                  </div>
                <del style="color:red ;">1950/-</del>
                <p class="Card-text"><strong>1530/-</strong></p>
                <a class="btn btn-outline-success rounded-pill" href="#" role="button">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card mb-4">
              <img class="card-img p-img img-fluid" src="./img/Product/Man/Casual/P11/p11-1.jpg" alt="">
              <div class="card-body text-center">
                <h5 class="card-title ">North Strar</h5>
                <div class="ratting">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa-regular fa-star"></i>
                  <i class="fa-regular fa-star"></i>
                  </div>
                <del style="color:red ;">1170/-</del>
                <p class="Card-text"><strong>950/-</strong></p>
                <a class="btn btn-outline-success rounded-pill" href="#" role="button">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card mb-4">
              <img class="card-img p-img img-fluid" src="./img/Product/Man/Casual/P12/p12-1.jpg" alt="">
              <div class="card-body text-center">
                <h5 class="card-title ">Black</h5>
                <div class="ratting">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa-regular fa-star"></i>
                  <i class="fa-regular fa-star"></i>
                  </div>
                <del style="color:red ;">1740/-</del>
                <p class="Card-text"><strong>970/-</strong></p>
                <a class="btn btn-outline-success rounded-pill" href="#" role="button">Buy Now</a>
              </div>
            </div>
          </div>
        </div>

        <div class="row mt-5">
          <div class="col-md-3 mb-4">
            <div class="card ">
              <img class="card-img p-img img-fluid" src="./img/Product/Man/Casual/P1/p1-1.jpg" alt="">
              <div class="card-body text-center">
                <h5 class="card-title ">Urban Sneakers</h5>
                <div class="ratting">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  </div>
                <del style="color:red ;">2250/-</del>
                <p class="Card-text"><strong>1570/-</strong></p>
                <a class="btn btn-outline-success rounded-pill" href="#" role="button">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card mb-4">
              <img class="card-img p-img img-fluid " src="./img/Product/Man/Casual/P2/p2-1.jpg" alt="">
              <div class="card-body text-center">
                <h5 class="card-title ">Brown Shoe</h5>
                <div class="ratting">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa-regular fa-star"></i>
                  </div>
                <del style="color:red ;">1950/-</del>
                <p class="Card-text"><strong>1730/-</strong></p>
                <a class="btn btn-outline-success rounded-pill" href="#" role="button">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card mb-4">
              <img class="card-img p-img img-fluid" src="./img/Product/Man/Casual/P3/p3-1.jpg" alt="">
              <div class="card-body text-center">
                <h5 class="card-title ">Red Label</h5>
                <div class="ratting">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  </div>
                <del style="color:red ;">2170/-</del>
                <p class="Card-text"><strong>1950/-</strong></p>
                <a class="btn btn-outline-success rounded-pill" href="#" role="button">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card mb-4">
              <img class="card-img p-img img-fluid" src="./img/Product/Man/Casual/P4/p4-1.jpg" alt="">
              <div class="card-body text-center">
                <h5 class="card-title ">Wei.Lace-Up</h5>
                <div class="ratting">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa-regular fa-star"></i>
                  </div>
                <del style="color:red ;">2740/-</del>
                <p class="Card-text"><strong>2170/-</strong></p>
                <a class="btn btn-outline-success rounded-pill" href="#" role="button">Buy Now</a>
              </div>
            </div>
          </div>
        </div>


      </div>
      <nav aria-label="Page navigation example ">
        <ul class="pagination justify-content-center">
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
              <span class="sr-only">Previous</span>
            </a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
              <span class="sr-only">Next</span>
            </a>
          </li>
        </ul>
      </nav>
    </div>




  </div>





  <!-- Footer -->
  <div class="container-fluid">
    <!-- Footer -->
    <footer class="foter  text-center text-dark">
      <!-- Grid container -->
      <div class="container p-4">
        <!-- Section: Social media -->
        <section class="mb-4">
          <!-- Facebook -->
          <a class="btn btn-outline-light btn-floating m-1" href="#" role="button"><i class="fab fa-facebook-f"></i></a>
          <!-- Twitter -->
          <a class="btn btn-outline-light btn-floating m-1" href="#" role="button"><i class="fab fa-twitter"></i></a>
          <!-- Instagram -->
          <a class="btn btn-outline-light btn-floating m-1" href="#" role="button"><i class="fab fa-instagram"></i></a>
          <!-- Linkedin -->
          <a class="btn btn-outline-light btn-floating m-1" href="#" role="button"><i
              class="fab fa-linkedin-in"></i></a>
        </section>


        <!-- Section: Form -->
        <section class="">
          <form action="">

            <div class="row d-flex justify-content-center">
              <div class="col-auto">
                <p class="pt-2">
                  <strong>Sign up for our newsletter</strong>
                </p>
              </div>
             <div class="col-md-5 col-12">
              <div class="form-outline form-white mb-4">
                  <input type="email" id="form5Example21" class="form-control" />
                  </div>
              </div>
              <div class="col-auto">
                <button type="submit" class="btn btn-outline-light mb-4">
                  Subscribe
                </button>
              </div>
            </div>
         </form>
        </section>
      <section class="">
          <div class="container text-center text-md-start mt-5">

            <div class="row mt-3">

              <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                   <img src="../img/log.png" alt="Logo">
                  <p class="text-center">Buy Now or Cry Later</p>
            </div>



              <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">Products</h6>
                <p>
                  <a href="#" class="text-reset">Casual</a>
                 </p>
                <p>
                  <a href="#" class="text-reset">Formal</a>
                </p>
                <p>
                  <a href="#" class="text-reset">Sandal</a>
                </p>
                <p>
                  <a href="#" class="text-reset">Sports</a>
                </p>
              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">
                  Useful links
                </h6>
                <p>
                  <a href="#" class="text-reset">Terms and Condition</a>
                </p>
                <p>
                  <a href="#" class="text-reset">Settings</a>
                </p>
                <p>
                  <a href="#" class="text-reset">Orders</a>
                </p>
                <p>
                  <a href="#" class="text-reset">Help</a>
                </p>
              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-2">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">
                  Contact
                </h6>
                <p><i class="fas fa-home me-3"></i>Azampur,Uttara,Dhaka-1230</p>
                <p>
                  <i class="fas fa-envelope me-3"></i>learners@moyurakkhi.com
                </p>
                <p><i class="fas fa-phone me-3"></i> + 01706290433</p>

              </div>
              <!-- Grid column -->
            </div>
            <!-- Grid row -->
          </div>
        </section>

        <!-- Section: Links -->

      </div>
      <!-- Grid container -->

      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2022 Devloped by:
        <a class="text-white" href="#">Learners</a>
      </div>

    </footer>
  </div>







  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous">
  </script>



</body>

</html>