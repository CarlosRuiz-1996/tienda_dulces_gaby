<?php 



class Utils{
    public static function ValidaIdentity()
	{
		if (!isset($_SESSION["identity"])) {
			session_destroy();
			header("Location:".base_url);
		  }
	}
}