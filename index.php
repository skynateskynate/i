<?php

$monUrl = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$add = $_SERVER['REMOTE_ADDR'];

$date = date("d-m-Y");
$heure = date("H:i");

$file = 'logs.php';
$current = file_get_contents($file);

$current .= "

<td>$date</td>
<td>$heure</td>
<td>$add</td>
<td>$monUrl</td>
";

file_put_contents($file, $current);