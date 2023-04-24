<?php
//autor:Ana Clara
//arquivo com conexão com o BD
include '../include/header.php';
$title = "usuario relatorio";
include '../include/database.php';
$pesquisa = '';

if (isset($_GET['pesqui']) and $_GET['pesqui'] == 'busca') {
   $pesquisa = $_GET['busca'];
}
$consulta = "SELECT  *, id_pessoa,nome,pessoa.email,endereco, data ,usuario.email as login, nivel
from pessoa join usuario on id_pessoa = fk_id_pessoa where  pessoa.nome LIKE '%{$pesquisa}%' or
pessoa.email LIKE'%{$pesquisa}%' or pessoa.endereco LIKE '%{$pesquisa}%'
";

echo $consulta;
$query = mysqli_query($con, $consulta);
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);

?>

<body>
   <div class="container">
      <div class="row">
         <form action="" method="get">
            <div class="col-12">
               <input type="text" name="busca" class="form-control" />
            </div>

            <div class="col-2">
               <button type="pesqui" name='pesqui' value='busca' class="btn btn-warning">busca</button>
            </div>
         </form>

         <h1 style="margin-bottom: 1cm;margin-top:1cm;">Relatório usuario </h1>
         <a class="btn mb-3 btn-warning float-start" href="cadastro_usuario.php">cadastre-se</a>
         <div class="col-12">
            <table class="mt-3 table table-dark" style="box-shadow:10px 10px 50px  #000000,10px 10px 10px  #000000;">
               <thead class="table table-dark table-striped">
                  <tr>
                     <th scope="col">#</th>
                     <th scope="col">Nome</th>
                     <th scope="col">nivel</th>
                     <th scope="col">Email</th>
                     <th scope="col">Endereço</th>
                     <th scope="col">data</th>
                     <th scope="col">login</th>
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
     <td>{$pessoa['nivel']}</td>
     <td>{$pessoa['email']}</td>
     <td>{$pessoa['endereco']}</td>
     <td>{$pessoa['data']}</td>
     <td>{$pessoa['login']}</td>
     </td>
     <td><a class='btn btn-warning' href='update_usuario.php?var={$pessoa['id_pessoa']}'>Atualizar</a> 
     </td>
     <td><a class='btn btn-outline-warning' href='deletar_usuario.php?var={$pessoa['id_pessoa']}'>Deletar</a> </td>
               </tr>";
                  }

                  ?>

               </tbody>

            </table>
         </div>
      </div>
   </div>
   </div>

   <?php
   include '../include/footer.php';
   ?>