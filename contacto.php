
<?php  

// if(isset($_POST['Enviar'])) {
//     if(!empty($_POST['nombre']) && !empty ($_POST['mensaje'])
//         && !empty ($_POST['telefono_contacto'])  && !empty ($_POST['email_contacto']))
//         {

// // Llamando a los campos
// $nombre = $_POST['nombre'];
// $mensaje = $_POST['mensaje'];
// $telefono = $_POST['telefono_contacto'];
// $email = $_POST['email_contacto'];
// // Datos para el correo
// $destinatario = "espositolucas2002@gmail.com";
// $asunto = "Contacto de la web";

// $carta = "De: $nombre \n";
// $carta .= "Correo: $email \n";
// $carta .= "Telefono: $telefono \n";
// $carta .= "Mensaje: $mensaje";

// // Enviando Mensaje
// // $header = "From: noreply@example.com" . "\r\n";
// // $header = "Reply-to: noreply@example.com" . "\r\n";
// // $header = "X-Mailer: PHP/" . phpversion();

// $headers             = "MIME-Version: 1.0\r\n"; 
// // $headers            .= "From:".$email."\r\n"; 
// $headers            .= "From: Fondos Totys SRL <noreply@fondostotys.com>\r\n";
// $headers            .= "Reply-To: ".$destinatario."" . "\r\n";

// $mail = @mail($destinatario, $asunto, $carta,$headers);

// if ($mail) {
//     echo "<h4> Mail enviado </h4>" ;
//     $to = "https://webfabrica.000webhostapp.com/";
//     $url = $to;
//     print "<meta HTTP-EQUIV=Refresh CONTENT=\"0; URL=$url\">";
//     exit;
// }
// // }else{
// //     $to = "https://webfabrica.000webhostapp.com/";
// //     $url = $to;
// //     print "<meta HTTP-EQUIV=Refresh CONTENT=\"0; URL=$url\">";
// //     exit;
// // }
//    }
// }


if(isset($_POST['Enviar'])) {
    
// Llamando a los campos
$nombre = $_POST['nombre'];
$mensaje = $_POST['mensaje'];
$telefono = $_POST['telefono_contacto'];
$email = $_POST['email_contacto'];
// Datos para el correo
$destinatario = "fondos_totys@hotmail.com";
$asunto = "Cliente";

$carta = "De: $nombre \n";
$carta .= "Correo: $email \n";
$carta .= "Telefono: $telefono \n";
$carta .= "Mensaje: $mensaje";

// Enviando Mensaje
// $header = "From: noreply@example.com" . "\r\n";
// $header = "Reply-to: noreply@example.com" . "\r\n";
// $header = "X-Mailer: PHP/" . phpversion();

$headers             = "MIME-Version: 1.0\r\n"; 
// $headers            .= "From:".$email."\r\n"; 
$headers            .= "From: Fondos Totys SRL <noreply@fondostotys.com>\r\n";
$headers            .= "Reply-To: ".$destinatario."" . "\r\n";

$mail = @mail($destinatario, $asunto, $carta,$headers);

if ($mail) {
    echo "<h4> Mail enviado </h4>" ;
    $to = "https://webfabrica.000webhostapp.com/";
    $url = $to;
    print "<meta HTTP-EQUIV=Refresh CONTENT=\"0; URL=$url\">";
    exit;
}
// }else{
//     $to = "https://webfabrica.000webhostapp.com/";
//     $url = $to;
//     print "<meta HTTP-EQUIV=Refresh CONTENT=\"0; URL=$url\">";
//     exit;
// }
   }
?>

