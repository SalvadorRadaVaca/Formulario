<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="UTF-8">
      <title>Formulario animado</title>
      <link rel="stylesheet" href="estilos.css">
    </head>
    <body>
      <form method="POST" action="" class="formulario">
      	<h1 class="formulario__titulo">Contáctos</h1>
      	<input type="name" name="names" class="formulario__input">
        <label for="" class="formulario__label">Nombres</label>
        <input type="email" name="email" class="formulario__input">
        <label for="" class="formulario__label">Correo</label>
        <input type="text" name="phone" class="formulario__input">
        <label for="" class="formulario__label">Teléfono</label>
        <input type="text" name="message" class="formulario__input">
        <label for="" class="formulario__label">Mensaje</label>
        <input type="submit" name="submit" class="formulario__submit" value="Enviar">
      </form>
      <?php 
            if (isset($_POST['submit'])) {
                require("registro.php");
            }
      ?>
      <script type="text/javascript" src="form.js"></script>
    </body>
</html>