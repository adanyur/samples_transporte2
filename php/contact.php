<?php

    $from = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $subject = $_REQUEST['subject'];
    $cmessage = $_REQUEST['message'];
	
	$logo = 'https://'.$_SERVER["HTTP_HOST"].dirname(dirname($_SERVER["REQUEST_URI"])).'/assets/img/hero/h1_hero.jpg';
    $link = '#';
	$body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Express Mail</title></head><body>";
	$body .= "<table style='width: 100%;'>";
	$body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
	$body .= "<a href='{$link}'><img src='{$logo}' style='width: 100%;' alt=''></a><br><br>";
	$body .= "</td></tr></thead><tbody>";
	$body .= "<tr><td colspan='2' style='border:none;'><strong>Asunto:</strong> {$subject}</td></tr>";
	$body .= "<tr><td style='border:none;'><strong>Name:</strong> {$name}</td>";
	$body .= "<td style='border:none;'><strong>Email:</strong> {$from}</td></tr>";	
	$body .= "<tr><td></td></tr>";
	$body .= "<tr><td colspan='2' style='border:none;'>{$cmessage}</td></tr>";
	$body .= "</tbody></table>";
	$body .= "</body></html>";


	$headers = "From: webmaster@example.com" . "\r\n";
	$headers .= "Reply-To: webmaster@example.com". "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1".'X-Mailer: PHP/' . phpversion();


	$to = "adanyur@gmail.com";
    $send = mail($to, $subject, $body, $headers);




?>