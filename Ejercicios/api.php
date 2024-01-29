<?php

if($_GET){

    echo "Se envío el dato en método GET, el dato es:".$_GET['tarea'];
}
if($_POST){
    echo "Se envío el dato en método POST, el dato es:".$_POST['tarea'];
}

?>