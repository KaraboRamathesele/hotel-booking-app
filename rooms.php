<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP Hotel Booking App - Rooms</title>
    <?php require('./inc/links.php'); ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
</head>

<body class="bg-light">

    <?php require('./inc/header.php');  ?>


    <!-- Rooms-->
    <div class="my-5 px-4">
        <h2 class="text-center fw-bold fs-2 text-uppercase h-font">Our Rooms</h2>
        <div class="h-line bg-dark"></div>
    </div>

    <div class="container">
        <div class="row">

            <div class="col-lg-3 col-md-12  mb-lg-0 mb-4">
                <nav class="navbar navbar-expand-lg bg-light bg-white rounded shadow">
                    <div class="container-fluid flex-lg-column align-item-stretch">
                        <h4 class="mt-4 h-font">FILTERS</h4>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse flex-column mt-2 align-items-strecth" id="filterDropdown">
                            <div class="border bg-light p-3 rounded mb-6">
                                <h5 class="mb-3 fs-6">CHECK AVAILABLE</h5>
                                <label class="form-label" style="">Check In</label>
                                <input type="date" class="form-control shadow-none mb-3">
                                <label class="form-label" style="">Check Out</label>
                                <input type="date" class="form-control shadow-none">
                            </div>
                            <div class="border bg-light p-3 rounded mb-6">
                                <h5 class="mb-3 fs-6">FACILITIES</h5>
                                <div class="mb-2">
                                    <input type="checkbox" id="f1" class="form-control form-check-input me-1 shadow-none mb-3">
                                    <label class="form-check-label" for="f1" style="">Facility 1</label>
                                </div>
                                <div class="mb-2">
                                    <input type="checkbox" id="f2" class="form-control form-check-input me-1 shadow-none mb-3">
                                    <label class="form-check-label" for="f2" style="">Facility 1</label>
                                </div>
                                <div class="mb-2">
                                    <input type="checkbox" id="f3" class="form-control form-check-input me-1 shadow-none mb-3">
                                    <label class="form-check-label" for="f3" style="">Facility 1</label>
                                </div>
                            </div>
                            <div class="border bg-light p-3 rounded mb-6">
                                <h5 class="mb-3 fs-6">GUESTS</h5>
                                <div>
                                    <label class="form-label">Adult</label>
                                    <input type="number" class="form-control shadow-none">
                                </div>
                                <div>
                                    <label class="form-label">Children</label>
                                    <input type="number" class="form-control shadow-none">
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>

            <div class="col-lg-9 col-md-12 px-4">
                <div class="card-body">
                    <h5>Standard Room</h5>
                    <p class="mb-4">ZAR1800 per night</p>
                    <div class="features mb-4">
                        <h6 class="mb-1">Features</h6>
                        <span class="badge rounded-pill text-dark bg-light text-wrap">
                            1 Large double bed
                        </span>
                        <span class="badge rounded-pill text-dark bg-light text-wrap">
                            1 Bathroom
                        </span>
                        <span class="badge rounded-pill text-dark bg-light text-wrap">
                            Balcony
                        </span>
                        <span class="badge rounded-pill text-dark bg-light text-wrap">
                            Beautifully decorated
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Footer -->

    <?php require('./inc/footer.php'); ?>



    <br>
    <br>



    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
</body>

</html>