<?php
//include ('log-ip.php')
$today = date("F j, Y, g:i a");

$line = date('Y-m-d H:i:s') . " - $_SERVER[REMOTE_ADDR]";
//file_put_contents('visitors.log', $line . PHP_EOL, FILE_APPEND);

echo $line
//$data = json_encode(array("headers" =&amp;amp;gt; getallheaders());
                          //, "server" =&amp;amp;gt; $_SERVER, "request" =&amp;amp;gt; $_REQUEST));
echo "$today"
//  echo "$data"
//file_put_contents("summary.txt", $today . "\t" . $_SERVER['REMOTE_ADDR'] . "\t" . $_SERVER['HTTP_USER_AGENT'] . "\n", FILE_APPEND);
//file_put_contents("full-data.txt", $data . "\n", FILE_APPEND);
//$message = $today . " - " . $_SERVER['REMOTE_ADDR'];
//mail('5105551212@tmomail.net', 'subject', $message);
?>
