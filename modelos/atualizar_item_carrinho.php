<?php
//autor: Bianca Nogueira
$title="Atualizar item de carrinho";
include'../include/header.php';
include'../include/database.php';
session_start();
$id=$_GET['var'];

    if(isset($_GET['submit']) and $_GET['submit']=='send'){
		$teste="select * from carrinho where id_carrinho={$_GET['fk_id_carrinho']}";
		$query=mysqli_query ($con, $teste);

		if(mysqli_num_rows($query)){
			echo 'tem o carrinho';
			$consulta = "UPDATE item_de_carrinho
			SET fk_id_info_produto='{$_GET['fk_id_info_produto']}', fk_id_carrinho='{$_GET['fk_id_carrinho']}'
			, quantidade = '{$_GET['quantidade']}'
			WHERE id_item_carrinho ={$_GET['var']} ";
			$query=mysqli_query ($con, $consulta);
			header("Location:relatorio_item_de_carrinho.php");
            
		}else{
        
			header("Location:relatorio_item_de_carrinho.php?submit=erro");
		}
		
      } 
    $consulta2="SELECT *
    from carrinho 
    join item_de_carrinho 
    on carrinho.id_carrinho=item_de_carrinho.fk_id_carrinho 
    where id_item_carrinho =  {$id};
    ";
   var_dump($consulta2);
    $query=mysqli_query($con, $consulta2);
    $result = mysqli_fetch_assoc($query);

?>


<body>

<form action="" method="get">
        <h1 class="text-center" style="margin-top: 1cm;" >Atualização de Item de Carrinho</h1>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-6">
                        <div class="col-12">
                            <div class="form-floating" style="margin-top: 1cm;">
                            <input type="number" class="form-control" name='fk_id_info_produto' value="<?php echo $result['fk_id_info_produto'];?>">
                             <label for="exampleFormControlInput1" class="form-label"><strong>Id_produto </strong></label>
                            </div>
                            
                            <div class="form-floating">
                            <input type="number" class="form-control" name='fk_id_carrinho' value="<?php echo $result['fk_id_carrinho'];?>">
                                <label for="exampleFormControlInput1" class="form-label"><strong>Id_carrinho</strong></label>
                            </div>
                            <div class="form-floating" style="margin-bottom: 5mm;">
                            <input type="number" class="form-control" name='quantidade' value="<?php echo $result['quantidade'];?>">
                                <label for="exampleFormControlInput1" class="form-label"><strong>Quantidade</strong></label>
                            </div>

                            <input type="hidden" name="var" value="<?php echo $_GET['var'];?>" />
                            <div class="row">
                                <div class="col-6">
                                    <a class="w-100 btn btn-lg btn-secondary" href="relatorio_item_de_carrinho.php">Voltar</a>
                         </div>
                            <div class="col-6">
                                <button type="submit" name='submit' value='send' class="w-100 btn btn-lg btn-primary">Enviar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

<?php
include'../include/footer.php';
?>




