<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP Hotel Booking App - Facilities</title>
    <?php require('./inc/links.php'); ?>

    <style>
        .pop:hover {
            transform: scale(1.03);
            transition: all 0.3s;
        }
    </style>
</head>

<body class="bg-light">

    <?php require('./inc/header.php');  ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center text-uppercase ">Our Facilities</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
            <span class="fw-bold text-secondary h-font">Elaine's Grand Hotel</span> features air-conditioned rooms with flat-screen TV.<br>
            Among the facilities of this property are a restaurant,
            a 24-hour front desk and room service, along with free WiFi throughout the property.
        </p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex align-items-center mb-2">
                        <img src="./images/facilities/IMG_43553.svg" width="40px" />
                        <h5 class="m-0 ms-3"> Wifi</h5>
                    </div>
                    <p>
                        WiFi is available in all areas and is free of charge.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex align-items-center mb-2">
                        <img src="./images/facilities/IMG_49949.svg" width="40px" />
                        <h5 class="m-0 ms-3"> Ventilation </h5>
                    </div>
                    <p>
                        making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex align-items-center mb-2">
                        <img src="./images/facilities/IMG_27079.svg" width="40px" />
                        <h5 class="m-0 ms-3"> Heating</h5>
                    </div>
                    <p>
                        making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex align-items-center mb-2">
                        <img src="./images/facilities/IMG_41622.svg" width="40px" />
                        <h5 class="m-0 ms-3"> Movie Cinema </h5>
                    </div>
                    <p>
                        making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex align-items-center mb-2">
                        <img src="./images/facilities/IMG_96423.svg" width="40px" />
                        <h5 class="m-0 ms-3">TV sets</h5>
                    </div>
                    <p>
                        making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex align-items-center mb-2">
                        <img src="./images/facilities/IMG_47816.svg" width="40px" />
                        <h5 class="m-0 ms-3"> Spa </h5>
                    </div>
                    <p>
                        making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default
                    </p>
                </div>
            </div>
        </div>

    </div>

    <?php require('./inc/footer.php'); ?>

</body>

</html>