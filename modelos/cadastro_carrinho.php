<?php
# BY - JONAS
session_start();
#var_dump($_SESSION);
$title = "CRUD - Produtos";
include "../include/header.php";
include '../include/database.php';
if (isset($_GET['cadastrar']) and $_GET['cadastrar'] == 'send') {
    $inf = "INSERT INTO carrinho (`fk_id_pessoa`,`data`,`status`)
    VALUES ('{$_SESSION['id_pessoa']}','{$_GET['data']}','{$_GET['status']}')";
    $query = mysqli_query($con, $inf);
    #var_dump($inf);
    header("location: relatorio_produto.php?cadastrar=sucesso");
}
$inf2 = "SELECT * FROM carrinho";
$query = mysqli_query($con, $inf2);
$resultado = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>

<body class="text-center">
    <main class="form-signin">
        <form action="" method="get">
            <h1 class="h3 mb-3 fw-normal" style="margin-top: 1cm;">Cadastro de carrinho</h1>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-6">
                        <div class="col-12">
                            <div class="form-floating" style="margin-top: 1cm;">
                                <input type="text" class="form-control" name="data">
                                <label for="exampleFormControlInput1" class="form-label"><strong>Data</strong></label>
                            </div>
                            <div class="form-floating">
                                <input type="text" class="form-control" name="status">
                                <label for="exampleFormControlInput1" class="form-label"><strong>Status</strong></label>
                            </div>
                            <input type='hidden' name='var' value='<?php echo $_GET['var']; ?>'>
                            <div class="row mt-3">
                                <div class="col-6">
                                    <a class="w-100 btn btn-lg btn-primary" style="margin-bottom: 5mm;" href="relatorio_carrinho.php">Voltar</a>
                                </div>
                                <div class="col-6">
                                    <button class="w-100 btn btn-lg btn-primary" style="margin-bottom: 5mm;" type="submit" value="send" name="cadastrar">Enviar</button>
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