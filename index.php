<?php
$today = date("F j, Y, g:i a");
$line = date('Y-m-d H:i:s') . " - $_SERVER[REMOTE_ADDR]"  . " - $_SERVER[REMOTE_HOST]" .  " - $_SERVER[REMOTE_USER]" . " - $_SERVER[HTTP_USER_AGENT]" . " - $_SERVER[SERVER_NAME]";
file_put_contents('visitors.log', $line . PHP_EOL, FILE_APPEND);
//https://shop.hak5.org/blogs/news/what-is-the-best-security-awareness-payload-for-the-rubber-ducky
?>
<html><head><meta charset="UTF-8" />
<meta http-equiv="refresh" content="1;url=https://www.us-cert.gov/ncas/tips/ST08-001" />
<script type="text/javascript">window.location.href = "https://www.us-cert.gov/ncas/tips/ST08-001"</script>
<title>Page Redirection</title></head>
<body>If you are not redirected automatically, follow the <a href="https://www.us-cert.gov/ncas/tips/ST08-001">link</a>.</body></html>
