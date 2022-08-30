<?php
$title = "Cadastro - Cartão";
include "../include/header.php";
include '../include/database.php';

if (isset($_GET['cadastrar']) and $_GET['cadastrar'] == 'send') {
    $inf = "INSERT INTO cartoes (`nome_cartao`,`validade`,`cvv`,`numero`,`fk_id_cartao`)
    VALUES ('{$_GET['nome_cartao']}','{$_GET['validade']}','{$_GET['cvv']}','{$_GET['numero']}','{$_GET['fk_id_cartao']}')";
}
?>

<?php
include "../include/footer.php";
?>