<?php

require_once 'Connection.php';
class User {		


	public function userExistent ($document,$pass) {
        $model = new Conexion();
        $connection = $model->getConection();
		$sql = "SELECT * FROM USUARIO WHERE idUsuario = ? AND passwordUsuario = BINARY ? AND estadoUsuario=1";
		$result = $connection->prepare($sql);
		$result->execute([$document,$pass]);
		if ($result->fetchColumn() > 0) {
			return true;
		} else{
			return false;
		}
		$conexion = null;	
	}

    public function Rol ($document) {
        $model = new Conexion();
        $connection = $model->getConection();
        $sql = "SELECT rolUsuario FROM USUARIO WHERE idUsuario = ? ";
        $result0 = $connection->prepare($sql);
        $result0->execute([$document]);
        $array=$result0->fetchAll(PDO::FETCH_COLUMN);
        if ($array[0] == "Medico") {
            return true;
        } elseif ($array[0] == "Paciente"){
            return false;
        }
        $connection = null;
    }
}

?>