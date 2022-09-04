<?php
for ($i = 0; $i <= 5; $i++) {
    for ($j = 5 - $i; $j >= 1; $j--) {
        echo "* ";
    }
    echo "<br>";
}
?>

<?php
$size = 5;
for ($i = 0; $i < $size; $i++) {
    for ($j = 0; $j < $size - $i - 1; $j++) {
        echo "&nbsp;&nbsp;";
    }
    for ($k = 0; $k < 2 * $i + 1; $k++) {
        echo "*";
    }

    echo "<br>";
}

echo "<br>";
?>

<?php
    function Reverse($str)
    {
        return strrev($str);
    }

    $str = "Sabaragamuwa";
    echo Reverse($str);

    echo "<br>";
?>


<?php
echo strlen("Sabaragamuwa");

echo "<br>";
?>

<?php
echo str_word_count("Sabaragamuwa University of Sri Lanka");

echo "<br>";
?>

<?php
echo strtoupper("Sabaragamuwa University of Sri Lanka");

echo "<br>";
?>

<?php include "table.html"; ?>

