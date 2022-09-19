<?php
session_start();
$title = 'Carrinho';
include "../include/database.php";
if (isset($_SESSION['id_pessoa']) and $_SESSION['id_pessoa'] > 0) {
} else {
	header("location: login.php?carrinho=erro");
}
include '../include/header.php';
include '../include/nave-site.php';
//-------------------alimentos------------------------------------
$consulta1 = "SELECT * FROM `carrinho` 
join item_de_carrinho on item_de_carrinho.fk_id_carrinho = carrinho.id_carrinho 
join info_alimento on info_alimento.id_info_alimento = item_de_carrinho.fk_id_info_produto
 join produto on produto.id_produto = info_alimento.fk_id_produto 
join galeria on galeria.fk_id_produto = produto.id_produto
WHERE item_de_carrinho.categoria ='alimento' 
and carrinho.fk_id_pessoa = {$_SESSION['id_pessoa']}";
$query = mysqli_query($con, $consulta1);
$alimento = mysqli_fetch_all($query, MYSQLI_ASSOC);
//var_dump($consulta);
//echo "<pre>";
//var_dump($alimento);
//echo "</pre>";
//-------------------roupas------------------------------------
$consulta2 = "SELECT * FROM `carrinho` 
join item_de_carrinho on item_de_carrinho.fk_id_carrinho = carrinho.id_carrinho 
join info_roupa on info_roupa.id_info_roupa = item_de_carrinho.fk_id_info_produto 
join produto on produto.id_produto = info_roupa.fk_id_produto  
join galeria on galeria.fk_id_produto = produto.id_produto
WHERE item_de_carrinho.categoria ='roupa' 
and carrinho.fk_id_pessoa = {$_SESSION['id_pessoa']}";
$query = mysqli_query($con, $consulta2);
$roupa = mysqli_fetch_all($query, MYSQLI_ASSOC);
//var_dump($consulta);
//echo "<pre>";
//var_dump($roupa);
//echo "</pre>";
?>

<div class="container py-5 h-100">
	<div class="row d-flex justify-content-center align-items-center h-100 ">
		<div class="col">
			<div class="card">
				<div class="card-body p-4">
					<div class="row ">
						<div class="col">
							<!---Titulo-->
							<div class="d-flex justify-content-between align-items-center mb-4">
								<div>
									<h5 class="mb-1">Carrinho <i class="bi bi-cart3"></i></h5>
								</div>
							</div>
							<!---Primeiro produto-->
							<?php
							$bia = 0;
							$anterior = 0;
							foreach ($roupa as $vestido) {
								$atual = $vestido['fk_id_info_produto'];
								if ($atual != $anterior) {
									$subtotal1 = $vestido['quantidade'] * $vestido['preco'];
									$subtotal1 = str_replace('.', ',', $subtotal1);
									echo "
									<div class='card mb-3' style='box-shadow: 10px 5px 5px;'>
										<div class='card-body'>
											<div class='d-flex justify-content-between'>
												<div class='d-flex flex-row align-items-center'>
													<div>
														<img src = '../imagens/{$vestido['endereco']}' class='img-fluid rounded-3' alt='Shopping item' style='width: 65px;'>
													</div>
													<div class=' ms-3 '>
														<h5>{$vestido['nome_produto']}</h5>
													</div>
												</div>
												<div class='d-flex flex-row align-items-center'>
													<button onclick=\"quant('roupa{$bia}', 'add', 'pr{$bia}')\" type='button' class='mr-2 btn btn-dark'>+</button>
													<button onclick=\"quant('roupa{$bia}', 'sub', 'pr{$bia}')\" type='button' class='ms-4 btn btn-dark'>-</button>
												</div>
												<div class='d-flex flex-row align-items-center'>
													<div style='width: 80px;'>
														<h5 id='roupa{$bia}' class='fw-normal mb-0' data-quantidade='{$vestido['quantidade']}' data-capacity='{$vestido['quantidade']}' data-preco='{$vestido['preco']}'>{$vestido['quantidade']}</h5>
													</div>
													<div style='width: 105px;'>
														<h5 id='pr{$bia}' class='mb-0'>R$ {$subtotal1}</h5>
													</div>
													<div style='width: 60px;'>
														<a><i class='ms-2 bi bi-trash3-fill' onclick=\"carrinho({$vestido["id_info_roupa"]},'roupa')\"></i></a>
													</div>
												</div>            
											</div>
										</div>
									</div>";
								}
								$anterior = $atual;
								$bia++;
							}

							$bi = 0;
							$anterior = 0;
							foreach ($alimento as $cafe) {
								$atual = $cafe['fk_id_info_produto'];
								if ($atual != $anterior) {
									$subtotal2 = $cafe['quantidade'] * $cafe['preco'];
									$subtotal2 = str_replace('.', ',', $subtotal2);
									echo "
									<div class='card mb-3' style='box-shadow: 10px 5px 5px;'>
										<div class='card-body'>
											<div class='d-flex justify-content-between'>
												<div class='d-flex flex-row align-items-center'>
													<div>
														<img src = '../imagens/{$cafe['endereco']}' class='img-fluid rounded-3' alt='Shopping item' style='width: 65px;'>
													</div>
													<div class=' ms-3 '>
														<h5>{$cafe['sabor']}</h5>
													</div>
												</div>
												<div class='d-flex flex-row align-items-center'>
													<button onclick=\"quant('comida{$bi}', 'add', 'vu{$bi}')\" type='button' class='mr-2 btn btn-dark'>+</button>
													<button onclick=\"quant('comida{$bi}', 'sub', 'vu{$bi}')\" type='button' class='ms-4 btn btn-dark'>-</button>
												</div>
												<div class='d-flex flex-row align-items-center'>
													<div style='width: 80px;'>
														<h5 id='comida{$bi}' class='fw-normal mb-0' data-quantidade='{$cafe['quantidade']}' data-preco='{$cafe['preco']}'>{$cafe['quantidade']}</h5>
													</div>
													<div style='width: 105px;'>
														<h5 id='vu{$bi}' class='mb-0'>R$ {$subtotal2}</h5>
													</div>
													<div style='width: 60px;'>
														<a><i class='ms-2 bi bi-trash3-fill' onclick=\"carrinho({$cafe["id_info_alimento"]},'alimento')\" ></i></a>
													</div>
												</div>            
											</div>
										</div>
									</div>";
								}
								$anterior = $atual;
								$bi++;
							}
							?>
							<?php
							echo "
							<div class='d-flex justify-content-between'>
								<h5 class='mt-4 mb-2'>Total</h5>
								<h5 class='mt-4 mb-2' id='total'>0</h5>
							</div>";
							?>
							<script>
								soma()

								function quant(ide, fun, prod) {
									let imprime = document.getElementById(ide)
									let imprimeQnt = imprime.dataset.quantidade
									let preco = imprime.dataset.preco
									let dinheiro = document.getElementById(prod)
									if (fun == 'add') {
										imprimeQnt++
									}
									if (fun == 'sub') {
										imprimeQnt--
										if (imprimeQnt <= 0) {
											imprimeQnt = 0
										}
									}
									let precoNovo = imprimeQnt * preco
									dinheiro.innerHTML = 'R$ ' + precoNovo
									dinheiro.innerHTML = dinheiro.innerHTML.replace('.', ',')
									imprime.innerHTML = imprimeQnt
									imprime.dataset.quantidade = imprimeQnt
									soma()
								}

								function soma() {
									//1-quantidade de itens
									//	>roupas
									//	>alimento
									let food = document.getElementById("comida0").innerHTML;
									let clothing = document.getElementById("roupa0").innerHTML;
									/*console.log("Quantidade de roupa")
									console.log(clothing)
									console.log("Quantidade de comida")
									console.log(food)*/
									let aux1
									let aux2
									let foodprice = document.getElementById("vu0").innerHTML;
									let clothingprice = document.getElementById("pr0").innerHTML;
									precoComida = parseFloat(foodprice.replace('R$ ', ''))
									precoRoupa = parseFloat(clothingprice.replace('R$ ', ''))
									//2- >alimento
									for (let repet1 = 1; repet1 <= food; repet1++) {
										aux1 = document.getElementById('comida0' + repet1) //Aqui está o id do produto comida
										//quant*preço
									}
									//2- >roupas
									for (let repet2 = 1; repet2 <= clothing; repet2++) {
										aux2 = document.getElementById('roupa0' + repet2) //Aqui está o id do produto roupa 
										//quant*preço
									}
									let somatotal = precoComida + precoRoupa
									document.getElementById('total').innerHTML = 'R$ ' + parseFloat(somatotal);
									if (somatotal % 1 === 0) {
										console.log("é inteiro");
									} else {
										console.log("é float")
									}
									console.log(somatotal % 1)
									// ELE TEM QUE PEGAR A QUANTIA DE ITENS DE COMIDA E MULTIPLICAR PELO PREÇO UNITARIO DA COMIDA
									//total=subtotal.roupa+subtotal.alimento
									//total total
									//imprime o total total*/
								}
							</script>
							<script>
								// lixo de roupa
								function carrinho(id_info_produto, categoria) {
									let id_produto = document.getElementById(id_info_produto)
									let cat = document.getElementById(categoria)

									if (categoria == 'roupa') {
										console.log(categoria)
									}
									if (categoria == 'alimento') {
										console.log(categoria)

									}

									var xmlhttp = new XMLHttpRequest();
									xmlhttp.onreadystatechange = function() {
										if (this.readyState == 4 && this.status == 200) {
											console.log(this.responseText)
										}
									}
									xmlhttp.open("GET", "lixo_carrinho.php?id=" + id_info_produto + "&cat=" + categoria);
									xmlhttp.send();
								}
							</script>
							<button type="button" class="mt-2 btn btn-info btn-block btn-lg" onclick="document.location= 'checkoutpage.php'">
								<span>Checkout</span>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
include '../include/footer.php';
?>