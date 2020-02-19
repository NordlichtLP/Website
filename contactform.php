<?php

if (isset($_POST['submit'])) {
  $subject = $_POST ['betreff'];
  $mailFrom = $_POST['mail'];
  $message = $_POST['message'];

  $mailTo = "creeper07hd@gmail.com";
  $headers = "From: ".$mailFrom;
  $txt = ".\n\n".$message;


  mail($mailTo, $subject, $txt, $headers);
  header("Location: /Website/#")
}
?>
