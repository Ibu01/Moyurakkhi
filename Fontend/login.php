<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
        integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Font Awesome icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <!-- Home page CSS -->
    <link rel="stylesheet" href="../style/home.css">
    <title>Log in</title>
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


    <h2 class="text-center mt-5 mb-3">Log in</h2>

    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">

            <p class="mb-3 text-center">If you have an account, sign in with your email address.</p>
            <form>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label mb-3">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label mb-3">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="d-grid gap-2">
                    <button class="btn btn-primary" type="button">LOGIN</button>
                </div>
                <p class="mt-3 btn">Forgot your password</p>
                <p class="text-center">Or,login with</p>
                <div class="row">
                    <div class="col-6">
                        <img class="w-100" src="../img/gogo.png" alt="">
                    </div>
                    <div class="col-6">
                        <img class="w-100" src="/img/fbc.png" alt="">
                    </div>
                </div>
                <div class="d-grid gap-2 mt-5 mb-5 justify-content-center align-items-center">
                    <P class="text-center">Don't have any account ?</P>
                    <a href="signUp.php"><button class="btn btn-primary btn-lg" type="button">CREATE AN
                            ACCOUNT</button></a>
                </div>
            </form>
        </div>
        <div class="col-3"></div>
    </div>
    <!-- login form end here -->



    <?php include('include/footer.php'); ?>







    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>



</body>

</html>