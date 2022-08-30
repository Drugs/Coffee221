<?php
//bianca nogueira
session_start();
$_SESSION[$id_usu]= $result['id_usuario'];
$_SESSION[$id_pessoa]= $result['fk_id_pessoa'];
?>