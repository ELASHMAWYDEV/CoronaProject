<?php
// $date = date("h:m");

// date_default_timezone_set("Africa/Cairo");

// $mktime = mktime();

// echo $mktime;

$file = fopen('test.txt','r');

echo fread($file,filesize('test.txt'));

?>