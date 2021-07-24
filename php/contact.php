<?php

    $from = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $subject = $_REQUEST['subject'];
    $cmessage = $_REQUEST['message'];
	
	$logo = 'https://'.$_SERVER["HTTP_HOST"].dirname(dirname($_SERVER["REQUEST_URI"])).'/assets/img/hero/h1_hero.jpg';
	$body='<!DOCTYPE html>
	<html lang="en">
	  <head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Document</title>
		<style type="text/css">
		  .table__border {
			width: 50%;
		  }
	
		  .img__container {
			width: 50%;
			height: 350px;
			padding: 2rem 1rem;
		  }
	
		  .img__background {
			background-image: url("https://misionya.com/clients/mrbedoya/catalogo/cargo1/assets/img/hero/h1_hero.jpg");
			background-size: cover;
			background-repeat: no-repeat;
			background-position: center center;
			height: 100%;
			width: 100%;
		  }
	
		  .container__text {
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-content: space-around;
			width: 50%;
			height: 100%;
		  }
	
		  .title__head {
			margin-bottom: 1.5rem;
		  }
	
		  .title__text,
		  .label__text,
		  .text__body,
		  h1 {
			color: #fff;
			font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
		  }
	
		  .title__text {
			font-size: 2rem;
			text-align: center;
			color: #f15f22;
			font-weight: 700;
		  }
	
		  .label__text {
			font-weight: 600;
		  }
	
		  .text__body {
			text-align: justify;
			color: #a4acc3;
		  }
		  span {
			color: #a4acc3;
			margin-left: 0.5rem;
		  }
		  .p__0 {
			padding: 1rem;
		  }
	
		  .pt__0 {
			padding: 0.5rem 1rem;
		  }
		</style>
	  </head>
	  <body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
		<table border="0" width="100%" cellpadding="0" cellspacing="0">
		  <tr>
			<td height="100"><div class="title__text">Contact Us</div></td>
		  </tr>
		  <tr>
			<td width="500">
			  <table
				align="center"
				cellpadding="0"
				cellspacing="0"
				class="table__border" cellpadding="0" cellspacing="0"
			  >
				<tr>
				  <td>
					<table class="img__background" cellpadding="0" cellspacing="0">
					  <tr>
						<td>
						  <table align="left" class="img__container">
							<tr>
							  <td class="label__text pt__0">
								Name: <span>'.$name.'</span>
							  </td>
							</tr>
							<tr>
							  <td class="label__text pt__0">
								Email: <span>'.$from.'</span>
							  </td>
							</tr>
							<tr>
							<td class="label__text pt__0">Comentario:</td>
						  </tr>
						  <tr>
							<td class="text__body pt__0">
							  '.$cmessage.'
							</td>
						  </tr>
						  </table>
						</td>
					  </tr>
					</table>
				  </td>
				</tr>
			  </table>
			</td>
		  </tr>
		</table>
	  </body>
	</html>
	
	
	';



	$headers = "From: webmaster@example.com" . "\r\n";
	$headers .= "Reply-To: webmaster@example.com". "\r\n";
	$headers .= 'Cc: adanyur@gmail.com' . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1".'X-Mailer: PHP/' . phpversion();
	$to = "marcosbedoya@gmail.com";

	$send = mail($to, $subject, $body, $headers);

?>