<?php
	
	class Conexion{
		public function getConection(){
			$user="root";
			$pass="";
			$host="localhost";
			$db="veterinaria";

			$conexion = new PDO("mysql:host=$host;dbname=$db;", $user, $pass);
			return $conexion;
		}

	}
?>