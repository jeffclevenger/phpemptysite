<?php
$today = date("F j, Y, g:i a");
$data = json_encode(array("headers" =&amp;amp;gt; getallheaders(), "server" =&amp;amp;gt; $_SERVER, "request" =&amp;amp;gt; $_REQUEST));
echo $today
//file_put_contents("summary.txt", $today . "\t" . $_SERVER['REMOTE_ADDR'] . "\t" . $_SERVER['HTTP_USER_AGENT'] . "\n", FILE_APPEND);
//file_put_contents("full-data.txt", $data . "\n", FILE_APPEND);
//$message = $today . " - " . $_SERVER['REMOTE_ADDR'];
//mail('5105551212@tmomail.net', 'subject', $message);
?>
