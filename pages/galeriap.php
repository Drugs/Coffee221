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
$inf1 = "SELECT *, SUBSTRING(descricao, 1, 50) AS descricao FROM `produto` 
join galeria on galeria.fk_id_produto = produto.id_produto
WHERE produto.nome_produto LIKE '%%' OR produto.categoria LIKE '%%'";
$query = mysqli_query($con, $inf1);
$produtos1 = mysqli_fetch_all($query, MYSQLI_ASSOC);
//------------------------------------------------------------------------------
$inf2 = "SELECT *, SUBSTRING(descricao, 1, 50) AS descricao FROM `produto` 
join galeria on galeria.fk_id_produto = produto.id_produto
WHERE produto.nome_produto LIKE '%%' OR produto.categoria LIKE '%%'";
echo $inf2;
$query = mysqli_query($con, $inf2);
$produtos2 = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>

<div class="container">
  <div class='mt-5 row d-flex justify-content-center align-items-center h-100'>
    <?php
    foreach ($produtos1 as $roupas) {
      if (isset($roupas['categoria']) and $roupas['categoria'] == 'Roupa') {
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
    }
    foreach ($produtos2 as $alimentos) {
      if (isset($alimentos['categoria']) and $alimentos['categoria'] == 'Alimento') {
        echo "
            <div class='col-6'>
              <div class='card' style='width: 18rem;'>
                <a href='alimento.php?produto={$alimentos['id_produto']}'><img src='../imagens/{$alimentos['endereco']}' class='card-img-top'></a>
                <div class='card-text feed-item-body post-body'>
                  <div style='vertical-align: inherit;'>
                    <h2 class='text-center'>{$alimentos['nome_produto']}</h2>
                  </div>
                  <div class='card-body'>
                    <p class='card-text'>{$alimentos['descricao']}...</p>
                  </div>
                </div>
              </div>
            </div>";
      }
    }
    ?>
  </div>
</div>

<?php
include '../include/rodape.php';
include '../include/footer.php';
?>