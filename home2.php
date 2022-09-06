<?php
$title = 'The COFFEE\'N\'JOIN';
include './include/header.php';
include './include/nave.php'
?>
<body class="parallax-home">
	<script>
			function rodinhas(id_info_prod){
				console.log(id_info_prod)
				var xmlhttp = new XMLHttpRequest();
				xmlhttp.onreadystatechange = function(){
					if (this.readyState==4 && this.status==200) {
						console.log(this.responseText)
					}
				}
				xmlhttp.open("GET", "pages/botanocarrinho.php?id=" + id_info_prod);
				xmlhttp.send();
			}
		</script>
	<!-- Slider da Home do site -->
	<div class="container slider">
		<div class="row">
			<div class="col-12 col-xl-12">
				<div id="cafeb" class="carousel slide mt-1" data-bs-ride="carousel">
					<div class="carousel-inner center-block">
						<div class="carousel-item active">
							<img src="Imagens/cafe1.png" class="d-block w-100" alt="..." height="480px;">
						</div>
						<div class="carousel-item">
							<img src="Imagens/choa.png" class="d-block w-100" alt="..." height="480px;">
						</div>
						<div class="carousel-item">
							<img src="Imagens/cofe3.png" class="d-block w-100" alt="..." height="480px;">
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
		</div>
	</div>
	<!-- Cards da Home do site -->
	<div class="row justify-content-evenly mt-5">

		<div class="col-md-3">
			<div class="card shadow-sm">
				<img src="./Imagens/fototeste.jpg" heigth=''>
				<div class="card-body">
					<p class="card-text">
						<font style="vertical-align: inherit;">
							<font style="vertical-align: inherit;">
								<h2 class="text-center">Grão de café</h2>
							</font>
							<font style="vertical-align: inherit;">
								<h6>Maior seletividade de grãos, sabor acentuado com notas de uma torra de qualidade tendo sua humidade e sabor prezervados.</h6>
							</font>
						</font>
					</p>
					<div class="d-flex justify-content-between align-items-center">
						<div class="btn-group">
							<button type="button" id='alvo' onclick='rodinhas(1)' class="btn btn-sm btn-warning">Adicionar ao carrinho</button>
						</div>
						<small class="text-muted">
							<font style="vertical-align: inherit;">
								<font style="vertical-align: inherit;">COFFE'JOIN</font>
							</font>
						</small>
					</div>
				</div>
			</div>
		</div>
		
		<div class="col-md-3">
			<div class="card shadow-sm">
				<img src="./Imagens/fototeste.jpg" heigth="">
				<div class="card-body">
					<p class="card-text">
						<font style="vertical-align: inherit;">
							<font style="vertical-align: inherit;">
								<h2 class="text-center">Caramelo Cremoso </h2>
							</font>
							<font style="vertical-align: inherit;">
								<h6>Capsula Caramelo Cremoso, uma explosão de sabores com a doçura na medida certa. Com notas de baunilha com canela e caramelo.</h6>
							</font>
						</font>
					</p>
					<div class="d-flex justify-content-between align-items-center">
						<div class="btn-group">
							<button type="button" class="btn btn-sm btn-outline-secondary">

								<font style="vertical-align: inherit;">Mais</font>
								</font>
							</button>
						</div>
						<small class="text-muted">
							<font style="vertical-align: inherit;">
								<font style="vertical-align: inherit;">COFFE'JOIN</font>
							</font>
						</small>
					</div>
				</div>
			</div>
		</div>

		<div class="col-md-3">
			<div class="card shadow-sm">
				<img src="./Imagens/fototeste.jpg" heigth="">
				<div class="card-body">
					<p class="card-text">
						<font style="vertical-align: inherit;">
							<font style="vertical-align: inherit;">
								<h2 class="text-center">Cafeteira Delux</h2>
							</font>
							<font style="vertical-align: inherit;">
								<h6>Procura menos gastos de energia e maior eficiencia quando falamos de cafeteira? Então vocè achou a Cafeteira Delux COFFE'JOIN te entrega tudo isso e mais um pouco, atribuindo o processador de grãos e a cabine para capsulas de café.</h6>
							</font>
						</font>
					</p>
					<div class="d-flex justify-content-between align-items-center">
						<div class="btn-group">
							<button type="button" class="btn btn-sm btn-outline-secondary">
								<font style="vertical-align: inherit;">
									<font style="vertical-align: inherit;">Mais</font>
								</font>
							</button>
						</div>
						<small class="text-muted">
							<font style="vertical-align: inherit;">
								<font style="vertical-align: inherit;">COFFE'JOIN</font>
							</font>
						</small>
					</div>
				</div>
			</div>
		</div>

		<div class="col-md-4">
			<div class="card shadow-sm">
				<img src="./Imagens/fototeste.jpg" heigth=''>
				<div class="card-body">
					<p class="card-text">
						<font style="vertical-align: inherit;">
							<font style="vertical-align: inherit;">
								<h2 class="text-center">Grão de café PREMIUM</h2>
							</font>
							<font style="vertical-align: inherit;">
								<h6>Maior seletividade de grãos, sabor acentuado com notas de uma torra de qualidade tendo sua humidade e sabor prezervados.</h6>
							</font>
						</font>
					</p>
					<div class="d-flex justify-content-between align-items-center">
						<div class="btn-group">


							<button type="button" class="btn btn-sm btn-outline-secondary">

								<font style="vertical-align: inherit;">Mais</font>
								</font>
							</button>
						</div>
						<small class="text-muted">
							<font style="vertical-align: inherit;">
								<font style="vertical-align: inherit;">COFFE'JOIN</font>
							</font>
						</small>
					</div>
				</div>
			</div>
		</div>

		<div class="col-md-4">
			<div class="card shadow-sm">
				<img src="./Imagens/fototeste.jpg" heigth="">
				<div class="card-body">
					<p class="card-text">
						<font style="vertical-align: inherit;">
							<font style="vertical-align: inherit;">
								<h2 class="text-center">Caramelo Cremoso </h2>
							</font>
							<font style="vertical-align: inherit;">
								<h6>Nossa mais nova capsula Caramelo Cremoso, uma explosão de sabores com a doçura na medida certa. Com notas de baunilha com canela e o nosso mais refinado caramelo.</h6>
							</font>
						</font>
					</p>
					<div class="d-flex justify-content-between align-items-center">
						<div class="btn-group">

							<button type="button" class="btn btn-sm btn-outline-secondary">

								<font style="vertical-align: inherit;">Mais</font>
								</font>
							</button>
						</div>
						<small class="text-muted">
							<font style="vertical-align: inherit;">
								<font style="vertical-align: inherit;">COFFE'JOIN</font>
							</font>
						</small>
					</div>
				</div>
			</div>
		</div>

		<div class="col-md-4">
			<div class="card shadow-sm">
				<img src="./Imagens/fototeste.jpg" heigth="">
				<div class="card-body">
					<p class="card-text">
						<font style="vertical-align: inherit;">
							<font style="vertical-align: inherit;">
								<h2 class="text-center">Cafeteira Delux</h2>
							</font>
							<font style="vertical-align: inherit;">
								<h6>Procura menos gastos de energia e maior eficiencia quando falamos de cafeteira? Então vocè achou a Cafeteira Delux COFFE'JOIN te entrega tudo isso e mais um pouco, atribuindo o processador de grãos e a cabine para capsulas de café.</h6>
							</font>
						</font>
					</p>
					<div class="d-flex justify-content-between align-items-center">
						<div class="btn-group">
							<button type="button" class="btn btn-sm btn-outline-secondary">
								<font style="vertical-align: inherit;">
									<font style="vertical-align: inherit;">Mais</font>
								</font>
							</button>
						</div>
						<small class="text-muted">
							<font style="vertical-align: inherit;">
								<font style="vertical-align: inherit;">COFFE'JOIN</font>
							</font>
						</small>
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