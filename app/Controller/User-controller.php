<?php include "../../config.php"; ?>

<!DOCTYPE html>
<html>
<head>
    <?php  include FOLDER_TEMPLATE.'/head.php'; ?>
</head>
<body>

<?php

include "../Model/User-model.php";

$obUser = new User ();
if(isset($_POST['Document']) && isset($_POST['Pass'])){
    $user = $_POST['Document'];
    $password = $_POST['Pass'];
    if($user=="'' or '1'='1'" || $password=="'' or '1'='1'"){
      echo('<script>swal("Error!", "Invalid data","error")</script>');
    }
    else{
      $validate = $obUser->validateCorrectData($user,$password);
      if (is_array($validate) || is_object($validate))
        {foreach($validate as $validateCheck) {
          $quantity=$validateCheck['Existing data'];
        }
      }else{
        $quantity =="0";
      }
      $existence = $obUser->validateExistence($user);
      if (is_array($existence) || is_object($existence))
        {foreach($existence as $existence1) {
          $existenceUser=$existence1['Existing quantity'];
        }
      }else{
        $existenceUser ="0";
      }
      $rows = $obUser->validateLogin($user);
      if (is_array($rows) || is_object($rows))
        {foreach($rows as $row) {
          $role=$row['idRolFK'];
        }
      }else{
        $role ="0";
      }
      $stateUser=$obUser->validateLoginState($user);
      if (is_array($stateUser) || is_object($stateUser))
      {foreach($stateUser as $state) {
        $stateU=$state['estadoUsuario'];
      }
      }else{
        $stateU ="0";
      }
      $ValidateLogin = $obUser->validateUserLogin($user,$password,$role,$stateU);
      $UQuantity=null;
      if (is_array($ValidateLogin) || is_object($ValidateLogin))
        {foreach($ValidateLogin as $ValidateLoginU) {
          $UQuantity=$ValidateLoginU['Quantity'];
        }
      }
      $rolRecepcionista = 1;
      if($role == '1' && $UQuantity == "1" ){
        die();
        header('location: Usermenu-view.php');
      }
      else if($role == '2' && $UQuantity == "1"){
        die();
        header('location: Usermenu2-view.php.php');
      }
      else if($user=="" || $password==""){}
        echo('<script>swal("Error!", "Debe ingresar datos al formulario para iniciar sesión","error")</script>');
      }else if($existenceUser=='0'){
        echo "<script>
        const Toast = Swal.mixin({
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 3000,
          timerProgressBar: true,
          didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
          }
        })
        Toast.fire({
          icon: 'error',
          title: 'Usuario no registrado en el sistema'
        })</script>";
      }else if($UQuantity!= '1' && $quantity=="0"){
        echo('<script>swal("Error!", "Datos ingresados erroneos, intentelo nuevamente","error")</script>');
      }else if($stateU=='0' && $quantity=="1"){
        echo '<div class="alert alert-warning"><strong>Usuario Inhabilitado!</strong> Si cree que se trata de un error, por favor comuníquese con Recepción.</div>';
      }
    }
  }
?>

</body>
</html>


