<?php
defined('BASEPATH') or exit('No direct script access allowed');

function phpmailer_send($recipient, $from_name, $from_addr, $subject, $message)
{
  require_once("phpmailer/PHPMailerAutoload.php");

  $smtp_host = 'example.com';
  $smtp_port = '587';
  $smtp_user = 'info@example.com';
  $smtp_password = 'password';

  $mail = new PHPMailer();

  $mail->CharSet = "UTF-8";
  $mail->Encoding = "8bit";

  $mail->IsSMTP();
  $mail->Host = $smtp_host . ":" . $smtp_port;
  $mail->SMTPAuth = TRUE;
  $mail->Username = $smtp_user;
  $mail->Password = $smtp_password;

  $mail->FromName = $from_name;
  $mail->From = $from_addr;
  $mail->Subject = mb_encode_mimeheader($subject);
  $mail->Body = strip_tags($message);
  $mail->AddAddress($recipient);
  $result = $mail->Send();
  if ($result) {
    return TRUE;
  } else {
    return $mail->ErrorInfo;
  }
}
