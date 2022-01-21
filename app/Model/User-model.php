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

    public function validateCorrectData($identnumberUser,$passwordUser){
        $rows=null;
        $status=1;
        $model = new Conexion();
        $connection = $model->getConection();					
        $sql = "SELECT COUNT(*) AS 'Existing data' FROM USUARIO WHERE idUsuario='".$identnumberUser."' AND passwordUsuario='".$passwordUser."'";
        $statement=$connection->prepare($sql);			
        $statement->execute();
        while ($result=$statement->fetch()) {
            $rows[]=$result;
        }
        return $rows;
    }

    public function validateExistence($identnumberUser){
        $rows=null;
        $status=1;
        $model = new Conexion();
        $connection = $model->getConection();					
        $sql="SELECT COUNT(*) AS 'Existing quantity' FROM USUARIO WHERE idUsuario='".$identnumberUser."'";
        $statement=$connection->prepare($sql);			
        $statement->execute();
        while ($result=$statement->fetch()) {
            $rows[]=$result;
        }
        return $rows;
    }

    public function validateLogin($identnumberUser){
        $rows=null;
        $status=1;
        $model = new Conexion();
        $connection = $model->getConection();					
        $sql="SELECT rolUsuario, estadoUsuario FROM USUARIO WHERE idUsuario='".$identnumberUser."'";
        $statement=$connection->prepare($sql);			
        $statement->execute();
        while ($result=$statement->fetch()) {
            $rows[]=$result;
        }
        return $rows;
    }
    
    public function validateUserLogin($identnumberUser,$passwordUser,$role,$state){
			$rows=null;
			$status=1;
			$model = new Conexion();
			$connection = $model->getConection();					
			$sql="SELECT COUNT(*) AS Quantity FROM USUARIO WHERE idUsuario=".$identnumberUser." AND passwordUsuario='".$passwordUser."' AND rolUsuario='".$role."' AND estadoUsuario=".$state."";
			$statement=$connection->prepare($sql);			
			$statement->execute();
			while ($result=$statement->fetch()) {
				$rows[]=$result;
			}
			return $rows;   
}
}

?>