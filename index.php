<?php
$sum = 0;
$result = "";
$date = date("D");
$dateStatement = "";
$resultCase = "";
$counter = 0;
$name = "";

if (isset($_POST['Submit'])) {
    $firstnumber = $_POST['txtFirstNumber'];
    $secondnumber = $_POST['txtSecondNumber'];
    $sum = $firstnumber + $secondnumber;
}

if (isset($_POST['Submit2'])) {
    $name = $_POST['txtName'];
    if ($name == "John") {
        $result = "Hello John";
    } else {
        $result = "You're not John";
    }
}

if ($date == "Fri") {
    $dateStatement = "Have a nice Friday ";
} else if ($date == "Sun") {
    $dateStatement = "Have a nice Sunday";
} else {
    $dateStatement = "Have a nice day";
}

if (isset($_POST['Submit3'])) {
    $inputNumber = $_POST['txtInputNumber'];
    switch ($inputNumber) {
        case 1:
            $resultCase = "Number 1";
            break;
        case 2:
            $resultCase = "Number 2";
            break;
        case 3:
            $resultCase = "Number 3";
            break;
        default :
            $resultCase = "No Number Between 3";
    }
}

if (isset($_POST['Submit4'])) {
    $counter = $_POST['txtCounter'];
}

if (isset($_POST['Submit5'])) {
    $name = $_POST['txtName'];
}

function showMyName($n)
{
    return "My name is " . $n;
}

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
            crossorigin="anonymous"></script>
    <title>Php Test</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Calling function by passing value
                </div>
                <div class="card-body">
                    <?php echo showMyName("Chamara"); ?>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>