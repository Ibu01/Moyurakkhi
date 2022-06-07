<?php
include('partials/head.php');
include('partials/navber.php');
include('partials/aside.php'); ?>
<!-- Main Display -->
<main class="mt-5 pt-3">
    <div class="container-fluid">
        <h5 class="mt-5 mb-4 text-center">Customer</h5>

        <?php include('tables/allCustomerTable.php'); ?>
    <hr class="dropdown-divider bg-dark" />
    <!-- footer -->
    <?php include('partials/footer.php'); ?>
    </div>




<!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>


    </body>

    </html>