<?php
    for ($i = 5; $i < 16; $i++) {
        echo $i . "<br>";
    }
?>

<?php
    $number = 6;
    $factorial = 1;

    for ($i = 1; $i <= $number; $i++) {
        $factorial = $factorial * $i;
    }

    echo "Factorial of $number is $factorial";
?>


<?php
    for ($i = 0; $i < 9; $i++) {
        for ($j = 0; $j < $i; $j++) {
            echo "* ";
        }
        echo "<br>";
    }
?>

<?php
    echo "<br>";

    $units = 95;
    $cost = 0.0;

    if ($units >= 1 && $units <=50) {
        $cost = $units * 3.5;
    } else if ($units >= 51 && $units <=100) {
        $cost = $units * 4.0;
    } else if ($units >= 101 && $units <=250) {
        $cost = $units * 5.2;
    } else if ($units >= 251 ) {
        $cost = $units * 6.5;
    } else {
        echo "Invalid Input";
    }
    echo "Cost of $units units, Rs. $cost /=  ";
?>

<?php
    echo "<br><br>";

    $input = -9;
    if ($input == 0) {
        echo "zero";
    } else if($input > 0) {
        echo "positive number";
    } else {
        echo "negative number";
    }
?>

