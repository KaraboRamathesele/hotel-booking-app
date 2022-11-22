<?php

$hname = 'localhost';
$uname = 'root';
$pass = 'root';
$db = 'hotelbookingapp';

// Creates connection
$conn = new mysqli($hname, $uname, $pass, $db);


//Checks Connection
if (!$conn->connect_error) {
    die("Cannot connect to the database" . $conn->connect_error);
}
echo "Connected successfully";



function filteration($data)
{
    foreach ($data as $key => $value) {
        // 'site_title' : 'hotelbookingapp'
        $data[$key] = trim($value);
        $data[$key] = stripslashes($value);
        $data[$key] = htmlspecialchars($value);
        $data[$key] = strip_tags($value);
    }
    return $data;
}

function select($sql, $values, $datatypes)
{
    $con = $GLOBALS['con'];
    if ($stmt = mysqli_prepare($con, $sql)) {
        mysqli_stmt_bind_param($stmt, $datatypes, ...$values); //splat
        if (mysqli_stmt_execute($stmt)) {
            $res = mysqli_stmt_get_result($stmt);
            mysqli_stmt_close($stmt);
            return $res;
        } else {
            mysqli_stmt_close($stmt);
            die("Query cannot be executed - Select");
        }
    } else {
        die("Query cannot be executed - Select");
    }
}


function update($sql, $values, $datatypes)
{
    $con = $GLOBALS['con'];
    if ($stmt = mysqli_prepare($con, $sql)) {
        mysqli_stmt_bind_param($stmt, $datatypes, ...$values); //splat
        if (mysqli_stmt_execute($stmt)) {
            $res = mysqli_stmt_affected_rows($stmt);
            mysqli_stmt_close($stmt);
            return $res;
        } else {
            mysqli_stmt_close($stmt);
            die("Query cannot be executed - Update");
        }
    } else {
        die("Query cannot be executed - Update");
    }
}
