<?php
# BY - JONAS
session_start();
$title = "Cadastro - Cartão";
include '../include/database.php';

if (isset($_GET['cadastrar']) and $_GET['cadastrar'] == 'send') {
    $inf = "INSERT INTO cartoes (`nome_cartao`,`validade`,`cvv`,`numero`,`fk_id_pessoa`)
    VALUES ('{$_GET['nome_cartao']}','{$_GET['validade']}','{$_GET['cvv']}','{$_GET['numero']}','{$_SESSION['id_pessoa']}')"; # Substituir o valor pelo ID da sessão
    $query = mysqli_query($con, $inf);
    header("location: checkoutpage.php");
}
#echo $inf;
$inf2 = "SELECT * FROM pessoa";
$query = mysqli_query($con, $inf2);
$resultado = mysqli_fetch_all($query, MYSQLI_ASSOC);
include "../include/header.php";
include "../include/nave-site.php";
?>

<body class="text-center">
    <main class="form-signin">
        <form action="" method="get">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-6">
                        <div class="col-12">
                            <h1 class="h3 mb-3 fw-normal" style="margin-top: 1cm;">Informações do cartão</h1>
                            <div class="form-floating" style="margin-top: 1cm;">
                                <input type="text" class="form-control" name="nome_cartao">
                                <label for="select" class="form-label"><strong>Nome</strong></label>
                            </div>
                            <div class="form-floating">
                                <input type="text" class="form-control" name="validade">
                                <label for="exampleFormControlTextarea1" class="form-label"><strong>Validade</strong></label>
                            </div>
                            <div class="form-floating">
                                <input type="text" class="form-control" name="cvv">
                                <label for="exampleFormControlTextarea1" class="form-label"><strong>CVV</strong></label>
                            </div>
                            <div class="form-floating">
                                <input type="text" class="form-control" name="numero">
                                <label for="exampleFormControlTextarea1" class="form-label"><strong>Número</strong></label>
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