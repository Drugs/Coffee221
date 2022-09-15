<?php
session_start();
$title = 'GALERIA-PRODUTOS';
include '../include/database.php';
include '../include/header.php';
include '../include/nave-site.php';
$pesquisa = '';
if (isset($_GET["submit"]) and $_GET["submit"] == "buscar") {
  $pesquisa = $_GET['buscar'];
}
$inf = "SELECT *, SUBSTRING(descricao, 1, 50) AS descricao FROM `produto` join galeria on galeria.fk_id_produto = produto.id_produto
WHERE produto.nome_produto LIKE '%{$pesquisa}%' OR produto.categoria LIKE '%{$pesquisa}%'";
$query = mysqli_query($con, $inf);
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);

?>


<div class="container">
  <div class='mt-5 row d-flex justify-content-center align-items-center h-100'>
    <?php
    foreach ($result as $roupas) {
      echo "
            <div class='col-6'>
              <div class='card' style='width: 18rem;'>
                <a href='produto.php?produto={$roupas['id_produto']}'><img src='../imagens/{$roupas['endereco']}' class='card-img-top'></a>
                <div class='card-text feed-item-body post-body'>
								  <div style='vertical-align: inherit;'>
									  <h2 class='text-center'>{$roupas['nome_produto']}</h2>
								  </div>
                  <div class='card-body'>
                    <p class='card-text'>{$roupas['descricao']}...</p>
                  </div>
                </div>
              </div>
            </div>";
    }
    ?>
  </div>
</div>

<?php
include '../include/rodape.php';
include '../include/footer.php';
?>