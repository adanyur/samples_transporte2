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
			/* border-radius: 2rem; */
			/* border: 1px solid #dadce0; */
			border: 1px solid #e1ebf7;
			/* border: 1px solid #f15f22; */
			width: 50%;
		  }
	
		  .img__ {
			opacity: 0.5;
		  }
		  .mr {
			margin-right: 2rem;
		  }
	
		  .title__ {
			text-align: left;
			color: #2c234d;
		  }
	
		  .title__right {
			text-align: right;
			/* color: #64676c; */
			color: #57667e;
		  }
	
		  .title__,
		  .title__right {
			padding: 0.2rem;
			font-size: 1em;
			font-family: Arial, Helvetica, sans-serif;
		  }
	
		  .container__table {
			display: flex;
			justify-content: space-around;
		  }
		  /**/
		  .img__container {
			width: 100%;
			height: 350px;
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
			padding: 0.5rem;
		  }
	
		  .title__coment {
			/* border: 1px solid red; */
		  }
	
		  .p__0 {
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
				class="table__border"
			  >
				<tr>
				  <td class="container__table">
					<div class="img__container">
					  <div class="img__background">
						<div class="container__text">
						  <div class="title__head">
							<div class="label__text p__0">Name: <span>'.$name.'</span></div>
							<div class="label__text p__0">Email: <span>'.$from.'<span></div>
						  </div>
						  <div class="title__coment">
							<div class="label__text p__0">Comentario</div>
							<div class="text__body p__0">
							  '.$cmessage.'
							</div>
						  </div>
						</div>
					  </div>
					</div>
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