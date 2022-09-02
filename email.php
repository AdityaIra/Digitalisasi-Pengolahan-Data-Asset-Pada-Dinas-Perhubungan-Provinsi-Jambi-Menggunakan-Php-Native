<?php
$penerima = "hendebro.office@gmail.com";
  include "../../mail/classes/class.phpmailer.php";
  $mail = new PHPMailer; 
  $mail->IsSMTP();
  $mail->SMTPSecure = 'ssl'; 
  $mail->Host = "smtp.gmail.com"; //host masing2 provider email
  $mail->SMTPDebug = 2;
  $mail->Port = 465;
  $mail->SMTPAuth = true;
  $mail->Username = "inisaja17@gmail.com"; //user email
  $mail->Password = "1sampai3#"; //password email 
  $mail->SetFrom("inisaja17@gmail.com","no-reply"); //set email pengirim
  $mail->Subject = "Pemberitahuan disposisi masuk"; //subyek email
  $mail->AddAddress($penerima);  //tujuan email
  $mail->MsgHTML("Cek dashboard anda karena ada disposisi masuk!");
if($mail->Send()) echo "Message has been sent";
else echo "Failed to sending message";
?>