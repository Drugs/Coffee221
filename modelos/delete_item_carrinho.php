<?php
//autor:Ana Clara
//arquivo com conexão com o BD
include'../include/header.php';
$title="delete item de carrinho";
include'../include/database.php';
$id=$_GET['var'];

if(isset($_GET['delete']) and $_GET['delete']==''){
    $consulta="DELETE from pessoa WHERE id_item_carrinho={$id}";
    $query=mysqli_query($con,$consulta);
    #header('Location:relatorio_item_de_carrinho.php');
}

?>


<body>
 <div class="container">
     <div class="row">
       <h3 class="text-center">Deleção de item de carrinho</h3>
        <div class="col-12">
        <h2 class="text-center">Tem Definitiva Absoluta Certeza que deseja deletar?</h2>
        <div class="mb-4">
          <a href="relatorio_item_de_carrinho.php" class="btn btn-secondary">voltar</a>
          <a href="delete_item_carrinho.php?delete=1&var=<?=$id?>" class="btn btn-danger">Deletar</a>
         </div>
     </div>
    </div>
</div>

<?php
include'../include/footer.php';
?>