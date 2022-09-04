<?php
$filename = "test.txt";
$file = fopen($filename, "w");
if (!$file) {
    echo "Error in opening file";
    exit();
}
fwrite($file, "This is a simple text to write a file");
fclose($file);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta charset="UTF-8">
    <title>Menu</title>
</head>
<body>
<?php
$filename = "test.txt";
$file = fopen($filename, "r");

if (!$file) {
    echo "Error in opening file";
    exit();
}

$filesize = filesize($filename);
$filetext = fread($file, $filesize);
fclose($file);

echo "File Size : " . $filesize . "bytes <br>";
echo "File Text : " . $filetext;

?>
</body>
</html>
