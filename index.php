<?php

$today = date("F j, Y, g:i a");
$line = date('Y-m-d H:i:s') . " - $_SERVER[REMOTE_ADDR]"  . " - $_SERVER[REMOTE_HOST]" .  " - $_SERVER[REMOTE_USER]" . " - $_SERVER[HTTP_USER_AGENT]" . " - $_SERVER[SERVER_NAME]";
file_put_contents('visitors.log', $line . PHP_EOL, FILE_APPEND);
echo "$today"


//  echo "$data"
//file_put_contents("summary.txt", $today . "\t" . $_SERVER['REMOTE_ADDR'] . "\t" . $_SERVER['HTTP_USER_AGENT'] . "\n", FILE_APPEND);
//file_put_contents("full-data.txt", $data . "\n", FILE_APPEND);
//$message = $today . " - " . $_SERVER['REMOTE_ADDR'];
//mail('5105551212@tmomail.net', 'subject', $message);
?>
