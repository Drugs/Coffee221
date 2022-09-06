<?php
//autor:Ana Clara
//arquivo com conexão com o BD
include '../include/header.php';
$title = "relatorio item de carrinho";
include '../include/database.php';
$consulta = "select * from item_de_carrinho";
$query = mysqli_query($con, $consulta);
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
#echo "<pre>";
#var_dump($result);
#echo "</pre>";
?>

<body>
  <div class="container">
    <div class="row">
      <h1 style="margin-bottom:1cm;margin-top:1cm;">Cadastro item carrinho</h1>
      <a class="btn mb-3 btn-warning float-start" href="cadastro_item_de_carrinho.php">cadastar</a>
      <div class="col-12">
        <table class="mt-3 table table-dark" style="box-shadow:10px 10px 50px  #000000,10px 10px 10px  #000000;">
          <thead class="table table-dark table- striped">
            <tr>
              <th scope="col">#</th>
              <th scope="col">id_produto</th>
              <th scope="col">id_carrinho</th>
              <th scope="col">Quantidade</th>
              <th scope="col">Atualizar</th>
              <th scope="col">Deletar</th>
            </tr>
          </thead>





          <tbody>
            <?php

            foreach ($result as $item_carrinho){
              echo "
  <tr>
      <th scope='row'>{$item_carrinho['id_item_carrinho']}</th>
     <td>{$item_carrinho['fk_id_info_produto']}</td>
     <td>{$item_carrinho['fk_id_carrinho']}</td>
     <td>{$item_carrinho['quantidade']}</td>

     <td><a class='btn btn-warning' href='atualizar_item_carrinho.php?var={$item_carrinho['id_item_carrinho']}'>Atualizar</a> 
     </td>
       <td> <a class='btn btn-outline-warning' href='delete_item_carrinho.php?var={$item_carrinho['id_item_carrinho']}'>Deletar</a>
       </td>
  </tr>";
            }

            ?>

          </tbody>

        </table>
      </div>
    </div>
  </div>

  <?php
  include '../include/footer.php';
  ?>