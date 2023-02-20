<?php
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
// use PHPMailer\PHPMailer\Exception;

// //Load Composer's autoloader
// require 'php_mailer/vendor/autoload.php';

// //Create an instance; passing `true` enables exceptions
// $mail = new PHPMailer(true);


// // Llamando a los campos
// // use PHPMailer\PHPMailer\PHPMailer;


// // use PHPMailer\PHPMailer\Exception;

// if(isset($_POST['enviar'])) {
//     if(!empty($_POST['cliente']) && !empty ($_POST['razon_social'])
//         && !empty ($_POST['domicilio']) && !empty ($_POST['telefono']) 
//         && !empty ($_POST['email']) && !empty ($_POST['datos_adicionales']) 
//         && !empty ($_POST['articulo'])
//         && !empty ($_POST['talle35'])  && !empty ($_POST['talle36'])
//         && !empty ($_POST['talle37'])  && !empty ($_POST['talle38'])
//         && !empty ($_POST['talle39'])  && !empty ($_POST['talle40'])
//         && !empty ($_POST['talle41'])  && !empty ($_POST['resultado'])
//         && !empty ($_POST['tipo_articulo'])  && !empty ($_POST['caracteristica'])
//         && !empty ($_POST['tipo'])  && !empty ($_POST['material'])
//         && !empty ($_POST['comentario'])
//      ) {
// $cliente = $_POST['cliente'];
// $razon_social = $_POST['razon_social'];
// $domicilio = $_POST['domicilio'];
// $telefono = $_POST['telefono'];
// $email = $_POST['email'];
// $datos_adicionales = $_POST['datos_adicionales'];
// $articulo = $_POST['articulo'];
// $talle_35 = $_POST['talle35'];
// $talle_36 = $_POST['talle36'];
// $talle_37 = $_POST['talle37'];
// $talle_38 = $_POST['talle38'];
// $talle_39 = $_POST['talle39'];
// $talle_40 = $_POST['talle40'];
// $talle_41 = $_POST['talle41'];
// $total_talles = $_POST['resultado'];
// $tipo_articulo = $_POST['tipo_articulo'];
// $caracteristica = $_POST['caracteristica'];
// $tipo = $_POST['tipo'];
// $material = $_POST['material'];
// $comentario = $_POST['comentario'];

// // Datos para el correo
// $destinatario = "fondos_totys@hotmail.com";
// $asunto = "Contacto de la web";


// $carta = "De: $cliente \n";
// $carta .= "Razon Social: $razon_social \n";
// $carta .= "domicilio: $domicilio \n";
// $carta .= "Telefono: $telefono \n";
// $carta .= "Mail: $email \n";
// $carta .= "Datos Adicionales: $datos_adicionales \n";
// $carta .= "Articulo: $articulo \n";
// $carta .= "Talle 35: $talle_35 \n";
// $carta .= "Talle 36: $talle_36 \n";
// $carta .= "Talle 37: $talle_37 \n";
// $carta .= "Talle 38: $talle_38 \n";
// $carta .= "Talle 39: $talle_39 \n";
// $carta .= "Talle 40: $talle_40 \n";
// $carta .= "Talle 41: $talle_41 \n";
// $carta .= "Total Talles: $total_talles \n";
// $carta .= "Tipo Articulo: $tipo_articulo \n";
// $carta .= "Caracteristica: $caracteristica \n";
// $carta .= "Tipo: $tipo \n";
// $carta .= "Material: $material \n";
// $carta .= "Comentario: $comentario \n";


// $tmp_name = $_FILES['file']['tmp_name']; // get the temporary file name of the file on the server
// $name	 = $_FILES['file']['name']; // get the name of the file
// $size	 = $_FILES['file']['size']; // get size of the file for size validation
// $type	 = $_FILES['file']['type']; // get type of the file
// $error	 = $_FILES['file']['error']; // get the error (if any)

// if($error > 0)
// 	{
// 		die('Upload error or No files uploaded');
// 	}

// $handle = fopen($tmp_name, "r"); // set the file handle only for reading the file
// $content = fread($handle, $size); // reading the file
// fclose($handle);				 // close upon completion

// $encoded_content = chunk_split(base64_encode($content));
// $boundary = md5("random"); // define boundary with a md5 hashed value

// //Encabezados
// $headers             = "MIME-Version: 1.0\r\n"; 
// // $headers            .= "From:".$email."\r\n"; 
// $headers            .= "From: Fondos Totys SRL <noreply@fondostotys.com>\r\n";
// $headers            .= "Reply-To: ".$destinatario."" . "\r\n";
// $headers .= "Content-Type: multipart/mixed;"; // Defining Content-Type;
// $headers .= "boundary = $boundary\r\n"; //Defining the Boundary

// //plain text
// $mensaje = "--$boundary\r\n";
// $mensaje.= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
// $mensaje .= "Content-Transfer-Encoding: base64\r\n\r\n";
// $mensaje.= chunk_split(base64_encode($carta));


// //attachment
// $mensaje .= "--$boundary\r\n";
// $mensaje .="Content-Type: $type; name=".$file_name."\r\n";
// $mensaje .="Content-Disposition: attachment; filename=".$file_name."\r\n";
// $mensaje .="Content-Transfer-Encoding: base64\r\n";
// $mensaje.="X-Attachment-Id: ".rand(1000, 99999)."\r\n\r\n";
// $mensaje .= $encoded_content; // Attaching the encoded file with email




// $mail = @mail($destinatario, $asunto, $mensaje,$headers);

// if ($mail) {
//     echo "<h4> Mail enviado </h4>" ;
//     $to = "https://webfabrica.000webhostapp.com/";
//     $url = $to;
//     print "<meta HTTP-EQUIV=Refresh CONTENT=\"0; URL=$url\">";
//     exit;
// }

//  } 
// }

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'php_mailer/vendor/autoload.php';
ini_set('upload_max_filesize', '40M');
ini_set('post_max_size', '40M');

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);


// Llamando a los campos
// use PHPMailer\PHPMailer\PHPMailer;


// use PHPMailer\PHPMailer\Exception;

if(isset($_POST['enviar'])) {
    // if(!empty($_POST['cliente']) && !empty ($_POST['razon_social']) 
    //     && !empty ($_POST['email'])  
    //     && !empty ($_POST['articulo'])
    //     && !empty ($_POST['tipo_articulo'])  && !empty ($_POST['caracteristica'])
    //     && !empty ($_POST['tipo'])  && !empty ($_POST['material'])
    //     && !empty ($_POST['comentario'])
    //  ) {
$cliente = $_POST['cliente'];
$razon_social = $_POST['razon_social'];
$domicilio = $_POST['domicilio'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$datos_adicionales = $_POST['datos_adicionales'];
$articulo = $_POST['articulo'];
$talle_35 = $_POST['talle35'];
$talle_36 = $_POST['talle36'];
$talle_37 = $_POST['talle37'];
$talle_38 = $_POST['talle38'];
$talle_39 = $_POST['talle39'];
$talle_40 = $_POST['talle40'];
$talle_41 = $_POST['talle41'];
$total_talles = $_POST['resultado'];
$tipo_articulo = $_POST['tipo_articulo'];
$caracteristica = $_POST['caracteristica'];
$tipo = $_POST['tipo'];
$material = $_POST['material'];
$comentario = $_POST['comentario'];

// Datos para el correo
$destinatario = "fondos_totys@hotmail.com";
$asunto = "Cliente";


$carta = "De: $cliente \n";
$carta .= "Razon Social: $razon_social \n";
$carta .= "domicilio: $domicilio \n";
$carta .= "Telefono: $telefono \n";
$carta .= "Mail: $email \n";
$carta .= "Datos Adicionales: $datos_adicionales \n";
$carta .= "Articulo: $articulo \n";
$carta .= "Talle 35: $talle_35 \n";
$carta .= "Talle 36: $talle_36 \n";
$carta .= "Talle 37: $talle_37 \n";
$carta .= "Talle 38: $talle_38 \n";
$carta .= "Talle 39: $talle_39 \n";
$carta .= "Talle 40: $talle_40 \n";
$carta .= "Talle 41: $talle_41 \n";
$carta .= "Total Talles: $total_talles \n";
$carta .= "Tipo Articulo: $tipo_articulo \n";
$carta .= "Caracteristica: $caracteristica \n";
$carta .= "Tipo: $tipo \n";
$carta .= "Material: $material \n";
$carta .= "Comentario: $comentario \n";


$tmp_name = $_FILES['file']['tmp_name']; // get the temporary file name of the file on the server
$name	 = $_FILES['file']['name']; // get the name of the file
$size	 = $_FILES['file']['size']; // get size of the file for size validation
$type	 = $_FILES['file']['type']; // get type of the file
$error	 = $_FILES['file']['error']; // get the error (if any)

// if($error > 0)
// 	{
// 		die('Upload error or No files uploaded');
// 	}

$ext = pathinfo($name, PATHINFO_EXTENSION);
if ($ext !== 'png' || $ext !== 'jpg'|| $ext !== 'JPG'|| $ext !== 'JPEG'|| $ext !== 'jpeg'
|| $ext !== 'pdf' || $ext !== 'docx'|| $ext !== 'xlsx'|| $ext !== 'HEIF'|| $ext !== 'HEVC'|| $ext !== 'H.264'
|| $ext !== 'PDF' || $ext !== 'PNG' || $ext !== 'DOCX' || $ext !== 'XLSX' || $ext !== 'csv' || $ext !== 'CSV'
|| $ext !== 'mp4' || $ext !== 'MP4' || $ext !== 'avi'|| $ext !== 'AVI' || $ext !== 'mov' || $ext !== 'MOV' ) {
    echo 'error';
}

$handle = fopen($tmp_name, "r"); // set the file handle only for reading the file
$content = fread($handle, $size); // reading the file
fclose($handle);				 // close upon completion

$encoded_content = chunk_split(base64_encode($content));
$boundary = md5("random"); // define boundary with a md5 hashed value

//Encabezados
$headers             = "MIME-Version: 1.0\r\n"; 
// $headers            .= "From:".$email."\r\n"; 
$headers            .= "From: Fondos Totys SRL <noreply@fondostotys.com>\r\n";
$headers            .= "Reply-To: ".$destinatario."" . "\r\n";
$headers .= "Content-Type: multipart/mixed;"; // Defining Content-Type;
$headers .= "boundary = $boundary\r\n"; //Defining the Boundary

//plain text
$mensaje = "--$boundary\r\n";
$mensaje.= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
$mensaje .= "Content-Transfer-Encoding: base64\r\n\r\n";
$mensaje.= chunk_split(base64_encode($carta));


//attachment
$mensaje .= "--$boundary\r\n";
$mensaje .="Content-Type: $type; name=".$name."\r\n";
$mensaje .="Content-Disposition: attachment; filename=".$name."\r\n";
$mensaje .="Content-Transfer-Encoding: base64\r\n";
$mensaje.="X-Attachment-Id: ".rand(1000, 99999)."\r\n\r\n";
$mensaje .= $encoded_content; // Attaching the encoded file with email




$mail = @mail($destinatario, $asunto, $mensaje,$headers);

if ($mail) {
    echo "<h4> Mail enviado </h4>" ;
    $to = "https://webfabrica.000webhostapp.com/";
    $url = $to;
    print "<meta HTTP-EQUIV=Refresh CONTENT=\"0; URL=$url\">";
    exit;
}

 } 
//}
?>