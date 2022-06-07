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
  <link rel="stylesheet" href="css/custom.css">
  <title>Women | Casual</title>
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

<?php include('include/header.php'); ?>

  <div class="container-fluid">

    <div class="row ">
      <div class="col-3">
        <div class="accordion accordion-flush" id="accordionFlushExample">
          <div class="accordion-item">
            <h3 class="accordion-header" id="flush-headingOne">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                Color
              </button>
            </h3>
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
            <h3 class="accordion-header" id="flush-headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                Price
              </button>
            </h3>
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
            <h3 class="accordion-header" id="flush-headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                Brand
              </button>
            </h3>
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
              <img class="card-img p-img img-fluid" src="./img/Product/Women/Heel/P1/p1-1.jpg" alt="">
              <div class="card-body text-center">
                <h5 class="card-title ">Brown Heel</h5>
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
              <img class="card-img p-img img-fluid " src="./img/Product/Women/Heel/P2/p2-1.jpg" alt="">
              <div class="card-body text-center">
                <h5 class="card-title ">Red Valvet</h5>
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
              <img class="card-img p-img img-fluid" src="./img/Product/Women/Heel/P3/p3-1.jpg" alt="">
              <div class="card-body text-center">
                <h5 class="card-title ">Flat Sandal</h5>
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
              <img class="card-img p-img img-fluid" src="./img/Product/Women/Heel/P4/p4-1.jpg" alt="">
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
              <img class="card-img p-img img-fluid" src="./img/Product/Women/Heel/P5/p5-1.jpg" alt="">
              <div class="card-body text-center">
                <h5 class="card-title ">Black Favian</h5>
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
              <img class="card-img p-img img-fluid " src="./img/Product/Women/N/Chunky Sandal/p1.jpg" alt="">
              <div class="card-body text-center">
                <h5 class="card-title ">Chunky Sandal</h5>
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
              <img class="card-img p-img img-fluid" src="./img/Product/Women/N/Comfit CELIA/p1.jpg" alt="">
              <div class="card-body text-center">
                <h5 class="card-title ">Comfit CELIA</h5>
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
              <img class="card-img p-img img-fluid" src="./img/Product/Women/N/Flat Sandal/p1.jpg" alt="">
              <div class="card-body text-center">
                <h5 class="card-title ">Flat Sandal</h5>
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
              <img class="card-img p-img img-fluid" src="./img/Product/Women/N/Ray Flats/p1.jpg" alt="">
              <div class="card-body text-center">
                <h5 class="card-title ">Ray Flats</h5>
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
              <img class="card-img p-img img-fluid " src="./img/Product/Women/N/Slingback/p1.jpg" alt="">
              <div class="card-body text-center">
                <h5 class="card-title ">Slingback</h5>
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
              <img class="card-img p-img img-fluid" src="./img/Product/Women/N/SPARK LACEUP/p1.jpg" alt="">
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
              <img class="card-img p-img img-fluid" src="./img/Product/Women/N/Chunky Sandal/p1.jpg" alt="">
              <div class="card-body text-center">
                <h5 class="card-title ">Spark</h5>
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
              <img class="card-img p-img img-fluid" src="./img/Product/Women/N/Urban Sneakers/p1.jpg" alt="">
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
              <img class="card-img p-img img-fluid" src="./img/Product/Women/N/SPARK LACEUP/p1.jpg" alt="">
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
              <img class="card-img p-img img-fluid " src="./img/Product/Women/N/Slingback/p1.jpg" alt="">
              <div class="card-body text-center">
                <h5 class="card-title ">Slingback</h5>
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
              <img class="card-img p-img img-fluid" src="./img/Product/Women/N/Comfit CELIA/p1.jpg" alt="">
              <div class="card-body text-center">
                <h5 class="card-title ">Comfit CELIA</h5>
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

  <?php include('include/footer.php'); ?>


  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous">
  </script>



</body>

</html>