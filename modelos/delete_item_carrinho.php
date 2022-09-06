<?php
//autor:Ana Clara
//arquivo com conexão com o BD
$title="delete item de carrinho";
include'../include/header.php';
$title="delete";
include'../include/database.php';
$id=$_GET['var'];

if(isset($_GET['delete']) and $_GET['delete']==1){
    $consulta="DELETE from item_de_carrinho WHERE id_item_carrinho={$id}";
    $query=mysqli_query($con,$consulta);
    echo $consulta;
    header('Location:relatorio_item_de_carrinho.php');
}

?>


<body>
<div class="container">
   <div class="row">
       <h3 class="text-center">Deleção de item de carrinho</h3>
      <div class="col-10">
        <h2 class="text-center">Tem Definitiva Absoluta Certeza que deseja deletar?</h2>
        <a href="relatorio_item_de_carrinho.php" class="btn btn-secondary">voltar</a>
        <a href="delete_item_carrinho.php?delete=1&var=<?=$id?>" class="btn btn-danger">Deletar</a>
     </div>
   </div>
</div>

<?php
include'../include/footer.php';
?>