<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <title>Document</title>
</head>
<body>
    <h1>Formulario de Correo con PHP</h1>
    <form method="post">
        <input type="text"   placeholder="nombre" name="name" id="" required>
        <input type="email"  placeholder="email"  name="email"  id="" required>
        <input type="text"   placeholder="asunto" name="asunto" id="" required>
        <textarea placeholder="mensaje" id=""     name="msg"  cols="30" rows="10"></textarea>
        <input type="submit" value="enviar">
    </form>
    <?php 
        include("correo.php");
    ?>
</body>
</html>