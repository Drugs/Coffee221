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
$rowcount = mysqli_num_rows($query);
$alimento = mysqli_fetch_all($query, MYSQLI_ASSOC);
//var_dump($consulta);
#echo $rowcount;
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
$rowcount2 = mysqli_num_rows($query);
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
									<h5 id='guardiao' data-roupaqnt='<?= $rowcount2 ?>' data-alimentoqnt='<?= $rowcount ?>' class="mb-1">Carrinho <i class="bi bi-cart3"></i></h5>
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
									<div class='card mb-3' style='box-shadow: 10px 5px 5px;' id='roupa'>
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
									<div class='card mb-3' style='box-shadow: 10px 5px 5px;' id='alimento'>
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
									let guardiao = document.getElementById('guardiao')
									let qntroupas = guardiao.dataset.roupaqnt
									let qntalimentos = guardiao.dataset.alimentoqnt
									//1-quantidade de itens
									//	>roupas
									//	>alimento
									//2- >alimento
									let subalimentos = 0
									let subroupas = 0
									if (qntalimentos > 0) {
										for (let repet1 = 0; repet1 < qntalimentos; repet1++) {
											let mult1 = document.getElementById('comida' + repet1) //Aqui está o id do produto comida
											let subalimentos = mult1.dataset.quantidade * mult1.dataset.preco
											console.log(subalimentos)
										}
									}
									//quant*preço
									//2- >roupas
									if (qntroupas > 0) {
										for (let repet2 = 0; repet2 < qntroupas; repet2++) {
											let mult2 = document.getElementById('roupa' + repet2)
											subroupas = mult2.dataset.quantidade * mult2.dataset.preco
											console.log(subroupas)
										}
									}
									let total = (subalimentos - subroupas)
									console.log(total)
									document.getElementById('total').innerHTML = 'R$ ' + total;


									//total=subtotal.roupa+subtotal.alimento
									//imprime o total total*/
								}
								// lixo de roupa
								function carrinho(id_info_produto, categoria) {
									let id_produto = document.getElementById(id_info_produto)
									let cat = document.getElementById(categoria)
									let remove = document.getElementById("guardiao")

									if (categoria == 'roupa') {
										console.log(categoria)
										const element = document.getElementById("roupa");
										element.remove();
										remove.dataset.roupaqnt--
									}
									if (categoria == 'alimento') {
										console.log(categoria)
										const element = document.getElementById("alimento");
										element.remove();
										remove.dataset.alimentoqnt--
									}

									var xmlhttp = new XMLHttpRequest();
									xmlhttp.onreadystatechange = function() {
										if (this.readyState == 4 && this.status == 200) {
											console.log(this.responseText)
										}
									}
									xmlhttp.open("GET", "lixo_carrinho.php?id=" + id_info_produto + "&cat=" + categoria);
									xmlhttp.send();
									soma
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