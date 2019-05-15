<?php

session_start();

if($_POST){
    if(isset($_POST['usuario']) and isset($_POST['password'])){
        
        $usuario=$_POST['usuario'];
        $contraseña=$_POST['password'];
        
        if($usuario=='Rosario' and $contraseña=='12345'){
            
            $_SESSION['user'] = "$usuario"; 
            
            header('Location: inicio.php');
            exit();
            
        }else{
            header('Location: ../index.php');
        }
    }

}else{
    header('Location: ../index.php');
}