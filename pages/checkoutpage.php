<?php
#BY GUSTAVO INC © 2022
$title = "Página de Pagamento";
include "../include/header.php";
?>
    <header class="p-3 bg-dark text-white">
                
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                    <use xlink:href="#bootstrap"></use>
                </svg>
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <h2><i class="bi bi-cup-hot"></i></h2>
                <li>
                    <a href="../home.php" class="nav-link px-2 text-warning">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">The COFFE'JOIN</font>
                        </font>
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link px-2 text-white">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Mais Sabores</font>
                        </font>
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link px-2 text-white">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Preços</font>
                        </font>
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link px-2 text-white">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Perguntas frequentes</font>
                        </font>
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link px-2 text-white">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Sobre</font>
                        </font>
                    </a>
                </li>
            </ul>

            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">    
                <input type="search" class="form-control form-control-dark" placeholder="Procurar..."aria-label="Procurar">
            </form>
            <?php
                if(isset($_SESSION['id_usu']) and  $_SESSION['id_usu'] != '' ) {
                    echo'<div class="text-end">';
                    echo'<a class="btn btn-outline-light me-2" href="pages/logout.php"> Sair</a>';
                }else{
                    echo'<div class="text-end">';
                    echo'<a class="btn btn-outline-light me-2" href="../pages/login.php">Login</a>';
                }
            ?>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="row g-5 mt-3">
                <!--
                <div class="col-md-5 col-lg-4 order-md-last">
                    <h4 class="d-flex justify-content-between align-content-center mb-3">
                        <span class="text-primary">Seu carrinho</span>
                        <span class="badge bg-primary rounded-pill">X</span>
                    </h4>
                    <ul class="list-group mb-3">
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0">Item 1</h6>
                                <small class="text-muted">Breve descrição</small>
                            </div>
                            <span class="text-muted">R$X</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0">Item 2</h6>
                                <small class="text-muted">Breve descrição</small>
                            </div>
                            <span class="text-muted">R$X</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0">Item 3</h6>
                                <small class="text-muted">Breve descrição</small>
                            </div>
                            <span class="text-muted">R$X</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div class="text-success">
                                <h6 class="my-0">Item 3</h6>
                                <small>Cupom de desconto</small>
                            </div>
                            <span class="text-muted">-R$X</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <span>Total (BRL)</span>
                            </div>
                            <span class="text-muted"><strong>R$X</strong></span>
                        </li>
                    </ul>
                </div> !-->
                
                <div class="col-md-7 col-lg-8">
                    
                    <!-- <h4>Endereço de cobrança</h4> !-->
                    <form class="needs-validation" action="pagdeobrigado.php" method="post">
                        <!--<div class="row g-3">
                            <div class="col-sm-6">
                                <label class="form-label" for="nome">Primeiro nome:</label>
                                <input class="form-control" type="text" name="nome" id="name">
                            </div>
                            <div class="col-sm-6">
                                <label class="form-label" for="sobrenome">Sobrenome</label>
                                <input class="form-control" type="text" name="sobrenome" id="sobrenome2">
                            </div>
                            <div class="col-sm-12">
                                <label class="form-label" for="username">Nome de usuário</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">@</font>
                                        </font>
                                    </span>
                                    <input class="form-control" placeholder="Nome de usuário" type="text" name="username" id="username2">
                                </div>
                            </div>    
                            <div class="col-sm-12">
                                <label class="form-label" for="email">E-mail <span class="text-muted">(opcional)</span>
                                </label>
                                <input class="form-control" placeholder="exemplo@gmail.com" type="email" name="email" id="">
                            </div>
                            <div class="col-sm-12">
                                <label class="form-label" for="endereco">Endereço</label>
                                <input class="form-control" placeholder="Rua exemplo 1234" type="text" name="endereco" id="">
                            </div>
                            <div class="col-sm-12">
                                <label class="form-label" for="endereco2">Endereço 2 <span class="text-muted">(opcional)</span></label>
                                <input class="form-control" placeholder="Casa ou apartamento" type="text" name="endereco2" id="">
                            </div>
                            <div class="col-md-5">
                                <label class="form-label" for="pais">País</label>
                                <select class="form-select" name="select-pais" id="">
                                    <option value="1">Brasil</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label" for="estado">Estado</label>
                                <select class="form-select" name="estados" id="">
                                    <option value="1">Acre</option>
                                    <option value="2">Alagoas</option>
                                    <option value="3">Amapá</option>
                                    <option value="4">Amazonas</option>
                                    <option value="5">Bahia</option>
                                    <option value="6">Ceará</option>
                                    <option value="7">Distrito Federal</option>
                                    <option value="8">Espírito Santo</option>
                                    <option value="9">Goiás</option>
                                    <option value="10">Maranhão</option>
                                    <option value="11">Mato Grosso</option>
                                    <option value="12">Mato Grosso do Sul</option>
                                    <option value="13">Minas Gerais</option>
                                    <option value="14">Pará</option>
                                    <option value="15">Paraíba</option>
                                    <option value="16">Paraná</option>
                                    <option value="17">Pernambuco</option>
                                    <option value="18">Piauí</option>
                                    <option value="19">Rio de Janeiro</option>
                                    <option value="20">Rio Grande do Norte</option>
                                    <option value="21">Rio Grande do Sul</option>
                                    <option value="22">Rondônia</option>
                                    <option value="23">Roraima</option>
                                    <option value="24">Santa Catarina</option>
                                    <option value="25">São Paulo</option>
                                    <option value="26">Sergipe</option>
                                    <option value="27">Tocantins</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label" for="cep">CEP</label>
                                <input class="form-control" type="text" name="cep" id="">
                            </div>
                        </div>
                        <hr class="my-4">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="check-endereco" id="">
                            <label class="form-label" for="">O endereço de entrega é o mesmo endereço de cobrança?</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="check-save-infos" id="">
                            <label class="form-label" for="">Salvar informações para próximas compras</label>
                        </div>
                        <hr class="my-4">

                        -->



                        <h4 class="mb-4">Forma de Pagamento</h4>
                        <div class="my-3" >
                            <span id="debitt" class="text-muted"></span>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="metodopagamento" id="debit" required>
                                <label for="debit" class="form-check-label">Cartão de débito</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="metodopagamento" id="credit" required>
                                <label for="credit" class="form-check-label">Cartão de crédito</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="metodopagamento" id="paypal" required>
                                <label for="paypal" class="form-check-label">Paypal</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input disabled" name="metodopagamento" id="pix" disabled>
                                <label for="pix" class="form-check-label"><strong>Pix</strong>
                                <span class="text-muted">(em breve)</span>
                                </label>
                            </div>
                        </div>
                        
                        <div class="row gy-3">
                            <div class="col-md-6">
                                <label for="cartao-name" class="form-label">Nome no cartão</label>
                                <input class="form-control" type="text" name="cartao-name" required maxlength="80">
                                <small class="text-muted">Nome completo como aparece no cartão</small>
                            </div>
                            <div class="col-md-6">
                                <label for="cartao-number" class="form-label">Número do cartão</label>
                                <input class="form-control" type="number" name="cartao-number"  required>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label" for="valid">Validade</label>
                                <input class="form-control" type="number" name="valid" required>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label" for="cc-cvv">CVV</label>
                                <input class="form-control" type="number" name="cc-cvv" required> 
                            </div>
                        </div>
                        <hr class="my-4">
                        <button id="comprar" type="submit" class="btn btn-primary w-100 btn-lg"  name="confirme" >Comprar Agora</button>
                    </form>

    
                    <!-- <button class="btn btn-primary" id="mensagem" onclick="mudarr()">clique</button> !-->

                </div>
            </div>
        </div>  
    </main>

    <footer>
        <section class="footer-1 d-flex justify-content-md-center align-items-md-center">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-muted d-flex justify-content-md-center align-items-md-center">
                        <span>© Copyright 2022. All Rights Reserved. Last Update: 2022-09-04</span>
                    </div>
                </div>
            </div>

        </section>
    </footer>

    <style>
        .footer-1{
            background-color: rgb(172, 162, 162);
            margin-top: 80px;
            height: 100px;
        }
    </style>



<?php
include "../include/footer.php";
?>


