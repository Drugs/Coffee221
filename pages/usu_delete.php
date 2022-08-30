<?php
//autor:Ana Clara
//arquivo com conexão com o BD
include'../include/header.php';
$title="delete";
include'../include/database.php';
$id=$_GET['var'];

if(isset($_GET['delete']) and $_GET['delete']==''){
    $consulta="DELETE from pessoa WHERE id_pessoa={$id}";
    $query=mysqli_query($con,$consulta);
    #header('Location:usuario_cd.php');
}

?>


<body>
 <div class="container">
     <div class="row">
       <h3 class="text-center"> Deleção de usuario</h3>
        <div class="col-12">
        <h2 class="text-center">Tem Definitiva Absoluta Certeza que deseja deletar?</h2>
        <div class="mb-4">
          <a href="usuario_cd.php" class="btn btn-secondary">voltar</a>
          <a href="usu_delete.php?delete=1&var=<?=$id?>" class="btn btn-danger">Deletar</a>
         </div>
     </div>
    </div>
</div>

<?php
include'../include/footer.php';
?>