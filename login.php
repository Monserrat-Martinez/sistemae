<?php
//require 'header.php';
use Illuminate\Database\Capsule\Manager as DB;

require __DIR__ . '\config\database.php';
require __DIR__ . '\vendor\autoload.php';

$error = $usuario = $pass = "";

if (isset($_POST['usuario']))
{
    $usuario = $_POST['usuario'];
    $pass = $_POST['pass'];

    if ($usuario == "" || $pass == "")
    {
        $error = 'no se ingresaron los datos';
    }
    else
    {
        $user = DB::table('login')->where('user', $_POST['usuario'])->first();
        $mensaje = '';
        if($user->pass == $_POST['pass'])
        {
            $mensaje = "<h1>CONTRASEÑA CORRECTA </h1>";
            if ($usuario == 'admin@gmail.com'){
                echo '<script>alert("BIENVENIDO ADMINISTRADOR")</script> ';
                echo "<script>location.href='admin.php'</script>";
            }
            else  
            {
                echo '<script>alert("BIENVENIDO ALUMNO")</script> ';
                echo "<script>location.href='user.php'</script>";
            }
        }
        else
        {
            echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
            echo "<script>location.href='index.php'</script>";
            $mensaje = "<h1>CONTRASEÑA INCORRECTA </h1>";
        }
        echo $mensaje;
    }
}