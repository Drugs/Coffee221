<?php 
session_start();
include '../include/database.php';

if(isset($_SESSION['id_usu']) and isset($_SESSION['id_pessoa'])){
	echo "o usuário existe."; 
		$consulta='Select * From carrinho Where fk_id_pessoa = '.$_SESSION['id_pessoa'];
       var_dump($consulta);
	   $query= mysqli_query($con,$consulta);
	   $carrinho = mysqli_fetch_assoc($query);
     echo $carrinho['id_carrinho'];
	 if(isset($carrinho['id_carrinho'] ) and $carrinho['id_carrinho'] != 0 ){ //se ele passar ele tem um carrinho 

	 }else{ //nao tem carrinho
		$data=date(" Y-n-j");
		$consulta2 = "INSERT INTO `carrinho`(`fk_id_pessoa`, `data`, `status`) VALUES ('{$_SESSION['id_pessoa']}','{$data}',1)";
		echo $consulta2;
		$query= mysqli_query($con,$consulta2);
	 }
	}else{
	echo "o usuário não existe.";
	//header("Location:login.php?login=inexistente");
	}
?>