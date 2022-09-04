<?php include 'connection.php'?>

<?php
$connection = mysqli_connect('localhost', 'root', '', 'bank');

$post_data = array();
$post_data['id'] = $_POST['txtId'];;
$post_data['customer_name'] = $_POST['txtName'];
$post_data['age'] = $_POST['txtAge'];
$post_data['address'] = $_POST['txtAddress'];
$post_data['salary'] = $_POST['txtSalary'];

$sql = "INSERT INTO customers (id, customer_name, age, address, salary) VALUES ('" . $post_data['id'] . "','" . $post_data['customer_name'] . "','" . $post_data['age'] . "','" . $post_data['address'] . "','" . $post_data['salary'] . "')";
$result = mysqli_query($connection, $sql);

if ($result) {
    echo "<div class='alert alert-success'>Customer registered successfully</div>";
    header("location: /test/customer.php");
} else {
    echo "<div class='alert alert-danger'>Oops... Something went wrong!</div>";
}

$_POST = array();

?>