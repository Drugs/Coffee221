<?php
//autor:Ana Clara
//arquivo com conexão com o BD
include'../include/header.php';
$title = "relatorio";
include'../include/database.php';
$consulta = "select * from pessoa";
$query = mysqli_query($con, $consulta);
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
#echo "<pre>";
#var_dump($result);
#echo "</pre>";
?>

<body>
  <div class="container">
    <div class="row">
      <h1 style="margin-bottom:1cm;margin-top:1cm;">cadastro pessoas</h1>
      <a class="btn mb-3 btn-warning float-start" href="cd_pessoas.php">cadastre-se</a>
      <div class="col-12">
        <table class="mt-3 table table-dark" style="box-shadow:10px 10px 50px  #000000,10px 10px 10px  #000000;">
          <thead class="table table-dark table- striped">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nome</th>
              <th scope="col">Email</th>
              <th scope="col">Telefone</th>
              <th scope="col">Endereço</th>
              <th scope="col">Pais</th>
              <th scope="col">Atualizar</th>
              <th scope="col">Deletar</th>
            </tr>
          </thead>





          <tbody>
            <?php

            foreach ($result as $pessoa) {
              echo "
  <tr>
      <th scope='row'>{$pessoa['id_pessoa']}</th>
     <td>{$pessoa['nome']}</td>
     <td>{$pessoa['email']}</td>
     <td>{$pessoa['telefone']}</td>
     <td>{$pessoa['endereco']}</td>
     <td>{$pessoa['pais']}</td>

     <td><a class='btn btn-warning' href='atualizar_cd.php?var={$pessoa['id_pessoa']}'>Atualizar</a> 
     </td>
       <td> <a class='btn btn-outline-warning' href='delete_cd.php?var={$pessoa['id_pessoa']}'>Deletar</a>
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
  include'../include/footer.php';
  ?>