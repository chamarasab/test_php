<?php
    //string length
    $name = "Chamara";
    echo "string length : " . strlen($name) . "<br><br><br><br><br><br><br>";
?>
<?php
    //extract first three letters
    echo "first three letters : " . substr($name, 0, 3) . "<br><br><br><br><br><br><br>";
?>
<?php
    //search for sub string
    $pos = strpos($name, "r");
    if ($pos === false) {
        echo "'ra' was not found in the string '$name'";
    } else {
        echo "The string 'ra' was found in the string '$name' <br>";
        echo " and exists at position $pos <br><br><br><br>";
    }
?>
<?php
    echo str_replace("ra","RA <br><br>",$name);
?>
<?php
    $arr = array('Chamara','Priyadarshana','Ekanayake');
    echo implode(" ",$arr);
    echo "<br><br><br><br>"
?>
<?php
    $str = "Chamara Priyadarshana Ekanayake";
    print_r (explode(" ",$str));
?>

