<?php

require('./essetials.php');

session_start();
session_destroy();
redirect('index.php');


// // Initialize the session
// session_start();

// $_SESSION = array();

// // Destroy the session.
// session_destroy();

// // Redirect to login page
// header("location: logout.php");
// exit;