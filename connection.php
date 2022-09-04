<?php
$connection = mysqli_connect('localhost', 'root', '', 'bank');

if (mysqli_connect_errno()) {
    die('Database Connection Failed' . mysqli_connect_errno());
} else {
    //echo "Connection Success!";
    $query = "SELECT * FROM customers ";
    $result = mysqli_query($connection, $query);
}

?>