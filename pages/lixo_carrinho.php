<?php
//Bianca
session_start();
include '../include/database.php';

                    
$id_produto = $_GET['id']; //id do produto
$id_categoria = $_GET['cat']; //categoria do produto

    if (isset($id_produto and $id_produto) <> 0) {
        if($id_categoria =='roupa'){
            $inf = "DELETE FROM info_alimento WHERE id_info_alimento = {$id_produto}";
            $query = mysqli_query($con, $inf);
        }
        if($id_categoria=='alimento'){
            $inf2 = "DELETE FROM info_alimento WHERE id_info_alimento = {$id_produto}";
            $query = mysqli_query($con, $inf2);
        }
    }
?>