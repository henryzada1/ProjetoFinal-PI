<?php
session_start();
ini_set('default_charset','UTF-8');
var_dump($_SESSION['teste123']);

$emailjogador = $_SESSION['teste123'][0];
$emailjogador1 = $_SESSION['teste123'][1];
$emailjogador2 = $_SESSION['teste123'][2];
$emailjogador3 = $_SESSION['teste123'][3];
$emailjogador4 = $_SESSION['teste123'][4];

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;



//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);
$mail1 = new PHPMailer(true);
$mail2 = new PHPMailer(true);
$mail3 = new PHPMailer(true);
$mail4 = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.office365.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'majorsenacsbc@outlook.com';                     //SMTP username
    $mail->Password   = 'danilo12345';                               //SMTP password
    $mail->SMTPSecure =  PHPMailer::ENCRYPTION_STARTTLS;           //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure PHPMailer::ENCRYPTION_STARTTLS`
//PHPMailer::ENCRYPTION_SMTPS;
	$email = "majorsenacsbc@outlook.com";
    //Recipients
    $mail->setFrom('majorsenacsbc@outlook.com', 'MajorCS');
  
 //jogador++++
    $mail->addBCC($emailjogador,'CS');   //Add a recipient                  //Name is optional
    $mail->addReplyTo($email, 'Information');
     
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');
   

 $d = $emailjogador;
$codigo=md5($d);

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    


    $mail->isHTML(true);  
                         //Set email format to HTML
    $mail->Subject = 'Confirmar cadastro, campeonato MajorCSGO';
    $link = "https://majorcampeonatocsgo.azurewebsites.net/confirmaEmail/confirmaEmail.php?h=".$codigo;
    $mail->Body    = '<b>Clique  aqui para confirmar seu cadastro no campeonato MajorCSGO ou copie e cole o link no seu navegador</b> <br>'.$link;
    $mail->AltBody = '<b>Clique  aqui para confirmar seu cadastro no campeonato MajorCSGO</b> ';

    $mail->send();
//break;
    ///jogador0000000000000aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
       //Server settings
       $mail1->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
       $mail1->isSMTP();                                            //Send using SMTP
       $mail1->Host       = 'smtp.office365.com';                     //Set the SMTP server to send through
       $mail1->SMTPAuth   = true;                                   //Enable SMTP authentication
       $mail1->Username   = 'majorsenacsbc@outlook.com';                     //SMTP username
       $mail1->Password   = 'danilo12345';                               //SMTP password
       $mail1->SMTPSecure =  PHPMailer::ENCRYPTION_STARTTLS;           //Enable implicit TLS encryption
       $mail1->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure PHPMailer::ENCRYPTION_STARTTLS`
   //PHPMailer::ENCRYPTION_SMTPS;
      $email1 = "majorsenacsbc@outlook.com";
       //Recipients
       $mail1->setFrom('majorsenacsbc@outlook.com', 'MajorCS');
     
    //jogador++++
       $mail1->addBCC($emailjogador1,'CS');   //Add a recipient                  //Name is optional
       $mail1->addReplyTo($email1, 'Information');
        
       //$mail->addCC('cc@example.com');
       //$mail->addBCC('bcc@example.com');
      
   
    $d1 = $emailjogador1;
   $codigo1=md5($d1);
   
       //Attachments
       //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
       //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
   
       //Content
       
   
   
       $mail1->isHTML(true);  
                            //Set email format to HTML
       $mail1->Subject = 'Confirmar cadastro, campeonato MajorCSGO';
       $link1 = "https://majorcampeonatocsgo.azurewebsites.net/confirmaEmail/confirmaEmail.php?h=".$codigo1;
       $mail1->Body    = '<b>Clique  aqui para confirmar seu cadastro no campeonato MajorCSGO ou copie e cole o link no seu navegador</b> <br>'.$link1;
       $mail1->AltBody = '<b>Clique  aqui para confirmar seu cadastro no campeonato MajorCSGO</b> ';
   
       $mail1->send();

       ///jogador2222222222222222222aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa

       //Server settings
       $mail2->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
       $mail2->isSMTP();                                            //Send using SMTP
       $mail2->Host       = 'smtp.office365.com';                     //Set the SMTP server to send through
       $mail2->SMTPAuth   = true;                                   //Enable SMTP authentication
       $mail2->Username   = 'majorsenacsbc@outlook.com';                     //SMTP username
       $mail2->Password   = 'danilo12345';                               //SMTP password
       $mail2->SMTPSecure =  PHPMailer::ENCRYPTION_STARTTLS;           //Enable implicit TLS encryption
       $mail2->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure PHPMailer::ENCRYPTION_STARTTLS`
   //PHPMailer::ENCRYPTION_SMTPS;
      $email2 = "majorsenacsbc@outlook.com";
       //Recipients
       $mail2->setFrom('majorsenacsbc@outlook.com', 'MajorCS');
     
    //jogador++++
       $mail2->addBCC($emailjogador2,'CS');   //Add a recipient                  //Name is optional
       $mail2->addReplyTo($email2, 'Information');
        
       //$mail->addCC('cc@example.com');
       //$mail->addBCC('bcc@example.com');
      
   
    $d2 = $emailjogador2;
   $codigo2=md5($d2);
   
       //Attachments
       //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
       //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
   
       //Content
       
   
   
       $mail2->isHTML(true);  
                            //Set email format to HTML
       $mail2->Subject = 'Confirmar cadastro, campeonato MajorCSGO';
       $link2 = "https://majorcampeonatocsgo.azurewebsites.net/confirmaEmail/confirmaEmail.php?h=".$codigo2;
       $mail2->Body    = '<b>Clique  aqui para confirmar seu cadastro no campeonato MajorCSGO ou copie e cole o link no seu navegador</b> <br>'.$link2;
       $mail2->AltBody = '<b>Clique  aqui para confirmar seu cadastro no campeonato MajorCSGO</b> ';
   
       $mail2->send();

              ///jogador333333333333333333333aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa

              //Server settings
       $mail3->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
       $mail3->isSMTP();                                            //Send using SMTP
       $mail3->Host       = 'smtp.office365.com';                     //Set the SMTP server to send through
       $mail3->SMTPAuth   = true;                                   //Enable SMTP authentication
       $mail3->Username   = 'majorsenacsbc@outlook.com';                     //SMTP username
       $mail3->Password   = 'danilo12345';                               //SMTP password
       $mail3->SMTPSecure =  PHPMailer::ENCRYPTION_STARTTLS;           //Enable implicit TLS encryption
       $mail3->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure PHPMailer::ENCRYPTION_STARTTLS`
   //PHPMailer::ENCRYPTION_SMTPS;
      $email3 = "majorsenacsbc@outlook.com";
       //Recipients
       $mail3->setFrom('majorsenacsbc@outlook.com', 'MajorCS');
     
    //jogador++++
       $mail3->addBCC($emailjogador3,'CS');   //Add a recipient                  //Name is optional
       $mail3->addReplyTo($email3, 'Information');
        
       //$mail->addCC('cc@example.com');
       //$mail->addBCC('bcc@example.com');
      
   
    $d3 = $emailjogador3;
   $codigo3=md5($d3);
   
       //Attachments
       //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
       //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
   
       //Content
       
   
   
       $mail3->isHTML(true);  
                            //Set email format to HTML
       $mail3->Subject = 'Confirmar cadastro, campeonato MajorCSGO';
       $link3 = "https://majorcampeonatocsgo.azurewebsites.net/confirmaEmail/confirmaEmail.php?h=".$codigo3;
       $mail3->Body    = '<b>Clique  aqui para confirmar seu cadastro no campeonato MajorCSGO ou copie e cole o link no seu navegador</b> <br>'.$link3;
       $mail3->AltBody = '<b>Clique  aqui para confirmar seu cadastro no campeonato MajorCSGO</b> ';
   
       $mail3->send();

        ///jogador444444444444444444444aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa

              //Server settings
       $mail4->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
       $mail4->isSMTP();                                            //Send using SMTP
       $mail4->Host       = 'smtp.office365.com';                     //Set the SMTP server to send through
       $mail4->SMTPAuth   = true;                                   //Enable SMTP authentication
       $mail4->Username   = 'majorsenacsbc@outlook.com';                     //SMTP username
       $mail4->Password   = 'danilo12345';                               //SMTP password
       $mail4->SMTPSecure =  PHPMailer::ENCRYPTION_STARTTLS;           //Enable implicit TLS encryption
       $mail4->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure PHPMailer::ENCRYPTION_STARTTLS`
   //PHPMailer::ENCRYPTION_SMTPS;
      $email4 = "majorsenacsbc@outlook.com";
       //Recipients
       $mail4->setFrom('majorsenacsbc@outlook.com', 'MajorCS');
     
    //jogador++++
       $mail4->addBCC($emailjogador4,'CS');   //Add a recipient                  //Name is optional
       $mail4->addReplyTo($email4, 'Information');
        
       //$mail->addCC('cc@example.com');
       //$mail->addBCC('bcc@example.com');
   
    $d4 = $emailjogador4;
   $codigo4=md5($d4);
   
       //Attachments
       //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
       //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
   
       //Content
   
       $mail4->isHTML(true);  
                            //Set email format to HTML
       $mail4->Subject = 'Confirmar cadastro, campeonato MajorCSGO';
       $link4 = "https://majorcampeonatocsgo.azurewebsites.net/confirmaEmail/confirmaEmail.php?h=".$codigo4;
       $mail4->Body    = '<b>Clique  aqui para confirmar seu cadastro no campeonato MajorCSGO ou copie e cole o link no seu navegador</b> <br>'.$link4;
       $mail4->AltBody = '<b>Clique  aqui para confirmar seu cadastro no campeonato MajorCSGO</b> ';
   
       $mail4->send();

       echo "mensagem enviada";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail4->ErrorInfo}";
}