<?php
//Bianca
session_start();
include '../include/database.php';

                    
$id_produto = $_GET['id']; //id do produto
//$id_categoria =; //categoria do produto

    if (isset($_GET['id']) and $_GET['id'] != 0) {
        if( $_GET['cat'] == 'roupa'){
            $inf = "DELETE FROM item_de_carrinho WHERE fk_id_info_produto = {$id_produto}";
            $query = mysqli_query($con, $inf);
        }
        if( $_GET['cat'] == 'alimento'){
            $inf2 = "DELETE FROM item_de_carrinho WHERE fk_id_info_produto = {$id_produto}";
            $query = mysqli_query($con, $inf2);
        }
    }
?>