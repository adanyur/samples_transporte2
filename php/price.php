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

$img_url='';
if (isset($_FILES['imagen'])){
    $sourcePath = $imagen['tmp_name'];
    $targetPath = '../assets/img/upload/'.$imagen['name'];
    move_uploaded_file($sourcePath,$targetPath);
   $img_url="https://misionya.com/clients/mrbedoya/catalogo/cargo1/assets/img/upload/".$imagen['name'];
}else{

   $img_url="https://misionya.com/clients/mrbedoya/catalogo/cargo1/assets/img/upload/sin-imagen.jpg";
}


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
            /*opacity: 0.5;*/
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
            font-size: 1.2em;
            font-family: Arial, Helvetica, sans-serif;
          }
    
          .container__table {
            display: flex;
            justify-content: space-around;
          }
        </style>
      </head>
      <body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
        <table border="0" width="100%" cellpadding="0" cellspacing="0">
          <tr>
            <td height="100">
              <table align="center">
                <tr>
                  <th><h1 style="color: #2c234d">Quote</h1></th>
                </tr>
              </table>
            </td>
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
                  <td style="padding: 2rem" class="container__table">
                    <table border="0" cellpadding="0" cellspacing="0" class="mr">
                      <tr>
                        <td>
                          <img
                            width="280px"
                            height="280px"
                            class="img__"
                            src="'.$img_url.'"
                          />
                        </td>
                      </tr>
                    </table>
                    <table>
                      <tr>
                        <td>&nbsp;</td>
                      </tr>
                    </table>
                    <table border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td>
                          <table
                            border="0"
                            width="100%"
                            cellpadding="0"
                            cellspacing="0"
                          >
                            <tr>
                              <th class="title__">Name</th>
                              <td class="title__right">'.$name.'</td>
                            </tr>
                            <tr>
                              <th class="title__">Email</th>
                              <td class="title__right">'.$mail.'</td>
                            </tr>
                            <tr>
                              <th class="title__">Number</th>
                              <td class="title__right">'.$number.'</td>
                            </tr>
                            <tr>
                              <th class="title__">City</th>
                              <td class="title__right">'.$cityDepartament.'</td>
                            </tr>
                            <tr>
                              <td colspan="2">&nbsp;</td>
                            </tr>
                            <tr>
                              <th class="title__">Contens</th>
                              <td class="title__right">'.$contents.'</td>
                            </tr>
                            <tr>
                              <th class="title__">Weight</th>
                              <td class="title__right">'.$weight.'</td>
                            </tr>
                            <tr>
                              <th class="title__">Height</th>
                              <td class="title__right">'.$height.'</td>
                            </tr>
                            <tr>
                              <th class="title__">Width</th>
                              <td class="title__right">'.$width.'</td>
                            </tr>
                            <tr>
                              <th class="title__">Long</th>
                              <td class="title__right">'.$long.'</td>
                            </tr>
                            <tr>
                            <th class="title__">Extra Service</th>
                            <td class="title__right">'.$services.'</td>
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
    </html>';
  
  $headers = "From: webmaster@example.com" . "\r\n";
	$headers .= "Reply-To: webmaster@example.com". "\r\n";
	$headers .= 'Cc: adanyur@gmail.com' . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1".'X-Mailer: PHP/' . phpversion();
	$to = "marcosbedoya@gmail.com";

    $send = mail($to, $subject, $body, $headers);
?>