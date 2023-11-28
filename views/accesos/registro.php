<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registrarse</title>
    <link rel="stylesheet" href="<?=base_url?>css/estilo.css">

</head>
    
<body background="<?=base_url?>img/bgg3.png">
    
    <body>
    
    <!--FORMULARIO---->
    <form class="form" method="POST" action="<?=base_url?>usuario/guardar">
        
        <!--TITULO------------------------>
        <center>
        <h1 class="titulo">Registrarse</h1>
        </center>
        <!--CAJAS-DE-ENTRADA-DE-DATOS------------------------------------------------>
        <input class="cajas" name="nombre" type="text" placeholder="Nombre" required maxlength="30">
        <input class="cajas" name="apellidos" type="text" placeholder="Apellido" required maxlength="30">
        <input class="cajas" name="email" type="email" placeholder="Correo Electrónico" required maxlength="30">
        <input class="cajas" name="password" type="password" placeholder="Contraseña" required maxlength="30">
        
        <!--BOTON-DE-REGISTRARSE-------------------------->
        <input type="submit" class="btn" value="REGISTRAR">
        
        <!--YA-TENGO-CUENTA----------------------------------------------------------->
        <p class="tengo-cuenta"><a href="<?=base_url?>usuario/login" class="tengo-cuenta">Ya tengo cuenta</a></p>
        
    </form>
    
    
</body>
</html>