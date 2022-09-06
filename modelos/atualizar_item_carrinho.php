<?php
//autor: Bianca Nogueira
$title="Atualizar item de carrinho";
include'../include/header.php';
include'../include/database.php';
$id=$_GET['var'];

if(isset($_GET['submit']) and $_GET['submit']=='send'){
    $consulta = "UPDATE carrinho
     JOIN item_de_carrinho ON carrinho.id_carrinho = item_de_carrinho.fk_id_carrinho
      SET fk_id_info_produto='{$_GET['fk_id_info_produto']}', fk_id_carrinho='{$_GET['fk_id_carrinho']}'
      , quantidade = '{$_GET['quantidade']}'
      WHERE id_item_carrinho ={$_GET['var']}  ";

    echo $consulta;
    
    $query=mysqli_query ($con, $consulta);
      if($query){
      echo "Sucesso!!";
      header("Location:relatorio_item_de_carrinho.php");
      }else{
        echo "Fracasso";
      }
    }

    $consulta2="Select *, item_de_carrinho, carrinho from carrinho join item_de_carrinho
    on carrinho.id_carrinho=item_de_carrinho.fk_id_carrinho where carrinho.id_carrinho = 1
   ";
   // var_dump($consulta);
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
                            <input type="text" class="form-control" name='id_produto' value="<?php echo $result['fk_id_info_produto'];?>">
                             <label for="exampleFormControlInput1" class="form-label"><strong>ID do produto </strong></label>
                            </div>
                            
                            <div class="form-floating">
                            <input type="text" class="form-control" name='carrinho' value="<?php echo $result['fk_id_carrinho'];?>">
                                <label for="exampleFormControlInput1" class="form-label"><strong>ID do carrinho</strong></label>
                            </div>
                            <div class="form-floating" style="margin-bottom: 5mm;">
                                 <input type="text" class="form-control" name='quantidade' value="<?php echo $result['quantidade'];?>">
                                <label for="exampleFormControlInput1" class="form-label"><strong>Quantidade</strong></label>
                            </div>

                            <input type="hidden" name="var" value="<?php echo $_GET['var'];?>" />
                            <div class="row">
                                <div class="col-6">
                                    <a class="w-100 btn btn-lg btn-secondary" href="cadastro_item_de_carrinho.php">Voltar</a>
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