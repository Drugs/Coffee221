<?php

session_start();
if(isset($_GET['id'])and $_GET['id']!=0){

    $consulta= "INSERT INTO item_de_carrinho(nome, fk_id_into_produto, fk_id_carrinho,quantidade) 
    VALUES ('{$_GET['nome']}, '{$_GET['fk_id_produto']}, '{$_GET['fk_id_carrinho']}, '{$_GET['quantidade']})";
    $query=mysqli_query($con, $consulta);
}

?>