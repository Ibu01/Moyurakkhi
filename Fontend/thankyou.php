!doctype html>
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
  <title>welcome</title>
</head>

<Style>
    /* body {
	background: #e3f2fd;
	font-family: "Open Sans", sans-serif;
} */




    .foter {
        background: LightGray;
    }

    .text-reset {
        text-decoration: none;


    }

    h2 {
        color: #000;
        font-size: 26px;
        font-weight: 300;
        text-align: center;
        text-transform: uppercase;
        position: relative;
        margin: 30px 0 60px;
    }

    h2::after {
        content: "";
        width: 150px;
        position: absolute;
        margin: 0 auto;
        height: 5px;
        border-radius: 10px;
        background: #7ac400;
        left: 0;
        right: 20px;
        bottom: -10px;
    }
</Style>

<body>

<?php include('include/header.php'); ?>


    <!-- Content -->


    <div class="container mt-5 mb-5 ">
        <div class="row d-flex justify-content-center">
            <div class="col-auto">
                <img src="../img/Thankyou.png" class="img-fluid mb-3" width="200px" alt="Thankyou">
                <h4>Thanks for Shooping with us</h4>
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