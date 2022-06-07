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
  <title>Cart</title>
</head>

<body>
<?php include('include/header.php'); ?>

    

    <!-- Content -->


    <div class="container mt-5">
        <div class="row justify-content-evenly">
            <div class="col-md-5">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item active" aria-current="page">Information</li>
                      <li class="breadcrumb-item"><a href="#">Shopping</a></li>
                      <li class="breadcrumb-item "><a href="#">Payment</a></li>
                    </ol>
                  </nav>
               <h5>Contact Information</h5>
               <div>
                <div class="row mt-3">
                   <div class="col-3">
                       <img src="./img/user.png" height="100px" alt="user">
                    </div>
                    <div class="col-md-9">
                        <p class="mb-1">Arif Hossan (arif@gmail.com)</p>
                        <a href="#">log out</a>
                    </div>

                </div>
               </div>
               <form action="">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                       Email me with news and offers
                    </label>
                  </div>
                  <h5>Shipping Address</h5>
                  <div class="mt-3 mb-5">
                    <select class="form-select mb-2  form-select-sm" aria-label=".form-select-sm example">

                        <option selected>Bangladesh (Arif Hossan)</option>
                        <option value="1">New Address</option>

                      </select>

                      <select class="form-select mb-2  form-select-sm" aria-label=".form-select-sm example">

                        <option selected>Dhaka</option>
                        <option value="1">Barishal</option>
                        <option value="2">Chittagong</option>
                        <option value="3">Rajshahi</option>
                        <option value="4">Sylhet</option>
                        <option value="5">Khulna</option>

                      </select>

                      <div class="row g-2 mb-2">
                        <div class="col-md">
                          <div class="form-floating">
                            <input type="text" class="form-control" id="floatingInputGrid" placeholder="First Name" value="">
                            <label for="floatingInputGrid">First Name</label>
                          </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating">
                              <input type="text" class="form-control" id="floatingInputGrid" placeholder="Last Name" value="">
                              <label for="floatingInputGrid">Last Name</label>
                            </div>
                          </div>
                      </div>

                      <div class="form-floating mb-2">
                        <textarea class="form-control" placeholder="Leave your address here" id="floatingTextarea"></textarea>
                        <label for="floatingTextarea">Address</label>
                      </div>

                      <div class="row g-2 mb-2">
                        <div class="col-md">
                          <div class="form-floating">
                            <input type="text" class="form-control" id="floatingInputGrid" placeholder="City" value="">
                            <label for="floatingInputGrid">City</label>
                          </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating">
                              <input type="number" class="form-control" id="floatingInputGrid" placeholder="Postal Code" value="" >
                              <label for="floatingInputGrid">Postal Code</label>
                            </div>
                          </div>
                      </div>


                      <div class="form-floating mb-2">
                        <input type="number" class="form-control" placeholder="Phone Number" id="floatingInputGrid" required></input>
                        <label for="floatingInputGrid">Phone Number</label>
                      </div>

                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Text me with news and offers
                        </label>
                      </div>

                      <div class="col-12">
                        <button href="thankyou.php" type="submit" class="btn btn-outline-success">Continue to shopping</button>
                      </div>


                    </div>

               </form>


              </div>

<!-- Right Side -->
         <div class="col-md-5">
             <div class="row">
                 <div class="col-3">
                    <img src="./img/Product/Man/Casual/P1/p1-1.jpg" alt="..." class="img-thumbnail"> <br> <br>

                </div>
                <div class="col">
                   <div class="row">
                       <div class="col">
                        <p>Urban Sneakers</p>
                        <p>Qty : 1</p>
                       </div>
                       <div class="col text-center">
                           <strong>1570/-</strong>
                       </div>
                   </div>

                </div>

                  <hr>

                  <form class="row g-2 mb-3">
                    <div class="col-auto">
                      <label for="giftorcuppon" class="visually-hidden">Password</label>
                      <input type="text" class="form-control " id="giftorcuppon" placeholder="Giftcard of Cuppon">
                    </div>
                    <div class="col-auto">
                      <button type="submit" class="btn btn-outline-success smb-3">Apply</button>
                    </div>
                  </form>
                    <hr>

                    <div class="calculation">
                        <div class="row">
                            <div class="col">
                                <p>Subtotal</p>
                            </div>
                            <div class="col">
                                <p>1570/-</p>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col mb-3">
                                <label for="">Delivery</label>
                                <select class="form-select mt-2" aria-label="Default select example">

                                    <option value="1" selected>Cash on Delivery</option>
                                    <option value="2">Bkash</option>
                                    <option value="3">Bank</option>
                                  </select>
                        </div>

                    <hr>
                    <div class="row">
                        <div class="col">
                            <h5>Total</h5>
                        </div>
                        <div class="col">
                            <p>1570/-</p>
                        </div>
                    </div>

                    </div>
                  </div>
             </div>


         </div>



            </div>
          </div>
        </div>
    </div>




    <?php include('include/footer.php'); ?>







    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>



</body>

</html>