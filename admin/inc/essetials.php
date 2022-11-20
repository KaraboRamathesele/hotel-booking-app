<?php

//frontend purpose data

define('SITE_URL', '');
define('CAROUSEL_IMG_PATH', SITE_URL . 'images/carousel/');

//backend upload process needs this data

define('UPLOAD_IMAGE_PATH', $_SERVER['DOCUMENT_ROOT'] . '/hotelbookingapp/images.');
define('CAROUSEL_FOLDER', 'carousel/');


function adminLogin()
{
    session_start();
    if (!(isset($_SESSION['adminLogin']) && $_SESSION['adminLogin'  == true])) {
        echo "
        <script>window.location.href='index.php';</script>
    ";
    }
    session_regenerate_id(true);
}

function redirect($url)
{
    echo "
        <script>window.location.href='$url';</script>
    ";
}

function alert($type, $message)
{
    $bs_class = ($type == "success") ? "alert-success" : "alert-danger";
    echo <<<alert
                <div class="alert $bs_class alert-dismissible fade show" role="alert">
                    <strong>$message</strong> 
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            alert;
}
