<?php

session_start();
if(isset($_SESSION['user'])){
   
    $nombre=$_SESSION['user'];
    
    echo "Hola $nombre";
    echo'<a href="salir.php">SAlIR</a>';

}else{
    header('Location: ../index.php');
}
