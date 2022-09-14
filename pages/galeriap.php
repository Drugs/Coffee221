<?php
session_start();
$title = 'GALERIA-PRODUTOS';
include '../include/database.php';
include '../include/header.php';
include '../include/nave-site.php';
$inf = "SELECT * FROM info_roupa JOIN produto ON id_produto = fk_id_produto";
$query = mysqli_query($con, $inf);
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);

$inf2 = "SELECT * FROM produto JOIN galeria ON id_produto = fk_id_produto";
$query = mysqli_query($con, $inf2);
$result2 = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>

<div class="container">
  <div class="mt-5 row d-flex justify-content-center align-items-center h-100">
    <div class="col-4">
      <div class="card" style="width: 18rem;">
        <?php
        $roupas = $result[0];
        $imagens = $result2[0];
        echo "
        <img src='../imagens/{$imagens['endereco']}' class='card-img-top'>
        <div class='card-body'>
          <p class='card-text'>{$roupas['descricao']}</p>
        </div>
      </div>";
        ?>
      </div>
      <div class="col-4">
        <div class="card" style="width: 18rem;">
          <img src="../Imagens/cf.png" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="card" style="width: 18rem;">
          <img src="../Imagens/cf1.png" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="card" style="width: 18rem;">
          <img src="../Imagens/cf.png" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="card" style="width: 18rem;">
          <img src="../Imagens/cf1.png" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="card" style="width: 18rem;">
          <img src="../Imagens/cf.png" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="card" style="width: 18rem;">
          <img src="../Imagens/cf1.png" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="card" style="width: 18rem;">
          <img src="../Imagens/cf.png" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="card" style="width: 18rem;">
          <img src="../Imagens/cf1.png" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div>



    </div>
  </div>



  <?php
  include '../include/rodape.php';
  include '../include/footer.php';
  ?>