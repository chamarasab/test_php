<?php
    /*function division($numerator, $denominator): void
    {
        if ($denominator == 0) {
            echo "Cannot divide by zero <br>";
        } else {
            echo $numerator / $denominator . "<br>";
        }
    }

    division(7, 0);
    */
?>

<?php
    /*
    if (file_exists("mytestfile.txt")) {
        $file = fopen("mytestfile.txt", "r");
    } else {
        die("Error: The file does not exist.");
    }
    */
?>

<?php
/**
 * @throws Exception
 */
function division2($numerator, $denominator): void
{
    //if ($denominator == 0) {
    //    throw new Exception("Cannot divide by zero");
    //} else {
        echo $numerator / $denominator ;
    //}
}

try {
    division2(7, 0);
} catch (Exception $e) {
    echo $e;
}


?>
