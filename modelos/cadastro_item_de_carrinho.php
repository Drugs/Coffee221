<?php
//autor:Ana Clara
//arquivo com conexão com o BD
include'../include/header.php';
$title="usuario cadastro";
include'../include/database.php';

#echo'<pre>';
#var_dump($_GET);
#echo'</pre>';
if(isset($_GET['submit'])and $_GET['submit']=='send'){
    echo'<pre>';
    var_dump($_GET);
    echo'</pre>';
        $consulta="INSERT INTO item_de_carrinho(nome, fk_id_info_produto, fk_id_carrinho, quantidade)
         VALUES ('{$_GET['nome']},'{$_GET['fk_id_info_produto']},'{$_GET['fk_id_carrinho']},'{$_GET['quantidade']})";
          $query=mysqli_query($con, $consulta);
          SELECT *, id_item_carrinho FROM carrinho  join item_de_carrinho on carrinho.id_carrinho=item_de_carrinho.fk_id_carrinho WHERE carrinho.id_carrinho=1;
        echo$consulta;
          
            header("Location:relatorio_item_de_carrinho.php");

          
        }
    ?>

<form action="" method="get">
            <h1 class="text-center" style="margin-top: 1cm;">Cadastro item de carrinho</h1>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-6">
                        <div class="col-12">
                      
                            <div class="form-floating">
                                <input type="number" class="form-control" name='fk_id_info_produto'>
                                <label for="exampleFormControlInput1" class="form-label"><strong>Id_produto</strong></label>
                            </div>
                            <div class="form-floating">
                                <input type="number" class="form-control" name='fk_id_carrinho'>
                                <label for="exampleFormControlInput1" class="form-label"><strong>Id_carrinho</strong></label>
                            </div>
                            <div class="form-floating" style="margin-bottom: 5mm;">
                                <input type="text" class="form-control" name='quantidade'>
                                <label for="exampleFormControlTextarea1" class="form-label"><strong>Quantidade</strong></label>
                            </div>


                        

                           
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
  include '../include/footer.php';
  ?>