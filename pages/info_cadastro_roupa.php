<?php
# BY - JONAS
$title = "Cadastro - Roupa";
include "../include/header.php";
include '../include/database.php';

if (isset($_GET['cadastrar']) and $_GET['cadastrar'] == 'send') {
    $inf = "INSERT INTO info_roupa (`estoque`,`preco`,`cor`,`tamanho`,`genero`,`fk_id_roupa`)
    VALUES ('{$_GET['estoque']}','{$_GET['preco']}','{$_GET['cor']}', 
    '{$_GET['tamanho']}','{$_GET['genero']}',{$_GET['id_produto']})";
    #echo $inf;
    $query = mysqli_query($con, $inf);
    header("location: info_produto.php?cadastrar=sucesso");
}
$inf2 = "SELECT * FROM produto";
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
                            <h1 class="h3 mb-3 fw-normal" style="margin-top: 1cm;">Informações da roupa</h1>
                            <div class="form-floating" style="margin-top: 1cm;">
                                <label for="select" class="form-label"></label>
                                <select class="form-select" name="id_produto" required="">
                                    <option></option>
                                    <?php
                                    foreach ($resultado as $produtos) {
                                        if (isset($produtos['categoria']) and $produtos['categoria'] == 'Roupa') {
                                            echo "
                                                <option value='{$produtos['id_produto']}'>{$produtos['nome_produto']}</option>
                                                ";
                                        }
                                    }
                                    ?>
                                    <div class="invalid-feedback">
                                        Por favor, selecione um produto válido.
                                    </div>
                                </select>
                            </div>
                            <div class="form-floating">
                                <input type="text" class="form-control" name="estoque">
                                <label for="exampleFormControlTextarea1" class="form-label"><strong>Estoque</strong></label>
                            </div>
                            <div class="form-floating">
                                <input type="text" class="form-control" name="preco">
                                <label for="exampleFormControlTextarea1" class="form-label"><strong>Preço</strong></label>
                            </div>
                            <div class="form-floating">
                                <input type="text" class="form-control" name="cor">
                                <label for="exampleFormControlTextarea1" class="form-label"><strong>Cor</strong></label>
                            </div>
                            <div class="form-floating">
                                <input type="text" class="form-control" name="tamanho">
                                <label for="exampleFormControlTextarea1" class="form-label"><strong>Tamanho</strong></label>
                            </div>
                            <div class="form-floating" style="margin-bottom: 5mm;">
                                <input type="text" class="form-control" name="genero">
                                <label for="exampleFormControlTextarea1" class="form-label"><strong>Gênero</strong></label>
                            </div>
                            <input type='hidden' name='var' value='<?php echo $_GET['var']; ?>'>
                            <div class="row">
                                <div class="col-6">
                                    <a class="w-100 btn btn-lg btn-primary" style="margin-bottom: 5mm;" href="info_produto.php">Voltar</a>
                                </div>
                                <div class="col-6">
                                    <button class="w-100 btn btn-lg btn-primary" style="margin-bottom: 5mm;" type="submit" value="send" name="cadastrar">Enviar</button>
                                </div>
                                <div class="col-12">
                                    <a class="w-100 btn btn-lg btn-primary" style="margin-bottom: 5mm;" href="info_cadastro_alimento.php">Cadastrar produto alimentício</a>
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