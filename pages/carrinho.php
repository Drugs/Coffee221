<?php
session_start();
$title = 'Carrinho';
include "../include/database.php";
include '../include/header.php';
include '../include/nave-site.php';
$consulta = "SELECT * FROM  `produto`  WHERE id_produto={$_SESSION['id_produto']}";
var_dump($consulta);
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
                            <div class="card mb-3" style="box-shadow: 10px 5px 5px ;">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex flex-row align-items-center">
                                            <div>
                                                <img src="../Imagens/caffeine2.jpg" class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                                            </div>
                                            <div class="ms-3">
                                                <h5>Camisa do café</h5>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-row align-items-center">
                                            <button onclick="quant('item1', 'add')" type="button" class="mr-2 btn btn-dark">+</button>
                                            <button onclick="quant('item1', 'sub')" type="button" class="ms-4 btn btn-dark">-</button>
                                        </div>
                                        <div class="d-flex flex-row align-items-center">
                                            <div style="width: 60px;">
                                                <h5 id='item1' class="fw-normal mb-0" data-quantidade="1" data-preco="900">1</h5>
                                            </div>
                                            <script>
                                                function quant(ide, fun) {
                                                    let imprime = document.getElementById(ide)
                                                    let imprimeQnt = imprime.dataset.quantidade
                                                    let preco = imprime.dataset.preco
                                                    let dinheiro = document.querySelector('#prod1')
                                              
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
                                                    console.log(imprimeQnt * preco);

                                                    dinheiro.innerHTML = 'R$ ' + precoNovo
                                                    imprime.innerHTML = imprimeQnt
                                                    imprime.dataset.quantidade = imprimeQnt
                                                }

                                                //function repetir(){
                                               // let repetir = document.getElementById('total')
                                                //for(item+x)} 
                                            
                                            </script>

                                            <div style="width: 80px;">
                                                <h5 id='prod1' class="mb-0">R$ 900</h5>
                                            </div>
                                            <div style="width: 60px;">
                                                <a><i class="bi bi-trash3-fill"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!---Segundo produto-->
                            <div class="card mb-3" style="box-shadow: 10px 5px 5px ;">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex flex-row align-items-center">
                                            <div>
                                                <img src="../Imagens/caffeine2.jpg" class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                                            </div>
                                            <div class="ms-3">
                                                <h5>Camisa de café</h5>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-row align-items-center">
                                            <button  onclick="quant('item2', 'add')" type="button" class="mr-2 btn btn-dark">+</button>
                                            <button  onclick="quant('item2', 'sub')" type="button" class="ms-4 btn btn-dark">-</button>
                                        </div>
                                        <div class="d-flex flex-row align-items-center">
                                            <div style="width: 60px;">
                                            <h5 id='item2' class="fw-normal mb-0" data-quantidade="1" data-preco="1000">1</h5>
                                            </div>

                                            <script>
                                                function quant(ide, fun) {
                                                    let imprime = document.getElementById(ide)
                                                    let imprimeQnt = imprime.dataset.quantidade
                                                    let preco = imprime.dataset.preco
                                                    let dinheiro = document.querySelector('#prod1')
                                              
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
                                                    console.log(imprimeQnt * preco);

                                                    dinheiro.innerHTML = 'R$ ' + precoNovo
                                                    imprime.innerHTML = imprimeQnt
                                                    imprime.dataset.quantidade = imprimeQnt
                                                }

                                                //function repetir(){
                                               // let repetir = document.getElementById('total')
                                                //for(item+x)} 
                                            
                                            </script>

                                            <div style="width: 80px;">
                                                <h5 class="mb-0">$1000</h5>
                                            </div>
                                            <div style="width: 60px;">
                                                <a><i class="bi bi-trash3-fill"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!---Terceiro produto-->
                            <div class="card mb-3" style="box-shadow: 10px 5px 5px;">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex flex-row align-items-center">
                                            <div>
                                                <img src="../Imagens/caffeine2.jpg" class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                                            </div>
                                            <div class="ms-3">
                                                <h5>Camisa de café</h5>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-row align-items-center">
                                        <button onclick="quant('item3', 'add')" type="button" class="mr-2 btn btn-dark">+</button>
                                        <button onclick="quant('item3', 'sub')" type="button" class="ms-4 btn btn-dark">-</button>
                                        </div>
                                        <div class="d-flex flex-row align-items-center">
                                            <div style="width: 60px;">
                                            <h5 id='item3' class="fw-normal mb-0" data-quantidade="1" data-preco="1199">1</h5>
                                            </div>

                                            <script>
                                                  function quant(ide, fun) {
                                                    let imprime = document.getElementById(ide)
                                                    let imprimeQnt = imprime.dataset.quantidade
                                                    let preco = imprime.dataset.preco
                                                    let dinheiro = document.querySelector('#prod1')
                                              
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
                                                    console.log(imprimeQnt * preco);

                                                    dinheiro.innerHTML = 'R$ ' + precoNovo
                                                    imprime.innerHTML = imprimeQnt
                                                    imprime.dataset.quantidade = imprimeQnt
                                                }

                                                //function repetir(){
                                               // let repetir = document.getElementById('total')
                                                //for(item+x)} 
                                            
                                            </script>

                                            <div style="width: 80px;">
                                                <h5 class="mb-0">$1199</h5>
                                            </div>
                                            <div style="width: 60px;">
                                                <a><i class="bi bi-trash3-fill"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!---QUARTO  produto-->
                            <div class="card mb-3 mb-lg-0" style="box-shadow: 10px 5px 5px ;">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex flex-row align-items-center">
                                            <div>
                                                <img src="../Imagens/caffeine2.jpg" class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                                            </div>
                                            <div class="ms-3">
                                                <h5>Camisa de café</h5>
                                            </div>
                                        </div>
                                        
                                        <div class="d-flex flex-row align-items-center">
                                        <button onclick="quant('item4', 'add')" type="button" class="mr-2 btn btn-dark">+</button>
                                        <button onclick="quant('item4', 'sub')" type="button" class="ms-4 btn btn-dark">-</button>
                                        </div>
                                        <div class="d-flex flex-row align-items-center">
                                            <div style="width: 60px;">
                                            <h5 id='item4' class="fw-normal mb-0" data-quantidade="1" data-preco="1799">1</h5>
                                            </div>

                                            <script>
                                                 function quant(ide, fun) {
                                                    let imprime = document.getElementById(ide)
                                                    let imprimeQnt = imprime.dataset.quantidade
                                                    let preco = imprime.dataset.preco
                                                    let dinheiro = document.querySelector('#prod1')
                                              
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
                                                    console.log(imprimeQnt * preco);

                                                    dinheiro.innerHTML = 'R$ ' + precoNovo
                                                    imprime.innerHTML = imprimeQnt
                                                    imprime.dataset.quantidade = imprimeQnt
                                                }

                                                //function repetir(){
                                               // let repetir = document.getElementById('total')
                                                //for(item+x)} 
                                            
                                            </script>

                                            <div style="width: 80px;">
                                                <h5 class="mb-0">$1799</h5>
                                            </div>
                                            <div style="width: 60px;">
                                                <a><i class="bi bi-trash3-fill"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between">
                                <p class="mt-4 mb-2">Total</p>
                                <p class="mt-4 mb-2" id='total'>$4798.00</p>
                            </div>

                            <button type="button" class="btn btn-info btn-block btn-lg" href="checkoutpage.php">
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