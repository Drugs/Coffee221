<?php
# BY - JONAS
session_start();
$title = "Cadastro - Cartão";
include '../include/database.php';

if (isset($_GET['cadEnd']) and $_GET['cadEnd'] == 'send') {
    $inf = "INSERT INTO `endereco`(`cidade`, `rua`, `avenida`, `numero`, `fk_id_pessoa`, `cep`, `estado`, `complemento`) 
    VALUES ('{$_GET['cidade']}', '{$_GET['rua']}', '{$_GET['avenida']}', '{$_GET['numero']}', '{$_SESSION['id_pessoa']}', '{$_GET['cep']}',
    '{$_GET['estado']}', '{$_GET['complemento']}')";
    $query = mysqli_query($con, $inf);
    header("location: checkoutpage.php?endereco=feito");
    echo $inf;
}
$inf2 = "SELECT * FROM pessoa";
$query = mysqli_query($con, $inf2);
$resultado = mysqli_fetch_all($query, MYSQLI_ASSOC);
include "../include/header.php";
include "../include/nave-site.php";
?>

<script>
    function mascara(cad_endereco) {
        if (cad_endereco.value.length == 5)
            cad_endereco.value = cad_endereco.value + '-';
    }
</script>

<body class="text-center responsive">
    <main class="form-signin">
        <form action="" method="get">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-6">
                        <div class="col-12">
                            <h1 class="h3 mb-3 fw-normal" style="margin-top: 1cm;">Cadastrar endereço</h1>
                            <?php
                            if (isset($_GET['cadastro-endereco']) and $_GET['cadastro-endereco'] == 'erro') {
                                echo '<div class="alert alert-warning" role="alert">Vimos que você não cadastrou seu endereço de entrega em nosso site.
                                Digite os dados de seu cartão para prosseguir com a compra.</div>';
                            }
                            ?>
                            <div class="form-floating" style="margin-top: 1cm;">
                                <input type="text" class="form-control" name='cidade'>
                                <label for="exampleFormControlInput1" class="form-label"><strong>Cidade</strong></label>
                            </div>
                            <div class="form-floating">
                                <input type="text" class="form-control" name='rua'>
                                <label for="exampleFormControlInput1" class="form-label"><strong>Rua</strong></label>
                            </div>
                            <div class="form-floating">
                                <input type="text" class="form-control" name='avenida'>
                                <label for="exampleFormControlInput1" class="form-label"><strong>Avenida</strong></label>
                            </div>
                            <div class="form-floating">
                                <input type="text" class="form-control" name='numero' maxlength="4">
                                <label for="exampleFormControlInput1" class="form-label"><strong>Número</strong></label>
                            </div>
                            <div class="form-floating">
                                <input type="text" class="form-control" id="cadendereco" name='cep' maxlength="9" placeholder='' onkeyup='mascara(this)' pattern="[0-9]{5}[-][0-9]{3}">
                                <label for="exampleFormControlTextarea1" class="form-label"><strong>CEP</strong></label>
                            </div>
                            <div class="form-floating">
                                <input type="text" class="form-control" name='estado'>
                                <label for="exampleFormControlInput1" class="form-label"><strong>Estado</strong></label>
                            </div>
                            <div class="form-floating">
                                <input type="text" class="form-control" name='complemento'>
                                <label for="exampleFormControlInput1" class="form-label"><strong>Complemento</strong></label>
                            </div>
                            <input type='hidden' name='var' value='<?php echo $_GET['var']; ?>'>
                            <div class="row">
                                <div class="col-6">
                                    <a class="w-100 btn btn-lg btn-primary" style="margin-top: 5mm; margin-bottom: 2mm;" href="checkoutpage.php">Voltar</a>
                                </div>
                                <div class="col-6">
                                    <button class="w-100 btn btn-lg btn-primary" style="margin-top: 5mm; margin-bottom: 2mm;" type="submit" value="send" name="cadEnd">Enviar</button>
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