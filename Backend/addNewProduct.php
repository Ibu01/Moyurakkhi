<?php
include('partials/head.php');
include('partials/navber.php');
include('partials/aside.php'); ?>

<!-- Main Display -->
<main class="mt-5 pt-3">
    <div class="container-fluid">
        <div class="row mt-2 mb-3 text-center fw-bold text-uppercase">
            <div class="col-md-12">
                <h4>Add Product</h4>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-10">
<!-- Form -->
        <?php include('components/addNewProductForm.php'); ?>
            </div>
        </div>
<!-- footer -->
        <?php include('partials/footer.php'); ?>
    </div>

</main>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>

<!-- Form Validition -->
<script>
(() => {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
            }

            form.classList.add('was-validated')
        }, false)
    })
})()
</script>


</body>

</html>