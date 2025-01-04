<?php
    
    if (!empty($_POST["btnIngresar"])) {
        if (!empty($_POST["txtUsuario"]) and !empty($_POST["txtPassword"])) {
            $usuario = $_POST["txtUsuario"];
            $password = md5($_POST["txtPassword"]) ;
            $tabla = "usuario";

            $sql = $conexion->query("SELECT * FROM usuarios WHERE usuario = '$usuario' AND password = '$password'");
           /* $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();*/

            if ($sql->fetch_object()) {
                header("Location: inicio.php");
                # code...
            } else {
                echo "<div class='alert alert-danger'> El usuario no existe </div>";
            }
            
        }else{
            echo "<div class='alert alert-danger'>Debes llenar todos los campos</div>";

        }

    }
