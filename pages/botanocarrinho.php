<?php
//Bianca
session_start();
include '../include/database.php';

$id_produto = $_GET['id']; //id do produto
$categoria = $_GET['categoria'];

$id_produto = $_GET['id']; //id do produto
$categoria = $_GET['categoria'];


if (isset($_GET['id']) and $_GET['id'] != 0) { //se produto existe passa
	if (isset($_SESSION['id_usu']) and isset($_SESSION['id_pessoa'])) {
		//echo "o usuário existe."; 

		$consulta = 'Select * From carrinho Where fk_id_pessoa = ' . $_SESSION['id_pessoa'];
		var_dump($consulta);
		$query = mysqli_query($con, $consulta);
		$carrinho = mysqli_fetch_assoc($query);


		if (isset($carrinho['id_carrinho']) and $carrinho['id_carrinho'] != 0) { //se ele passar ele tem um carrinho 
			$id_caro = $carrinho['id_carrinho'];
		} else { //nao tem carrinho
			$data = date(" Y-n-j");
			$consulta2 = "INSERT INTO `carrinho`(`fk_id_pessoa`, `data`, `status`) VALUES ('{$_SESSION['id_pessoa']}','{$data}',1)";
			$query = mysqli_query($con, $consulta2);
			$id_caro = $query->insert_id; //id do carrinho	
		}
		$consulta4 = "Select * From item_de_carrinho Where fk_id_info_produto = {$id_produto} and fk_id_carrinho = {$id_caro}";
		$query = mysqli_query($con, $consulta4);
		$item = mysqli_fetch_assoc($query);

		if (isset($item['fk_id_info_produto']) and $item['fk_id_info_produto'] != 0) { //Alerta e tchau.
			echo '<div class="alert alert-warning" role="alert"> O item já está adicionado no carrinho!</div>';
		} else { //se nao está no carrinho coloca o item
			$consulta3 = "INSERT INTO `item_de_carrinho`( `fk_id_info_produto`, `fk_id_carrinho`, `categoria`,`quantidade`) VALUES ({$id_produto}, {$id_caro}, {$categoria}, 1)";
			$query = mysqli_query($con, $consulta3);
			echo '<div class="alert alert-success" role="alert"> Item adicionado no carrinho com sucesso!</div>';
		}
	} else {

		//echo "o usuário não existe.";
		header("Location:login.php?login=inexistente");
	}
} else { //se produto nao existe die()
	die();
}
