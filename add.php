<?php
$file = fopen('list.txt','a');
fwrite($file, $_POST['newitem'] . "\n");
fclose($file);
header('location: /index.php');
die();