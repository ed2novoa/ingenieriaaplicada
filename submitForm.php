<?php
error_reporting(0);
$error="";
$successMessage="";
if($_POST){
  $emailTo="eddnovoa@gmail.com";
  $name=$_POST['name'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $subject=$_POST['subject'];
  $message=$_POST['content'];
  $headers="From: ".$email."\r\n";
  $headers.="MIME-Version: 1.0"."\r\n";
  $headers.="Content-type:text/html;
  charset=UTF-8";
  $content="<html><head><title>ingenieriaaplicada.cr - Mensaje desde Formulario de Contacto </title></head><body><h2>Mensaje desde Formulario de Contacto \"ingenieriaaplicada.cr\"</h2><p><strong>Nombre: </strong>".$name."</p><p><strong>Email: </strong>".$email."</p><p><strong>Teléfono: </strong>".$phone."</p><p><strong>Asunto: </strong>".$subject."</p><p><strong>Mensaje: </strong>".$message."</p></body></html>";
  if(mail($emailTo,"Ingeniería Aplicada - Mensaje desde Formulario de Contacto",$content,$headers)){

    echo 1;

  }else{

    echo 0;
  }
}
die();
?>
