<?php
include('partials/head.php');
include('partials/navber.php');
include('partials/aside.php'); ?>
<!-- Main Display -->
<main class="mt-5 pt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h4 class="mt-5">Dashboard</h4>
            </div>
        </div>

<!-- Score Board -->
        <div class="row">
            <?php
            include ('components/revenueScore.php');
            include ('components/newCustomerScore.php');
            include ('components/visitedScore.php');
            include ('components/repeatedCustomerScore.php');
            ?>
        </div>

<!-- Charts -->
        <div class="row">
        <?php
            include ('components/salesChart.php');
            include ('components/areaSalesChart.php');
        ?>
        </div>
        <?php include('tables/orderTable.php'); ?>

        <hr class="dropdown-divider bg-dark" />
        <?php include('partials/footer.php'); ?>
    </div>
</main>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>


</body>

</html>