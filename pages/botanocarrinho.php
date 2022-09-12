<?php
session_start();
if (isset($_GET['id_usu']) and $_GET['id_usu'] != 0) {
	header("location: ../index.php ");
	// se ele está logado ?
	#	> continuar
	# 	> redireciona pro login
	//	Se existe um carrinho ?
	#	> Select carrinho onde pessoa == pessoa da sessão
	#	> Criar um carrinho novo
	//$id_usu $id_pessoa
	//	$consulta2 ="INSERT INTO item_de_carrinho( fk_id_info_produto, fk_id_carrinho, quantidade) VALUES ('{$_GET['fk_id_info_produto']},'{$_GET['fk_id_carrinho']},'{$_GET['quantidade']}";
	//$query=mysqli_query($con, $consulta2);

	if (isset($_SESSION['id_usu']) and $_SESSION['id_usu'] == $result['id_usuario']) {
		//login

		/*if(){ //carrinho

			}else{

			}*/
	} else {
		echo '<div class="alert alert-danger" role="alert">Você não está Logado!</div>';
	}
}
