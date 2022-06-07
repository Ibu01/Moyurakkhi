<?php
include('partials/head.php');
include('partials/navber.php');
include('partials/aside.php'); ?>

<!-- Main Display -->
<main class="mt-5 pt-3">
    <div class="row mt-2 text-center fw-bold text-uppercase">
        <div class="col-md-12">
            <h4>Product</h4>
        </div>
    </div>
   <!-- Product Table -->
    <?php include('tables/allProductsTable.php'); ?>
    <hr class="dropdown-divider bg-dark" />
    <!-- footer -->
    <?php include('partials/footer.php'); ?>



</main>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>


</body>

</html>