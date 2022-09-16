<?php
session_start();
$title = 'The COFFEE\'N\'JOIN';
include './include/database.php';
include './include/header.php';
include './include/nave.php';
$pesquisa = '';
if (isset($_GET["submit"]) and $_GET["submit"] == "buscar") {
	$pesquisa = $_GET['buscar'];
}
$inf = "SELECT *, SUBSTRING(descricao, 1, 50) AS descricao FROM `produto` JOIN galeria ON galeria.fk_id_produto = produto.id_produto
WHERE produto.nome_produto LIKE '%{$pesquisa}%' OR produto.categoria LIKE '%{$pesquisa}%' LIMIT 4";
$query = mysqli_query($con, $inf);
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>

<body class="responsive">
	<!-- JavaScript da Home -->
	<script>
		// AJAX do carrinho de compras
		function carrinho(id_info_prod, categoria) {
			let idproduto = document.getElementById(id_info_prod)
			console.log(idproduto)
			//id info produto, 
			//categoria: alimento ou roupa
			//console.log(id_info_prod)
			var xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					console.log(this.responseText)
				}
			}
			xmlhttp.open("GET", "pages/botanocarrinho.php?id=" + id_info_prod + "&cat=" + categoria);
			xmlhttp.send();
		}
	</script>

	<!-- Slider da Home do site -->
	<div class="col-12 col-xl-12 slider">
		<div id="cafeb" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#cafeb" data-bs-slide-to="0" class="active slide-button" aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#cafeb" data-bs-slide-to="1" class="slide-button" aria-label="Slide 2"></button>
				<button type="button" data-bs-target="#cafeb" data-bs-slide-to="2" class="slide-button" aria-label="Slide 3"></button>
				<button type="button" data-bs-target="#cafeb" data-bs-slide-to="3" class="slide-button" aria-label="Slide 4"></button>
			</div>
			<div class="carousel-inner center-block">
				<div class="carousel-item active">
					<img src="Imagens/cafe1.png" class="d-block w-100" alt="..." height="480px;">
				</div>
				<div class="carousel-item">
					<img src="Imagens/cafe2.png" class="d-block w-100" alt="..." height="480px;">
				</div>
				<div class="carousel-item">
					<img src="Imagens/cafe3.png" class="d-block w-100" alt="..." height="480px;">
				</div>
				<div class="carousel-item">
					<img src="Imagens/cafe4.png" class="d-block w-100" alt="..." height="480px;">
				</div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#cafeb" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#cafeb" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>
	</div>
	<!-- Cards da Home do site -->
	<div class="container">
		<div class="row justify-content-evenly mt-5">
			<?php
			foreach ($result as $roupas) {
				echo "
				<div class='col-md-3'>
					<div class='card shadow-sm'>
						<div class='card-body'>
							<a href='pages/produto.php?produto={$roupas['id_produto']}'><img src='imagens/{$roupas['endereco']}' class='card-img-top'></a>
							<div class='card-text feed-item-body post-body'>
								<div style='vertical-align: inherit;'>
									<h2 class='text-center'>{$roupas['nome_produto']}</h2>
								</div>
								<div style='vertical-align: inherit;'>
									<p class='bia'>{$roupas['descricao']}...</p>
								</div>
								<div class='d-flex justify-content-between align-items-center'>
									<div class='btn-group'>
										<button type='button' onclick='carrinho(id_info_prod, categoria)' class='btn btn-sm btn-outline-secondary'>Adicionar ao carrinho</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>";
			}
			?>
		</div>
	</div>
	<!-- Parallax -->
	<div class="mt-2 mb-2 parallax-home"></div>
	<!-- Cards Home do site -->
	<div class="container">
		<div class="row justify-content-evenly">

			<div class="col-md-4">
				<div class="card shadow-sm ">
					<img src="./Imagens/fototeste.jpg" heigth=''>
					<div class="card-body">
						<p class="card-text">
						<div style="vertical-align: inherit;">
							<div style="vertical-align: inherit;">
								<h2 class="text-center">Grão de café PREMIUM </h2>
							</div>
							<div style="vertical-align: inherit;">
								<h6 class="car">Nossa mais nova capsula Caramelo Cremoso, uma explosão de sabores com a doçura na medida certa. Com notas de baunilha com canela e o nosso mais refinado caramelo.</h6>
							</div>
						</div>
						</p>
						<div class="d-flex justify-content-between align-items-center">
							<div class="btn-group">
								<button type="button" id='alvo' onclick='carrinho()' class="btn btn-sm btn-outline-secondary">Adicionar ao carrinho</button>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="card shadow-sm ">
					<img src="./Imagens/fototeste.jpg" heigth="">
					<div class="card-body">
						<p class="card-text">
						<div style="vertical-align: inherit;">
							<div style="vertical-align: inherit;">
								<h2 class="text-center">Caramelo Cremoso </h2>
							</div>
							<div style="vertical-align: inherit;">
								<h6 class="car">Nossa mais nova capsula Caramelo Cremoso, uma explosão de sabores com a doçura na medida certa. Com notas de baunilha com canela e o nosso mais refinado caramelo.</h6>
							</div>
						</div>
						</p>
						<div class="d-flex justify-content-between align-items-center">
							<div class="btn-group">
								<button type="button" id='alvo' onclick='carrinho()' class="btn btn-sm btn-outline-secondary">Adicionar ao carrinho</button>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="card shadow-sm ">
					<img src="./Imagens/fototeste.jpg" heigth="">
					<div class="card-body">
						<p class="card-text">
						<div style="vertical-align: inherit;">
							<div style="vertical-align: inherit;">
								<h2 class="text-center">Caramelo Cremoso </h2>
							</div>
							<div style="vertical-align: inherit;">
								<h6 class="car">Nossa mais nova capsula Caramelo Cremoso, uma explosão de sabores com a doçura na medida certa. Com notas de baunilha com canela e o nosso mais refinado caramelo.</h6>
							</div>
						</div>
						</p>
						<div class="d-flex justify-content-between align-items-center">
							<div class="btn-group">
								<button type="button" id='alvo' onclick='carrinho()' class="btn btn-sm btn-outline-secondary">Adicionar ao carrinho</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php
	include './include/rodape.php';
	include './include/footer.php';
	?>