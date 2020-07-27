<?php

$name =$_POST['nombre'];
$apellido =$_POST['apellido'];
$edad =$_POST['edad'];
$correo =$_POST['correo'];
$seleccion = $_POST['animal'];
$numero =$_POST['numero'];

$email_from = 'camilo456garcia@gmail.com';
$emai_subject = $seleccion;
$email_body = '<h1> Hay una persona interesada en adoptar <h1>'.
                '<ul>'.
                "<li> nombre = $name </li>".
                "<li> apellido= $apellido </li>".
                "<li> edad = $edad </li>".
                "<li> correo = $correo </li>".
                "<li> seleccion = $seleccion </li>".
                "<li> numero = $numero </li>".
                '</ul>'.

$to = 'camilo456garcia@gmail.com';
$headers = "from: $email_from \r\n";
mail($to,$emai_subject,$email_body, $headers);