<?php
include('partials/head.php');
include('partials/navber.php');
include('partials/aside.php'); ?>
<!-- Main Display -->
<main class="mt-5 pt-3">
    <div class="container-fluid">
        <h5 class="mt-5 mb-4 text-center">Edit Product</h5>

      <p><Strong>Name:</Strong> Urban Sneakers
          <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Edit
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="">
                        <label for="">Name</label>
                        <input type="text" placeholder="Enter Name">

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                    </div>
                </div>
                </div>
       </p>
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