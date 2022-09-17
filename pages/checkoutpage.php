<?php
#BY GUSTAVO INC © 2022
session_start();
$title = "Página de Pagamento";
include "../include/database.php";
if (isset($_SESSION['id_pessoa']) and $_SESSION['id_pessoa'] > 0) {
    $id_pessoa = $_SESSION['id_pessoa'];
    $inf = "SELECT * FROM cartoes WHERE fk_id_pessoa = {$id_pessoa}";
    $query = mysqli_query($con, $inf);
    $resultado = mysqli_fetch_assoc($query);
    if ($resultado != NULL) {
        $inf2 = "SELECT * FROM cartoes JOIN pessoa ON id_pessoa = fk_id_pessoa
        WHERE id_pessoa = {$_SESSION['id_pessoa']}";
        $query = mysqli_query($con, $inf2);
        $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
        if ($result != NULL) {
            $inf3 = "SELECT * FROM pessoa JOIN endereco ON pessoa.id_pessoa = endereco.fk_id_pessoa WHERE pessoa.id_pessoa = {$id_pessoa}";
            $query = mysqli_query($con, $inf3);
            $result2 = mysqli_fetch_all($query, MYSQLI_ASSOC);
        } else {
            header("location: cadastro_endereco.php?cadastro-endereco=erro");
        }
    } else {
        header("location: cadastro_cartao.php?cadastro-cartao=erro");
    }
} else {
    header("location: login.php?compra=erro");
}
include "../include/header.php";
include "../include/nave-site.php";
# Realizar um SELECT com javascript para o usuário escolher qual dos cartões irá usar
?>

<body class="responsive">
    <main>
        <div class="container">
            <div class="row g-5 mt-3">
                <div class="col-md-5 col-lg-6 order-md-last">
                    <img src="../Imagens\Mobile payments-rafiki.svg" alt="svg payment">
                </div>
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

                <div class="col-md-7 col-lg-6">
                    <!-- <h4>Endereço de cobrança</h4> !-->
                    <form class="needs-validation" action="pagdeobrigado.php" method="post">
                        <h4 class="mb-4">Endereço de entrega</h4>
                        <?php
                        if (isset($_SESSION['id_usu']) and $_SESSION['id_usu'] != '') {
                            echo "
                        <div class='row g-3'>
                            <div class='col-sm-6'>
                                <label class='form-label' for='endereco'>Endereço</label>
                                <input class='form-control' placeholder='Rua exemplo 1234' type='text' name='rua' id='' value='{$result2[0]['rua']}'>
                            </div>
                            <div class='col-md-6'>
                                <label class='form-label' for='cidade'>Cidade</label>
                                <input class='form-control' placeholder='Ex.: 999' type='text' name='cidade' id='' value='{$result2[0]['cidade']}'>
                            </div>
                            <div class='col-md-4'>
                                <label class='form-label' for='estado'>Estado</label>
                                <input class='form-control' placeholder='Ex.: Bahia' type='text' name='estado' id='' value='{$result2[0]['estado']}'>
                            </div>
                            <div class='col-md-4'>
                                <label class='form-label' for='cep'>CEP</label>
                                <input class='form-control' type='text' name='cep' id='' value='{$result2[0]['cep']}'>
                            </div>
                            <div class='col-md-4'>
                            <label class='form-label' for='numero'>Número</label>
                                <input class='form-control' placeholder='Ex.: 999' type='text' name='numero' id='' value='{$result2[0]['numero']}'>
                            </div>
                            <div class='col-sm-6'>
                                <label class='form-label' for='complemento'>Avenida</label>
                                <input class='form-control' placeholder='Ex.: Avenida Dom João IV' type='text' name='avenida' id='' value='{$result2[0]['avenida']}'>
                            </div>
                            <div class='col-sm-6'>
                                <label class='form-label' for='complemento'>Complemento</label>
                                <input class='form-control' placeholder='Ex.: Condm. Bragança...' type='text' name='complemento' id='' value='{$result2[0]['complemento']}'>
                            </div>
                        </div>";
                        } else {
                            echo "
                            <div class='row g-3'>
                                <div class='col-sm-6'>
                                    <label class='form-label' for='endereco'>Endereço</label>
                                    <input class='form-control' placeholder='Rua exemplo 1234' type='text' name='rua' id=''>
                                </div>
                                <div class='col-md-6'>
                                    <label class='form-label' for='cidade'>Cidade</label>
                                    <input class='form-control' placeholder='Ex.: 999' type='text' name='cidade' id=''>
                                </div>
                                <div class='col-md-4'>
                                    <label class='form-label' for='estado'>Estado</label>
                                    <input class='form-control' placeholder='Ex.: Bahia' type='text' name='estado' id=''>
                                </div>
                                <div class='col-md-4'>
                                    <label class='form-label' for='cep'>CEP</label>
                                    <input class='form-control' type='text' name='cep' id=''>
                                </div>
                                <div class='col-md-4'>
                                <label class='form-label' for='numero'>Número</label>
                                    <input class='form-control' placeholder='Ex.: 999' type='text' name='numero' id=''>
                                </div>
                                <div class='col-sm-12'>
                                    <label class='form-label' for='complemento'>Complemento</label>
                                    <input class='form-control' placeholder='Ex.: Condm. Bragança...' type='text' name='complemento' id=''>
                                </div>
                            </div>";
                        }
                        ?>
                        <hr class="my-4">


                        <?php
                        if (isset($_GET['cadastro']) and $_GET['cadastro'] == 'feito') {
                            echo '<div class="alert alert-warning" role="alert">Você cadastrou seu cartão com sucesso.</div>';
                        }
                        if (isset($_GET['endereco']) and $_GET['endereco'] == 'feito') {
                            echo '<div class="alert alert-warning" role="alert">Você cadastrou seu endereço com sucesso.</div>';
                        }
                        ?>
                        <h4 class="mb-4">Forma de Pagamento</h4>
                        <div class="my-3">
                            <!-- <select class="selecaoop" name="selecao" id="">
                                <option value="Cartao_débito">Cartão de débito</option>
                                <option value="Cartao_crédito">Cartão de crédito</option>
                                <option value="PayPal">Paypal</option>
                            </select> -->
                            <!-- <span id="debitt" class="text-muted"></span>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="metodopagamento_debitt" id="debit" required>
                                <label for="debit" class="form-check-label">Cartão de débito</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="metodopagamento_credit" id="credit" required>
                                <label for="credit" class="form-check-label">Cartão de crédito</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="metodopagamento" id="paypal" disabled>
                                <label for="paypal" class="form-check-label">Paypal</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input disabled" name="metodopagamento" id="pix" disabled>
                                <label for="pix" class="form-check-label"><strong>Pix</strong>
                                <span class="text-muted">(em breve)</span>
                                </label>
                            </div> -->
                        </div>
                        <?php
                        if (isset($_SESSION['id_usu']) and $_SESSION['id_usu'] != '') {
                            echo "
                    <div class='row gy-3'>
                        <div class='col-md-6'>
                            <label for='nome_cartao' class='form-label'>Nome no cartão</label>
                            <input class=' estilo' type='text' name='nome_cartao' required maxlength='80' id='upcase' placeholder='DIGITE SEU NOME' value='{$result[0]['nome_cartao']}'>
                            <small class='text-muted'>Nome completo como aparece no cartão</small>
                        </div>
                        <div class='col-md-6'>
                            <label for='numero' class='form-label'>Número do cartão</label>
                            <input class=' estilo' type='text' id='numero' name='numero' required maxlength='19' placeholder='' onkeyup='mascara(this)' pattern='[0-9]{4}[-][0-9]{4}[-][0-9]{4}[-][0-9]{4}' value='{$result[0]['numero']}'>
                        </div>
                        <div class='col-md-3'>
                            <label class='form-label' for='validade'>Validade</label>
                            <input class=' estilo' type='text'  maxlength='7' pattern='[0-1]{1}[0-9]{1}[/][2]{1}[0]{1}[2-9]{1}[0-9]{1}' name='validade' placeholder='' id='validade' onkeyup='mask_valid()' value='{$result[0]['validade']}'>
                            <script src='../js/maks_valid.js'></script>
                        </div>
                        <div class='col-md-3'>
                            <label class='form-label' for='cvv'>CVV</label>
                            <input class=' estilo' type='' name='cvv' required autocomplete='off' placeholder='000' pattern='[0-9]{3}' maxlength='3' value='{$result[0]['cvv']}'>
                        </div>
                    </div>";
                        } else {
                            echo "
                        <div class='row gy-3'>
                            <div class='col-md-6'>
                                <label for='nome_cartao' class='form-label'>Nome no cartão</label>
                                <input class=' estilo' type='text' name='nome_cartao' required maxlength='80' id='upcase' placeholder='DIGITE SEU NOME'>
                                <small class='text-muted'>Nome completo como aparece no cartão</small>
                            </div>
                            <div class='col-md-6'>
                                <label for='numero' class='form-label'>Número do cartão</label>
                                <input class=' estilo' type='' id='number_card' name='numero' required maxlength='19' placeholder='0000 0000 0000 0000' onkeyup='number_valid()' pattern='[0-9]{4}[ ][0-9]{4}[ ][0-9]{4}[ ][0-9]{4}'>
                            </div>
                            <div class='col-md-3'>
                                <label class='form-label' for='validade'>Validade</label>
                                <input class=' estilo' type='' maxlength='5' pattern='[0-9]{2}[/][0-9]{2}' name='validade' required autocomplete='off' placeholder='00/00' id='validade' onkeyup='mask_valid()'>
                                <script src='../js/maks_valid.js'></script>
                            </div>
                            <div class='col-md-3'>
                                <label class='form-label' for='cvv'>CVV</label>
                                <input class=' estilo' type='' name='cvv' required autocomplete='off' placeholder='000' pattern='[0-9]{3}' maxlength='3'>
                            </div>
                        </div>";
                        }
                        ?>
                        <hr class="my-4">
                        <button id="comprar" type="submit" class="btn btn-primary w-100 btn-lg" value="send" name="confirme">Comprar Agora</button>
                    </form>


                    <!-- <button class="btn btn-primary" id="mensagem" onclick="mudarr()">clique</button> !-->

                </div>
            </div>
        </div>
    </main>

    <script src="../js/maks_valid.js"></script>

    <?php
    include "../include/rodape.php";
    include "../include/footer.php";
    ?>