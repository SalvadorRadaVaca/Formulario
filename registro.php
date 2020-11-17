<?php
    $names   = $_POST['names'];
    $email   = $_POST['email'];
    $phone   = $_POST['phone'];
    $message = $_POST['message'];
    $reqlen  = strlen($names) * strlen($email) * strlen($phone);
    if ($reqlen > 0) {
    	require("connect_db.php");
    	mysqli_query($link, "INSERT INTO registro (names, email, phone, message) VALUES('$names', '$email', '$phone', '$message')");
    	echo 'Se ha registrado exitosamente';
    	mysqli_close($link);
    } else {
    	echo 'Por favor, rellena todos los campos requridos.';
    }
?>