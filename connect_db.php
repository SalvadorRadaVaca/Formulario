<?php 
    $link = mysqli_connect("localhost", "root", "password", "formulario");

    if(!$link){
    die('error connecting to database');    
    }
?>