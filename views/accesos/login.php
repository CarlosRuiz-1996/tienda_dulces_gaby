
<!-- Define que el documento esta bajo el estandar de HTML 5 -->
<!doctype html>

<!-- Representa la raíz de un documento HTML o XHTML. Todos los demás elementos deben ser descendientes de este elemento. -->
<html lang="es">
    
    <head>
        
        <meta charset="utf-8">
        
        <title>Iniciar Sesión</title>    
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <meta name="author" content="Videojuegos & Desarrollo">
        <meta name="description" content="Ejemplo de formulario de acceso basado en HTML5 y CSS">
        <meta name="keywords" content="login,formulariode acceso html">
        
        <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet"> 
        
        <!-- Link hacia el archivo de estilos css -->
        <link rel="stylesheet" href="pestañas/login.html">
        <link rel="stylesheet" href="<?=base_url?>css/login.css">
        
        <style type="text/css">
            
        </style>
        
        <script type="text/javascript">
        
        </script>
        
    </head>
    
    <body background="img/bgg3.png">
        
    
        <body>
    
            <div id="contenedor">
                
                <div id="contenedorcentrado">
                <div id="login">
                    <form id="loginform" action="<?=base_url?>usuario/ingresar" method="POST">
                        <label for="usuario">Usuario</label>
                        <input id="usuario" type="text" name="usuario" placeholder="" required>
                        
                        <label for="password">Contraseña</label>
                        <input id="password" type="password" placeholder="" name="password" required>
                        
                        <button type="submit" title="Ingresar" name="Ingresar">Iniciar</button>
                    </form>
                    
                </div>
                <div id="derecho">
                    <div class="titulo">
                        DeliAmaite
                    </div>
                    <hr>
                    <div class="pie-form">
                        <a href="#">¿Perdiste tu contraseña?</a>
                        <a href="<?=base_url?>usuario/registro.">¿No tienes Cuenta? Registrate</a>
                        <hr>
                        <a href="<?=base_url?>">« Volver</a>

                    </div>
                </div>
            </div>
        </div>
        
    </body>
</html>