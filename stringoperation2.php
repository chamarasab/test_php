<?php
    $str = "Hello World!";
    echo $str . "<br>";
    echo trim($str,"\t\n\r\0\x0B");
    echo "<br><br><br><br><br><br><br>"
?>
<?php
    $str = "This is some <b>bold</b> text.";
    echo htmlspecialchars($str);
    echo "<br><br><br><br><br><br>"
?>
<?php
    if (str_starts_with('PHP', 'P')) {
        echo "Started with 'P'";
    }
    echo "<br><br><br><br><br><br><br>"
?>
<?php
    if (str_ends_with('PHP', 'I')) {
        echo "End with 'P'";
    } else {
        echo "Not end with 'I'";
    }
    echo "<br><br><br><br><br>"
?>
<?php
    $str = "Hello World!";
    echo $str . "<br>";
    echo strtolower($str);
    echo "<br><br><br><br><br><br><br>"
?>
<?php
    $str = "Hello World!";
    echo $str . "<br>";
    echo strtoupper($str);
    echo "<br><br><br><br><br><br><br>"
?>
<?php
    $str = "hello world!";
    echo $str . "<br>";
    echo ucfirst($str);
    echo "<br><br><br><br><br><br><br>"
?>
<?php
    $str = "hello world!";
    echo $str . "<br>";
    echo ucwords($str);
    echo "<br><br><br><br><br><br><br>"
?>
