<?php

$DB_user = "php";
$DB_pass = "123123$#@!";
$DB_name = "iami";

$DB_debug_mode = false;

function check_connection($mysqli = null)
{
    global $DB_user, $DB_pass, $DB_name, $DB_debug_mode;

    if ($mysqli == null) {
        $con = mysqli_connect("localhost", $DB_user, $DB_pass, $DB_name);
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            exit();
        }
    } else {
        if ($mysqli->connect_errno) {
            echo "Failed to connect to MySQL: " . $mysqli->connect_error;
            exit();
        }
    }
}

function select_all($table)
{
    global $DB_user, $DB_pass, $DB_name, $DB_debug_mode;

    $mysqli = new mysqli("localhost", $DB_user, $DB_pass, $DB_name);

    check_connection($mysqli);

    $sql = "SELECT * FROM `$table`";
    $result = $mysqli->query($sql);

    // Fetch all
    $result->fetch_all(MYSQLI_ASSOC);

    $data = array();

    if ($DB_debug_mode)
        echo $result->num_rows;


    $row_count = $result->num_rows;
    // Free result set
    $result->free_result();

    $result = $mysqli->query($sql);

    for ($index = 0; $index < $result->num_rows; $index++) {
        $temp =  $result->fetch_array(MYSQLI_ASSOC);
        if ($DB_debug_mode)
            print_r($temp);

        array_push($data,$temp);
    }

    $result->free_result();

    $mysqli->close();
    return $data;
}
