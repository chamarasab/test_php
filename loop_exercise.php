<?php
    for ($i = 5; $i >= 1; --$i) {
        for ($j = 1; $j <= $i; ++$j) {
            echo("* ");
        }
        echo("<br>");
    }
?>
<?php
    echo "<br> <br>";
?>


<?php
$rows = 5;
$k = 0;
for ($i = 0; $i <= $rows; $i++) {
    for ($j = 0; $j <= $rows - $i - 1; $j++) {
        echo("&nbsp;&nbsp;");
    }
    for ($k = 0; $k < 2 * $i + 1; $k++) {
        echo "*";
    }
    echo("<br>");
}
?>

