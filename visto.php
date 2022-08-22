<!DOCTYPE html>
<html>
    <head>
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"> <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css">
        
</head>
<?php
session_start();
if(isset($_SESSION['nivel'])and $_SESSION['nivel']< 1){
}else{
  echo"você não tem acesso fulano .";
  die();
}
$title="CRUD-RELATORIO";
$host ="localhost";
$user ="root";
$pass ="";
$db ="pessoa";
$con = mysqli_connect ($host,$user,$pass,$db);
$consulta = "select * from pessoa";
$query = mysqli_query($con, $consulta);
$result =mysqli_fetch_all($query, MYSQLI_ASSOC);
#echo "<pre>";
#var_dump($result);
#echo "</pre>";

?>


<body  style="background-color"; >

  <div class="container">
    <div class="row">
      <h1 stlyle="margin-botton:1cm;margin-top:1cm;">Lista negra </h1>
      <a class="btn mb-3 bnt-sucess float-start" href="rever.php"> Seja o próximo</a>
      <div class="col-12">
               <table class="mt-3 table table-dark" stlyle="box-shadow:10px 10px 50px#D30000,10px 10px 10px #9644C2;">
                <thead class="table table-dark table- striped">
                <tr>
                <th scope="col">#</th>  
                 <th scope="col">Nome</th>
                 <th scope="col">Telefone</th>
                 <th scope="col">Email</th>
                 <th scope="col">Endereço</th>
                 <th scope="col">Pais</th>
                 <th scope="col">Atualizar</th>
                <th scope="col">Deletar</th> 
                 </tr>
                  </thead>
                  <tbody>
                    <?php
                  
  foreach($result as $pessoa){
     echo"
      <tr>
      <th scope='row'>{$pessoa['Pessoa_id']}</th>
     <td>{$pessoa['nome']}</td>
     <td>{$pessoa['telefone']}</td>
     <td>{$pessoa['email']}</td>
     <td>{$pessoa['endereco']}</td>
     <td>{$pessoa['pais']}</td>
     <td><a class='btn btn-warning' href='crudUpdate.php?var={$pessoa['Pessoa_id']}'>Atualizar</a> 
     </td>
     <td><a class='btn btn-outline-warning' href='crudeleta.php?var={$pessoa['Pessoa_id']}'>Deletar</a> </td>
               </tr>";
                 }
                 
               ?>
                 
                 </tbody>

        </table>
        </div>
     </div>
    </div>
  
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script> 

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
     

  
    
  </html>
  </body>