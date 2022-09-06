<<<<<<< Updated upstream
<?php 
	session_start();
	#echo 'O id é: '.$_GET['id'];
	if(isset($_GET['id'])and $_GET['id']!=0){
		// se ele está logado ?
		#	> continuar
		# 	> redireciona pro login
		//	Se existe um carrinho ?
		#	> Select carrinho onde pessoa == pessoa da sessão
		#	> Criar um carrinho novo
		$consulta="INSERT INTO item_de_carrinho( fk_id_info_produto, fk_id_carrinho, quantidade) VALUES ('{$_GET['fk_id_info_produto']},'{$_GET['fk_id_carrinho']},'{$_GET['quantidade']})";
		$query=mysqli_query($con, $consulta);
		#header("Location:relatorio_item_de_carrinho.php");
	}
=======
<?php
echo 'O id é:'.$_GET['id'];
>>>>>>> Stashed changes
?>