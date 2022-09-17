<?php
# BY - JONAS
session_start();
$title = "Cadastro - Cartão";
include '../include/database.php';

if (isset($_GET['cadastrar']) and $_GET['cadastrar'] == 'send') {
    $inf = "INSERT INTO cartoes (`nome_cartao`,`validade`,`cvv`,`numero`,`fk_id_pessoa`)
    VALUES ('{$_GET['nome_cartao']}','{$_GET['validade']}','{$_GET['cvv']}','{$_GET['numero']}','{$_SESSION['id_pessoa']}')";
    $query = mysqli_query($con, $inf);
    header("location: checkoutpage.php?cadastro=feito");
}
#echo $inf;
$inf2 = "SELECT * FROM pessoa";
$query = mysqli_query($con, $inf2);
$resultado = mysqli_fetch_all($query, MYSQLI_ASSOC);
include "../include/header.php";
include "../include/nave-site.php";
?>

<script>
</script>

<body class="text-center responsive">
    <main class="form-signin">
        <form action="" method="get">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-6">
                        <div class="col-12">
                            <h1 class="h3 mb-3 fw-normal" style="margin-top: 1cm;">Cadastrar cartão</h1>
                            <?php
                            if (isset($_GET['cadastro-cartao']) and $_GET['cadastro-cartao'] == 'erro') {
                                echo '<div class="alert alert-warning" role="alert">Vimos que você não tem um cartão cadastrado em nosso site.
                                Digite os dados de seu cartão para prosseguir com a compra.</div>';
                            }
                            ?>
                            <div class="form-floating" style="margin-top: 1cm;">
                                <input type="text" class="form-control" name="nome_cartao">
                                <label for="select" class="form-label"><strong>Nome</strong></label>
                            </div>
                            <div class="form-floating">
                                <input class='form-control' type='text' maxlength='7' pattern='[0-1]{1}[0-9]{1}[/][2]{1}[0]{1}[2-9]{1}[0-9]{1}' name='validade' placeholder='' id='validade' onkeyup='mask_valid()' required>
                                <label class='form-label' for='validade'><strong>Validade</strong></label>
                                <script src='../js/maks_valid.js'></script>
                            </div>
                            <div class="form-floating">
                                <input type="text" class="form-control" name="cvv" placeholder='' pattern='[0-9]{3}' maxlength='3'>
                                <label for="exampleFormControlTextarea1" class="form-label"><strong>CVV</strong></label>
                            </div>
                            <div class="form-floating">
                                <input type="text" class="form-control" id="numero" name="numero" maxlength='19' placeholder='' onkeyup='mascara(this)' pattern="[0-9]{4}[-][0-9]{4}[-][0-9]{4}[-][0-9]{4}">
                                <label for="exampleFormControlTextarea1" class="form-label"><strong>Número do cartão</strong></label>
                            </div>
                            <input type='hidden' name='var' value='<?php echo $_GET['var']; ?>'>
                            <div class="row">
                                <div class="col-6">
                                    <a class="w-100 btn btn-lg btn-primary" style="margin-top: 5mm;" href="checkoutpage.php">Voltar</a>
                                </div>
                                <div class="col-6">
                                    <button class="w-100 btn btn-lg btn-primary" style="margin-top: 5mm;" type="submit" value="send" name="cadastrar">Enviar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </form>
    </main>
    <?php
    include "../include/footer.php";
    ?>