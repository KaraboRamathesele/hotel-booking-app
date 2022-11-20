<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP Hotel Booking App - Home</title>
    <?php require('./inc/links.php'); ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
</head>

<body class="bg-light">

    <?php require('./inc/header.php');  ?>

    <!-- Carousel -->
    <div class="container-fluid px-lg-4 mt-4">
        <!-- Swiper -->
        <div class="swiper swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="./images/carousel/IMG_15372.png" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="./images/carousel/IMG_40905.png" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="./images/carousel/IMG_55677.png" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="./images/carousel/IMG_62045.png" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="./images/carousel/IMG_99736.png" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="./images/carousel/IMG_93127.png" class="w-100 d-block" />
                </div>
            </div>
        </div>
    </div>

    <!-- Availabilty Form -->
    <div class="container available">
        <div class="row">
            <div class="col-lg-12 bg-white shadow p-4 rounded">
                <h4 class="mb-4">Check Booking Availabilty</h4>
                <form>
                    <div class="row align-items-end">
                        <div class="col-lg-3">
                            <label class="form-label mt-2 fw-bold" style="">Check In</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3">
                            <label class="form-label mt-3 fw-bold" style="">Check Out</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3">
                            <label class="form-label mt-3 fw-bold" style="">Adult</label>
                            <select class="form-select shadow-none">

                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3 +</option>
                            </select>
                        </div>
                        <div class="col-lg-2">
                            <!-- 11th coloumn ** -->
                            <!-- Chidren -->
                            <label class="form-label mt-3 fw-bold">Children</label>
                            <select class="form-select shadow-none">

                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3 +</option>
                            </select>
                        </div>
                        <div class="col-lg-1 mb-lg-2 mt-3 ">
                            <button type="submit" class="btn btn-success shadow-none">Search</button>
                        </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Rooms-->
    <h4 class="mt-5 pt-4 mb-4 text-center fw-bold fs-2 text-uppercase h-font">Our Rooms</h4>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="./images/rooms/1.jpg" class="card-img-top">

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
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill text-dark bg-light text-wrap">
                                Wifi
                            </span>
                            <span class="badge rounded-pill text-dark bg-light text-wrap">
                                Television
                            </span>
                            <span class="badge rounded-pill text-dark bg-light text-wrap">
                                AC
                            </span>
                            <span class="badge rounded-pill text-dark bg-light text-wrap">
                                Room Heater
                            </span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-success btn-sm shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="./images/rooms/1.jpg" class="card-img-top">

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
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill text-dark bg-light text-wrap">
                                Wifi
                            </span>
                            <span class="badge rounded-pill text-dark bg-light text-wrap">
                                Television
                            </span>
                            <span class="badge rounded-pill text-dark bg-light text-wrap">
                                AC
                            </span>
                            <span class="badge rounded-pill text-dark bg-light text-wrap">
                                Room Heater
                            </span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-success btn-sm shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="./images/rooms/1.jpg" class="card-img-top">

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
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill text-dark bg-light text-wrap">
                                Wifi
                            </span>
                            <span class="badge rounded-pill text-dark bg-light text-wrap">
                                Television
                            </span>
                            <span class="badge rounded-pill text-dark bg-light text-wrap">
                                AC
                            </span>
                            <span class="badge rounded-pill text-dark bg-light text-wrap">
                                Room Heater
                            </span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-success btn-sm shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 text-center mt-5 ">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms >>></a>
            </div>
        </div>
    </div>

    <!-- Facilities -->
    <h4 class="mt-5 pt-4 mb-4 text-center fw-bold fs-2 text-uppercase h-font">Our Facilities</h4>

    <div class="container">
        <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="./images/facilities/IMG_43553.svg" width="80px" />
                <h5 class="mt-3">Wifi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="./images/facilities/IMG_41622.svg" width="80px" />
                <h5 class="mt-3">Movie Cinema</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="./images/facilities/IMG_96423.svg" width="80px" />
                <h5 class="mt-3">Ventilation</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="./images/facilities/IMG_27079.svg" width="80px" />
                <h5 class="mt-3">Heating System</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="./images/facilities/IMG_47816.svg" width="80px" />
                <h5 class="mt-3">Relaxtion Centre</h5>
            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities >>></a>
            </div>
        </div>
    </div>


    <!-- Embedded Map --->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">REACH US</h2>

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 bg-white rounded">
                <iframe class="w-100 rounded" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14326.48878298473!2d28.031040637315918!3d-26.143858736729246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e950c92f2c40d13%3A0x7463dc372a25eb5d!2sRosebank%2C%20Johannesburg%2C%202196!5e0!3m2!1sen!2sza!4v1668952413925!5m2!1sen!2sza" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="bg-white p-4 rounded mb-4">
                    <h5>
                        Call Us
                    </h5>
                    <a href="tel: +4822432490" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i>+4822432490</a>
                </div>
                <div class="bg-white p-4 rounded mb-4">
                    <h5>Address:</h5>
                    <a href="text" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <p>
                            Street: 1070 Broad Rd

                            City: Krugersdorp

                            State/province/area: Gauteng

                            Phone number 085 969 4778

                            Zip code 1933

                            Country calling code +27

                            Country South Africa
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->

    <?php require('./inc/footer.php'); ?>



    <br>
    <br>



    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".swiper-container", {
            spaceBetween: 30,
            effect: "fade",
            // clickable: true,
            loop: true,
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
            }
        });
    </script>
</body>

</html>