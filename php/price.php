<?php

$name = isset($_POST['name'])? $_POST['name']:null; 
$mail = isset($_POST['email'])? $_POST['email']:null; 
$number = isset($_POST['number'])? $_POST['number']:null; 
$select = isset($_POST['select1'])? $_POST['select1']:null;
$cityDepartament = isset($_POST['cityDepartament'])? $_POST['cityDepartament']:null;
$contents = isset($_POST['contents'])? $_POST['contents']:null;
$weight = isset($_POST['weight'])? $_POST['weight']:null;
$height = isset($_POST['height'])? $_POST['height']:null;
$width= isset($_POST['width'])? $_POST['width']:null;
$long= isset($_POST['long'])? $_POST['long']:null;
$services= isset($_POST['services'])? $_POST['services']:null;
$imagen= isset($_FILES['imagen'])? $_FILES['imagen']:null;
$subject = 'Cotizacion';


if (isset($_GET['imagen'])){
    $sourcePath = $imagen['tmp_name'];
    $targetPath = '../assets/img/upload/'.$imagen['name'];
    move_uploaded_file($sourcePath,$targetPath);
}

    $headers = "From: webmaster@example.com" . "\r\n";
    $headers .= "Reply-To: webmaster@example.com". "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1".'X-Mailer: PHP/' . phpversion();

    $body='<!DOCTYPE html>
    <html lang="en">
      <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      </head>
      <body>
        <div
          style="
            border-radius: 2rem;
            width: 100%;
            border: 1px solid #dadce0;
            padding: 2rem 2rem;
            margin: 1.2rem 0;
          "
        >
          <div
            style="
              display: flex;
              justify-content: space-around;
              width: 100%;
              border: 1px solid #bdbdbd;
              border-radius: 2rem;
              font-weight: 600;
              background-color: #ff5f13;
              color: #fff;
              margin-bottom: 0.4em;
            "
          >
            <div style="font-size: 1.3rem; padding: 0.5rem; margin: 0 0 0 0.5rem">
              name
            </div>
            <div style="font-size: 1.3rem; padding: 0.5rem; margin: 0 0 0 0.5rem">
              Email
            </div>
            <div style="font-size: 1.3rem; padding: 0.5rem; margin: 0 0 0 0.5rem">
              Number
            </div>
          </div>
          <div
            style="
              display: flex;
              justify-content: space-around;
              width: 100%;
              border: 1px solid #bdbdbd;
              border-radius: 2rem;
            "
          >
            <div style="font-size: 1.3rem; padding: 0.5rem; margin: 0 0 0 0.5rem">
              '{$name}'
            </div>
            <div style="font-size: 1.3rem; padding: 0.5rem; margin: 0 0 0 0.5rem">
              '{$mail}'
            </div>
            <div style="font-size: 1.3rem; padding: 0.5rem; margin: 0 0 0 0.5rem">
              '{$number}'
            </div>
          </div>
        </div>
        <div
          style="
            border-radius: 2rem;
            width: 100%;
            border: 1px solid #dadce0;
            padding: 2rem 2rem;
            margin: 1.2rem 0;
          "
        >
          <div
            style="
              display: flex;
              justify-content: space-around;
              width: 100%;
              border: 1px solid #bdbdbd;
              border-radius: 2rem;
              font-weight: 600;
              background-color: #ff5f13;
              color: #fff;
              margin-bottom: 0.4em;
            "
          >
            <div style="font-size: 1.3rem; padding: 0.5rem; margin: 0 0 0 0.5rem">
              Tipo de Carga
            </div>
            <div style="font-size: 1.3rem; padding: 0.5rem; margin: 0 0 0 0.5rem">
              Cityo o Department
            </div>
          </div>
          <div
            style="
              display: flex;
              justify-content: space-around;
              width: 100%;
              border: 1px solid #bdbdbd;
              border-radius: 2rem;
            "
          >
            <div style="font-size: 1.3rem; padding: 0.5rem; margin: 0 0 0 0.5rem">
             '{$select}'
            </div>
            <div style="font-size: 1.3rem; padding: 0.5rem; margin: 0 0 0 0.5rem">
              '{$cityDepartament}'
            </div>
          </div>
        </div>
        <div
          style="
            border-radius: 2rem;
            width: 100%;
            border: 1px solid #dadce0;
            padding: 2rem 2rem;
            margin: 1.2rem 0;
          "
        >
          <div
            style="
              display: flex;
              justify-content: space-around;
              width: 100%;
              border: 1px solid #bdbdbd;
              border-radius: 2rem;
              font-weight: 600;
              background-color: #ff5f13;
              color: #fff;
              margin-bottom: 0.4em;
            "
          >
            <div style="font-size: 1.3rem; padding: 0.5rem; margin: 0 0 0 0.5rem">
              Contens
            </div>
            <div style="font-size: 1.3rem; padding: 0.5rem; margin: 0 0 0 0.5rem">
              Weight
            </div>
            <div style="font-size: 1.3rem; padding: 0.5rem; margin: 0 0 0 0.5rem">
              Height
            </div>
          </div>
          <div
            style="
              display: flex;
              justify-content: space-around;
              width: 100%;
              border: 1px solid #bdbdbd;
              border-radius: 2rem;
            "
          >
            <div style="font-size: 1.3rem; padding: 0.5rem; margin: 0 0 0 0.5rem">
              '{$contents}'
            </div>
            <div style="font-size: 1.3rem; padding: 0.5rem; margin: 0 0 0 0.5rem">
              '{$weight}'
            </div>
            <div style="font-size: 1.3rem; padding: 0.5rem; margin: 0 0 0 0.5rem">
              '{$height}'
            </div>
          </div>
        </div>
        <div
          style="
            border-radius: 2rem;
            width: 100%;
            border: 1px solid #dadce0;
            padding: 2rem 2rem;
            margin: 1.2rem 0;
          "
        >
          <div
            style="
              display: flex;
              justify-content: space-around;
              width: 100%;
              border: 1px solid #bdbdbd;
              background-color: #f5f5f5;
              border-radius: 2rem;
              font-weight: 600;
              background-color: #ff5e13;
              color: #fff;
              margin-bottom: 0.4em;
            "
          >
            <div style="font-size: 1.3rem; padding: 0.5rem; margin: 0 0 0 0.5rem">
              Width
            </div>
            <div style="font-size: 1.3rem; padding: 0.5rem; margin: 0 0 0 0.5rem">
              Long
            </div>
            <div style="font-size: 1.3rem; padding: 0.5rem; margin: 0 0 0 0.5rem">
              Extra Service
            </div>
          </div>
          <div
            style="
              display: flex;
              justify-content: space-around;
              width: 100%;
              border: 1px solid #bdbdbd;
              border-radius: 2rem;
            "
          >
            <div style="font-size: 1.3rem; padding: 0.5rem; margin: 0 0 0 0.5rem">
              '{$width}'
            </div>
            <div style="font-size: 1.3rem; padding: 0.5rem; margin: 0 0 0 0.5rem">
              '{$long}'
            </div>
            <div style="font-size: 1.3rem; padding: 0.5rem; margin: 0 0 0 0.5rem">
              '{$services}'
            </div>
          </div>
        </div>
        <div style="text-align: center">
          <img
            src="./assets/img/upload/sin-imagen.jpg"
            width="500px"
            height="500px"
          />
        </div>
      </body>
    </html>
    ';


    $to = "adanyur@gmail.com";
    $send = mail($to, $subject, $body, $headers);

?>