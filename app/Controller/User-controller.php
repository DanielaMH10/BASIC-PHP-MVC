
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">  
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<title></title>
</head>
<body>

<?php

include "../Model/User-model.php";


$obUser = new User ();

if (isset($_POST['submit'])) {
    $inputDocument=$_POST['Document'];
    $inputPass=$_POST['Pass'];
        if($_POST['Document'] == "" ||  $_POST['Pass']=="") {
            echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'> <h3>¡ERROR!</h3><hr>Debe de llenar todos los campos";
            echo " <button type='button' class='close' data-dismiss='alert' aria-label='Close'>";
            echo " <span aria-hidden='true'>&times;</span></button></div>";
        }
            if ($obUser->userExistent ($inputDocument, $inputPass)==true) {
                if ($obUser->Rol($inputDocument)==true) {
                    header("Location:../View/Usermenu-view.php");
                } 
                    elseif ($obUser->Rol($inputDocument)==false) {
                        header("Location:../View/Usermenu2-view.php");
                    }
            }
                else {  
                    header("Location:../../index.php");
                }
}
?>

</body>
</html>
