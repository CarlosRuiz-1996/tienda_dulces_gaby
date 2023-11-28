<?php 
require_once 'models/usuario.php';

class usuarioController{

    public function index()
    {
        require_once 'views/accesos/bienvenida.php';
        // echo "hola";
    }
    public function inicio()
    {
        require_once 'pestañas/inicio.php';
        // echo "hola";
    }
    public function login()
    {
       require_once 'views/accesos/login.php';
    }

    public function registro()
    {
       require_once 'views/accesos/registro.php';
    }


    public function ingresar(){
        if(isset($_POST)){
			// Identificar al usuario
			// Consulta a la base de datos
			$usuario = new Usuario();
			$usuario->setCorreo($_POST['usuario']);
			$usuario->setPassword($_POST['password']);
			
			$identity = $usuario->login();
			if($identity && is_object($identity)){
				$_SESSION['identity'] = $identity;
							// var_dump($_SESSION['identity']);

				header ('Location:'.base_url.'usuario/inicio');
				// if($identity->rol == 'admin'){
				// 	$_SESSION['admin'] = true;
				// }
				
			}else{
				$_SESSION['error_login'] = 'Identificación fallida !!';
                
                require_once 'views/accesos/login.php';
			}
		
		}
    }

    public function guardar()
    {
        if(isset($_POST)){
			
			$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
			$apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : false;
			$email = isset($_POST['email']) ? $_POST['email'] : false;
			$password = isset($_POST['password']) ? $_POST['password'] : false;
			
			if($nombre && $apellidos && $email && $password){
				$usuario = new Usuario();
				$usuario->setNombre($nombre);
				$usuario->setApellidos($apellidos);
				$usuario->setCorreo($email);
				$usuario->setPassword($password);

				$save = $usuario->save();
				if($save){
					$_SESSION['register'] = "complete";
                    header ('Location:'.base_url.'usuario/login');
				}else{
					$_SESSION['register'] = "failed";
                    header ('Location:'.base_url.'usuario/registro');
				}
			}else{
				$_SESSION['register'] = "failed";
                header ('Location:'.base_url.'usuario/registro');

			}
		}else{
			$_SESSION['register'] = "failed";
            header ('Location:'.base_url.'usuario/registro');

		}
    }


	public function logout(){
		if(isset($_SESSION['identity'])){
			$_SESSION['identity'] = null;
			unset($_SESSION['identity']);
		}
		header("Location:".base_url);
	}



}