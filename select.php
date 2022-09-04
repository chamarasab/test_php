<?php
$connection = mysqli_connect('localhost', 'root', '', 'bank');
$sql = "SELECT id, customer_name,address FROM customers";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "id : " . $row["id"] . " Name : " . $row["customer_name"] .
            " Address : " . $row["address"] . " | ";
    }
} else {
    echo "0 results";
}