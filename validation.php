

<?php
    $name_error = "";
    $email_error = "";
    $success = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];

        //check empty
        if ($name == "") {
            $name_error = "Name cannot be empty";
        } elseif ($email == "") {
            $email_error = "Email cannot be empty";
        } else {
            $success = "Data submit success";
        }
    }
?>
<?php include "formvalidation.html"; ?>