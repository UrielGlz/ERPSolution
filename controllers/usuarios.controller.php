<?php

class ControladorUsuarios{
    static public function ctrIngresoUsuario(){
        if (isset($_POST["ingUsuario"])) {
            if (preg_match('/^[a-zA-Z0-9]+$/',$_POST["ingUsuario"]) &&
                preg_match('/^[a-zA-Z0-9]+$/',$_POST["ingPassword"] )) {
  
                // DESENCRIPTAR PASSWORD INTRODUCIDO PARA COMPARAR CON LO QUE HAY EN LA BD
                $encriptarPass= crypt($_POST['ingPassword'], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');
                $tabla = "tab_usuarios";
                $item = "us_usuario";
                $valor = $_POST['ingUsuario'];
                $respuesta = ModeloUsuarios::MdlMostrarUsuarios($tabla,$item,$valor);
  
  
                //  var_dump($respuesta);exit;
                if ($respuesta["us_usuario"] == $_POST['ingUsuario'] && $respuesta["us_password"] == $encriptarPass) {
  
                  if ($respuesta['us_status'] == 1) {
                    $_SESSION["miSesion"] = "ok";
                    $_SESSION["id_usuario"] = $respuesta["id_usuario"];
                    $_SESSION["us_nombre"] = $respuesta["us_nombre"];
                    $_SESSION["us_usuario"] = $respuesta["us_usuario"];
                    $_SESSION["us_rol"] = $respuesta["us_rol"];
                    $_SESSION["us_correo"] = $respuesta["us_correo"];
                    $_SESSION["us_foto"] = $respuesta["us_foto"];
                    $_SESSION["us_aprobacion"] =$respuesta["config_aprobacionEstimacion"];
                    $_SESSION["us_aprobarCotizacion"] = $respuesta["config_aprobarCotizacion"];
                    $_SESSION["us_idEmpresa"] = $respuesta["us_idEmpresa"];
  
                    /*=============================================
                    REGISTRAR FECHA PARA SABER EL ÚLTIMO LOGIN
                    =============================================*/
                    date_default_timezone_set("US/Central");
  
                    $fecha = date('Y-m-d');
                    $hora = date('H:i:s');
  
                    $fechaActual = $fecha.' '.$hora;
  
                    $item1 = "us_ultimologin";
                    $valor1 = $fechaActual;
  
                    $item2 = "id_usuario";
                    $valor2 = $respuesta["id_usuario"];
  
                    $ultimoLogin = ModeloUsuarios::mdlActualizarUsuario($tabla, $item1, $valor1, $item2, $valor2);
  
                    echo '<script>
                    window.location = "inicio";
                    </script>';
                  }else {
                      echo '<br><div class="alert alert-danger">El usuario no esta activado</div>';
                  }
                }else {
                  echo '<br><div class="alert alert-danger">Error al iniciar sesion. Revise sus credenciales.</div>';
                }
            }
        }
    }      
}