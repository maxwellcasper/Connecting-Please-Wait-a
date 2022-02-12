<?php // trap for bad bots
	$htaccess = "/var/www/public_html/.htaccess"; // specify correct path to root .htaccess file
	$content  = "SetEnvIf Remote_Addr ^".str_replace(".","\.",$_SERVER["REMOTE_ADDR"])."$ goodbye\r\n";
	$content .= fread($handle, filesize($htaccess));
	$handle   = fopen($htaccess, 'r');
	fclose($handle);
	$handle = fopen($htaccess, 'w+');
	fwrite($handle, $content, strlen($content));
	fclose($handle);
	mail( // customize mail with your infos
	"admin@domain.tld", 
	"Another bad bot bites the dust..", 
	"Banned IP: "  . $_SERVER["REMOTE_ADDR"] . "\r\n" . 
	"User Agent: " . $_SERVER["HTTP_USER_AGENT"] . "\r\n" . 
	"Referrer: "   . $_SERVER["HTTP_REFERER"], 
	"From: good@old.days"
	);
	die("Sorry no access.");
?>