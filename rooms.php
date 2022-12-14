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

    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-3 col-md-12  mb-lg-0 mb-4 ps-4">
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
                                    <label class="form-check-label" for="f1" style="">Heating</label>
                                </div>
                                <div class="mb-2">
                                    <input type="checkbox" id="f2" class="form-control form-check-input me-1 shadow-none mb-3">
                                    <label class="form-check-label" for="f2" style="">Spa</label>
                                </div>
                                <div class="mb-2">
                                    <input type="checkbox" id="f3" class="form-control form-check-input me-1 shadow-none mb-3">
                                    <label class="form-check-label" for="f3" style="">Extra sheets</label>
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

                <?php
                $room_res = select("SELECT * FROM `rooms` WHERE `status` =? AND `removed` =?", [1, 0], 'ii');

                while ($room_data = mysqli_fetch_assoc($room_res)) {
                    // get features of room 

                    $fea_q = mysqli_query($conn, "SELECT f.name FROM  `features` f 
                  INNER JOIN room_features rfea ON f.id = rfea.features_id
                  WHERE rfea.room_id = '$room_data[i]'");

                    $features_data = "";
                    while ($fea_row = mysqli_fetch_assoc($fea_q)) {
                        $features_data .= "<span class='badge rounded-pill bg-light text-dark text-wrap'>    
                        $fea_row[name]
                        </span>";
                    }


                    // facilities 

                    $fac_q = mysqli_query("SELECT f.name FROM `roomfacilities` f
                        INNER JOIN 'room_facilities' rfac.faclities_id
                        WHERE rfac.room_id = '$room_data[id]'");


                    $facilities_data = "";
                        while ($fac_row = mysqli_fetch_assoc($fac_q)) {
                            $facilities_data .= "<span class='badge rounded-pill bg-light text-dark text-wrap'>    
                            $fac_row[name]
                        </span>";
                    }

                    // get thumbnail 

                    $room_thumb = ROOMS_IMG_PATH. "thumbnail.jpg";
                    $thumb_q = mysqli_query($conn,"SELECT * FROM 'room_images' 
                    WHERE 'room_id'='$room_data[id]' 
                    AND `thumb` = '1'");
                      // in image database

                    if(mysqli_num_rows( $thumb_q)>0){
                        $thumb_res = mysqli_fetch_assoc(thumb_q);
                        $room_thumb = ROOMS_IMG_PATH.$thumb_res['image'];
                    }

                    //print room 

                echo <<<data 

                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                            <img src="$room_thumb" class="img-fluid rounded" />
                        </div>
                        <div class="card-body col-md-5 px-lg-3 px-md px-0">
                            <h5>$room_data[name]</h5>
                            <p class="mb-4">ZAR1800 per night</p>
                            <div class="features mb-3">
                                <h6 class="mb-1">Features</h6>
                                $features_data
                            </div>
                            <div class="facilities mb-3">
                                <h6 class="mb-1">Facilities</h6>
                                    $facilities_data
                            </div>
                        </div>
                    </div>
                </div>

                data;
                
                ?>
                

            </div>
            <!-- Sample/ Static-->



            <?php
            $room_res = select("SELECT * FROM `rooms` WHERE `status` =? AND `removed` =? ", [1, 0], 'ii');

            while ($room_data = mysqli_fetch_assoc($room_res)) {
                //get room facilities
                $fac_q = mysqli_query($con, "SELECT f.name FROM `facilities` f
                     INNER JOIN `room_facilities` rfac  ON f.id = rfac.facilities_id
                     WHERE rfac.room_id = '$room_data[id]'");

                $facilities_data = "";
                while ($fac_row = mysqli_fetch_assoc($fac_q)) {
                    $facilities_data = "<span class=`badge rounded-pill bg-light text-wrap`>
                      $fac_row[name]
                    </span>";
                }
            }

            //image?

            // print out the room 

            // echo <<<data


            // data;

            ?>

        </div>
    </div>
    </div>



    <!-- Footer -->

    <?php require('./inc/footer.php'); ?>


    <!-- <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script> -->
</body>

</html>