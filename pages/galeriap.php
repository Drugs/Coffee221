<?php
session_start();
$title = 'GALERIA-PRODUTOS';
include '../include/database.php';
include '../include/header.php';
include '../include/nave-site.php';
$inf = "SELECT * FROM `produto` join galeria on galeria.fk_id_produto = produto.id_produto;";
$query = mysqli_query($con, $inf);
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);

?>

<div class="container">
  <div class='mt-5 row d-flex justify-content-center align-items-center h-100'>
    <div class='col-12'>
      <div class='row'>
        <div class='col-6'>
          <?php
          foreach ($result as $roupas) {
            echo "
              <div class='card' style='width: 18rem;'>
                <a href='produto.php?produto={$roupas['id_produto']}'><img src='../imagens/{$roupas['endereco']}' class='card-img-top'></a>
                <div class='card-body'>
                  <p class='card-text'>{$roupas['descricao']}</p>
                </div>
            </div>";
          }
          ?>
        </div>
      </div>
    </div>
  </div>
</div>




<?php
include '../include/rodape.php';
include '../include/footer.php';
?>