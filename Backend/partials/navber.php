<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-info fixed-top">
        <div class="container-fluid">
            <!-- Menu bar Target button -->
            <button class="navbar-toggler me-3" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                <span class="navbar-toggler-icon" data-bs-target="#offcanvasExample"></span>
            </button>

            <a class="navbar-brand fw-bold text-uppercase me-auto" href="../Dashboard.html"><img
                    src="../Backend/assets/img/log.png" width="105px" alt="Logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <form class="d-flex ms-auto">
                    <div class="input-group my-2 my-lg-0">
                        <button class="btn btn-light" type="button" id="button-addon1"><i
                                class="bi bi-search"></i></button>
                        <input type="text" class="form-control" placeholder="Enter Keywords"
                            aria-label="Example text with button addon" aria-describedby="button-addon1">
                    </div>
                </form>

                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-circle-user fa-2x"></i>

                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#" ;><i class="fa-regular fa-user"></i>Profile</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-gear"></i>Account Settings</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item text-danger" href="#"><i
                                        class="fa-solid fa-arrow-right-from-bracket"></i>Log out</a></li>
                        </ul>
                    </li>

                </ul>

            </div>
        </div>
    </nav>
    <!-- Navbar end -->