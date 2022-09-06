<?php 
	session_start();
	if(isset($_GET['id'])and $_GET['id']!=0){
		// se ele está logado ?
		#	> continuar
		# 	> redireciona pro login
		//	Se existe um carrinho ?
		#	> Select carrinho onde pessoa == pessoa da sessão
		#	> Criar um carrinho novo
        //$id_usu $id_pessoa
	//	$consulta="INSERT INTO item_de_carrinho( fk_id_info_produto, fk_id_carrinho, quantidade) VALUES ('{$_GET['fk_id_info_produto']},'{$_GET['fk_id_carrinho']},'{$_GET['quantidade']}";
		//$query=mysqli_query($con, $consulta);
		
     if(isset( )){ //login

			if(){ //carrinho

			}else{

			}
	 }else{
    echo'<div class="alert alert-danger" role="alert">Você não está Logado!</div>';
	 }
	}
?>