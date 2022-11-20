<?php
require('./admin/inc/essetials.php');
adminLogin();

//Backend

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Dashboard</title>
    <?php require('.inc/links.php'); ?>
</head>

<body class="bg-light">

    <div class="container-fluid bg-dark text-light p-3 d-flex sticky-top justify-content-between">
        <h3 class="mb-0">ELAINE'S HOTEL</h3>
        <a href="logout.php" class="btn btn-light btn-sm">LOG OUT</a>
    </div>

    <div class="col-lg-2 bg-dark border border-3 border-secondary" id="dashboard-menu">
        <nav class="navbar navbar-expand-lg bg-light bg-white rounded shadow">
            <div class="container-fluid flex-lg-column align-item-stretch">
                <h4 class="mt-4 h-font">ADMIN PANEL</h4>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#adminDropdown">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse flex-column mt-2 align-items-strecth" id="adminDropdown">
                    <ul class="nav nav-pills flex-column">

                        <li class="nav-item">
                            <a class="nav-link" href="dashboard.php">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="rooms.php">Rooms</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="features_facilities.php">Features & Facilities</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="carousel.php">Carousel</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="settings.php">Settings</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                lorem
            </div>
        </div>
    </div>

    <?php require('inc/scripts.php'); ?>
</body>

</html>