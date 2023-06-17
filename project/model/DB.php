<?php

$DB_debug_mode = false;

$DB_user = "php";
$DB_pass = "123123$#@!";
$DB_name = "iami";

function check_connection($mysqli = null)
{
    global $DB_user, $DB_pass, $DB_name, $DB_debug_mode;

    if ($mysqli == null) {
        $con = mysqli_connect("localhost", $DB_user, $DB_pass, $DB_name);
        if (mysqli_connect_errno()) {
            throw new Exception("Failed to connect to MySQL: " . mysqli_connect_error(), 1);
        }
    } else {
        if ($mysqli->connect_errno) {
            throw new Exception("Failed to connect to MySQL: " . $mysqli->connect_error, 1);
        }
    }
}

function select_all($table, $cols = null)
{
    global $DB_user, $DB_pass, $DB_name, $DB_debug_mode;

    $mysqli = new mysqli("localhost", $DB_user, $DB_pass, $DB_name);

    check_connection($mysqli);

    $sql = null;

    if ($cols == null) {
        $sql = "SELECT * FROM `$table`";
    } else {
        $sql = "SELECT $cols FROM `$table`";
    }

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

        array_push($data, $temp);
    }

    // Free result set
    $result->free_result();

    $mysqli->close();
    return $data;
}

function select($table, $cols = null, $where = null)
{
    global $DB_user, $DB_pass, $DB_name, $DB_debug_mode;

    $mysqli = new mysqli("localhost", $DB_user, $DB_pass, $DB_name);

    check_connection($mysqli);

    $sql = null;

    if ($cols == null) {
        $sql = "SELECT * FROM `$table`";
    } else {
        $sql = "SELECT $cols FROM `$table`";
    }

    if ($where != null) {
        $sql .= " where " . $where;
    }

    if ($DB_debug_mode)
        echo $sql;

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

        array_push($data, $temp);
    }

    // Free result set
    $result->free_result();

    $mysqli->close();
    return $data;
}

function insert($table, $cols, $values)
{
    global $DB_user, $DB_pass, $DB_name, $DB_debug_mode;

    $con = mysqli_connect("localhost", $DB_user, $DB_pass, $DB_name);

    check_connection();

    $sql = "INSERT INTO ";

    if ($table != null && $table != "") {
        $sql .= "`$table` ";
    } else {
        throw new Exception("error tabble name", 1);
        
        //return "error tabble name";
    }

    if ($cols != null && $cols != "") {
        $sql .= "($cols) ";
    } else {
        throw new Exception("error cols name", 1);
        
        //return "error cols name";
    }

    if ($values != null && $values != "") {
        $sql .= "values ($values)";
    } else {
        throw new Exception("error values", 1);
        
        //return "error values";
    }

    if ($DB_debug_mode) {
        echo $sql;
        exit;
    }

    mysqli_query($con, $sql);
    $result = mysqli_affected_rows($con);

    mysqli_close($con);

    return $result;
}

function insert_by_array($table, $cols, $values)
{
    global $DB_user, $DB_pass, $DB_name, $DB_debug_mode;

    $con = mysqli_connect("localhost", $DB_user, $DB_pass, $DB_name);

    check_connection();

    $sql = "INSERT INTO ";

    if (count($cols) != count($values)) {
        throw new Exception("error cols and values not match", 1);
        
        // return "error cols and values not match";
    }

    if ($table != null && $table != "") {
        $sql .= "`$table` ";
    } else {
        throw new Exception("error tabble name", 1);
        
        // return "error tabble name";
    }

    if ($cols != null && $cols != "" && count($cols) >= 0) {
        $sql .= "(";
        for ($index = 0; $index < count($cols); $index++) {
            $sql .= "`" . $cols[$index] . "`";
            if ($index < count($cols) - 1) {
                $sql .= ",";
            }
        }
        $sql .= ")";
    } else {
        throw new Exception("error cols name", 1);
        
        // return "error cols name";
    }

    if ($values != null && $values != "" && count($values) >= 0) {
        $sql .= "values (";
        for ($index = 0; $index < count($values); $index++) {
            $sql .= $values[$index];
            if ($index < count($values) - 1) {
                $sql .= ",";
            }
        }
        $sql .= ")";
    } else {
        throw new Exception("error values", 1);
        
        // return "error values";
    }

    if ($DB_debug_mode) {
        echo $sql;
        exit;
    }

    mysqli_query($con, $sql);
    $result = mysqli_affected_rows($con);

    mysqli_close($con);

    return $result;
}

function update($table, $col_value, $where = null)
{
    // UPDATE `users` SET `username` = 'user4', `lastLogin` = NULL WHERE `users`.`username` = 'user2';

    global $DB_user, $DB_pass, $DB_name, $DB_debug_mode;

    $con = mysqli_connect("localhost", $DB_user, $DB_pass, $DB_name);

    check_connection();

    $sql = "UPDATE ";

    if ($table != null && $table != "") {
        $sql .= "`$table`";
    } else {
        throw new Exception("error table name", 1);
        
        // return "error table name";
    }

    $sql .= " SET ";

    if ($col_value != null && $col_value != "") {
        $sql .= $col_value;
    } else {
        throw new Exception("error col value", 1);
        
        // return "error col value";
    }

    if ($where != null && $where != "") {
        $sql .= " WHERE ";
        $sql .= $where;
    }

    if ($DB_debug_mode) {
        echo $sql;
        exit;
    }

    mysqli_query($con, $sql);
    $result = mysqli_affected_rows($con);

    mysqli_close($con);

    return $result;
}

function delete($table, $where = null)
{
    // DELETE FROM `users` WHERE 0

    global $DB_user, $DB_pass, $DB_name, $DB_debug_mode;

    $con = mysqli_connect("localhost", $DB_user, $DB_pass, $DB_name);

    check_connection();

    $sql = "DELETE FROM ";

    if ($table != null && $table != "") {
        $sql .= "`$table`";
    } else {
        throw new Exception("error table name", 1);
        
        // return "error table name";
    }

    if ($where != null && $where != "") {
        $sql .= " WHERE ";
        $sql .= $where;
    }

    if ($DB_debug_mode) {
        echo $sql;
        exit;
    }

    mysqli_query($con, $sql);
    $result = mysqli_affected_rows($con);

    mysqli_close($con);

    return $result;
}
