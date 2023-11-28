<?php
require_once 'config/db.php';
class Usuario{
    private $nombre;
    private $apellido;
    private $correo;
    private $password;
    private $db; //variable de base de datos
    public function __construct()
    {
        $this->db = Database::connect();
    }

    //gets
    public function getCorreo()
    {
        return  $this->correo;
    }
    function getPassword() {
        return  $this->password;
        // return password_hash($this->db->real_escape_string($this->password), PASSWORD_BCRYPT, ['cost' => 4]);
	}
    public function getNombre()
    {
        return  $this->nombre;
    }
    public function getApellidos()
    {
      return  $this->apellido;

    }
    //sets

    public function setCorreo($correo)
    {
        $this->correo = $correo;
    }
    public function setPassword($password)
    {
        $this->password = $password;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    public function setApellidos($apellido)
    {
        $this->apellido = $apellido;
    }
    //accesos
    public function save()
    {
        $sql = "INSERT INTO usuarios VALUES(NULL, '{$this->getNombre()}', '{$this->getApellidos()}', '{$this->getCorreo()}', '{$this->getPassword()}');";
		$save = $this->db->query($sql);
		
		$result = false;
		if($save){
			$result = true;
		}
		return $result;
    }
    public function login(){
        $result = false;
		$email = $this->correo;
		$password =$this->password;
		
        
		// Comprobar si existe el usuario
		$sql = "SELECT * FROM usuarios WHERE correo = '$email'";
		$login = $this->db->query($sql);
		

		if($login && $login->num_rows == 1){
			$usuario = $login->fetch_object();

			// Verificar la contraseña
			// $verify = password_verify($password, $usuario->password);
			if($password=== $usuario->password){
				$result = $usuario;
			}
		}
		// if($login && $login->num_rows == 1){
		// 	$usuario = $login->fetch_object();
		// 	//'$2y$04$7.EhG.rY7KORZTsd4VeBBOe9SKnS4D8igvHPJrB3ZeY'
		// 	// Verificar la contraseña
        //     $p = $usuario->password;
		// 	$verify = password_verify($password, $p);
        //     var_dump($verify);
		// 	var_dump($password, $p);
		// 	if($verify){
		// 		$result = $usuario;
		// 	}
		// }
		return $result;
	}


    
	



}
