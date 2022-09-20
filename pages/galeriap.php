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
JOIN info_roupa ON info_roupa.fk_id_produto = produto.id_produto
Join galeria on galeria.fk_id_produto = produto.id_produto
WHERE produto.nome_produto LIKE '%%' OR produto.categoria LIKE '%%'";
$query = mysqli_query($con, $inf1);
$produtos1 = mysqli_fetch_all($query, MYSQLI_ASSOC);
//------------------------------------------------------------------------------
$inf2 = "SELECT *, SUBSTRING(descricao, 1, 50) AS descricao FROM `produto` 
JOIN info_alimento ON info_alimento.fk_id_produto = produto.id_produto
Join galeria on galeria.fk_id_produto = produto.id_produto
WHERE produto.nome_produto LIKE '%%' OR produto.categoria LIKE '%%'";
$query = mysqli_query($con, $inf2);
$produtos2 = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>

<div class="container">
  <div class='mt-5 row d-flex justify-content-center align-items-center h-100'>
    <?php
    foreach ($produtos1 as $roupas) {
      if (isset($roupas['categoria']) and $roupas['categoria'] == 'roupa') {
        echo "
            <div class='col-4'>
              <div class='card' style='width: 18rem;'>
                <a href='produto.php?produto={$roupas['id_produto']}'><img src='../imagens/{$roupas['endereco']}' class='card-img-top' style='max-width:350px; max-height:350px;'></a>
                <div class='card-text feed-item-body post-body'>
								  <div style='vertical-align: inherit;'>
									  <h2 class='text-center'>{$roupas['nome_produto']}</h2>
								  </div>
                  <div class='card-body'>
                    <p class='card-text'>{$roupas['descricao']}...</p>
                  </div>
                  <div class='d-flex justify-content-between align-items-center'>
                    <div class='btn-group' id='roupa{$roupas["id_info_roupa"]}'>
                      <button type='button' onclick=\"carrinho({$roupas["id_info_roupa"]},'roupa')\" class='btn btn-sm btn-outline-secondary'>Adicionar ao carrinho</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>";
      }
    }
    foreach ($produtos2 as $alimentos) {
      if (isset($alimentos['categoria']) and $alimentos['categoria'] == 'alimento') {
        echo "
            <div class='col-4'>
              <div class='card' style='width: 18rem;'>
                <a href='alimento.php?produto={$alimentos['id_produto']}'><img src='../imagens/{$alimentos['endereco']}' class='card-img-top' style='max-width:350px; max-height:290px;'></a>
                <div class='card-text feed-item-body post-body'>
                  <div style='vertical-align: inherit;'>
                    <h2 class='text-center'> {$alimentos['sabor']}</h2>
                  </div>
                  <div class='card-body'>
                    <p class='card-text'>{$alimentos['descricao']}...</p>
                  </div>
                  <div class='d-flex justify-content-between align-items-center'>
									<div class='btn-group' id='alimento{$alimentos["id_info_alimento"]}'>
										<button type='button' onclick=\"carrinho({$alimentos["id_info_alimento"]},'alimento')\" class='btn btn-sm btn-outline-secondary'>Adicionar ao carrinho</button>
									</div>
								</div>
                </div>
              </div>
            </div>";
      }
    }
    ?>
  </div>
</div>
<script>
		// AJAX do carrinho de compras
		function carrinho(id_info_produto, categoria) {
			let id_produto = document.getElementById(id_info_produto)
			let cat = document.getElementById(categoria)

			if (categoria == 'roupa') {
				console.log(categoria)
			}
			if (categoria == 'alimento') {
				console.log(categoria)

			}
			//id info produto, 
			//categoria: alimento ou roupa
			//console.log(id_info_prod)
			var xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					let coiso = document.getElementById(categoria+id_info_produto)
					coiso.innerHTML = this.responseText
				}
			}
			xmlhttp.open("GET", "botanocarrinho.php?id=" + id_info_produto + "&cat=" + categoria);
			xmlhttp.send();
		}
	</script>
<?php
include '../include/rodape.php';
include '../include/footer.php';
?>