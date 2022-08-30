<?php
$title = "Cadastro - Cartão";
include "../include/header.php";
include '../include/database.php';

if (isset($_GET['cadastrar']) and $_GET['cadastrar'] == 'send') {
    $inf = "INSERT INTO cartoes (`nome_cartao`,`validade`,`cvv`,`numero`,`fk_id_cartao`)
    VALUES ('{$_GET['nome_cartao']}','{$_GET['validade']}','{$_GET['cvv']}','{$_GET['numero']}','{$_GET['fk_id_cartao']}')";
    $query = mysqli_query($con, $inf);
    #header("location: info_cartao.php");
}
$inf2 = "SELECT * FROM pessoa";
$query = mysqli_query($con, $inf2);
$resultado = mysqli_fetch_all($query, MYSQLI_ASSOC);
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
                                <label for="select" class="form-label"></label>
                                <select class="form-select" name="id_produto" required="">
                                    <option></option>
                                    <?php
                                    foreach ($resultado as $dados) {
                                        if (isset($dados['nome']) and $dados['nome'] == 'Jesucléberson de Assis') {
                                            echo "
                                                <option value='{$dados['id_pessoa']}'>{$dados['nome']}</option>
                                                ";
                                        }
                                    }
                                    ?>
                                    <div class="invalid-feedback">
                                        Por favor, selecione um nome válido.
                                    </div>
                                </select>
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
                                    <a class="w-100 btn btn-lg btn-primary" style="margin-bottom: 5mm;" href="info_cartao.php">Voltar</a>
                                </div>
                                <div class="col-6">
                                    <button class="w-100 btn btn-lg btn-primary" style="margin-bottom: 5mm;" type="submit" value="send" name="cadastrar">Enviar</button>
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