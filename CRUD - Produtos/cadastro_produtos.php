<?php
$title = "CRUD - Produtos";
include "../include/header.php";
include '../include/database_projeto.php';

if (isset($_GET['cadastrar']) and $_GET['cadastrar'] == 'send') {
    $inf = "INSERT INTO produto (`nome_produto`,`descricao`,`categoria`,`marca`)
    VALUES ('{$_GET['nome_produto']}','{$_GET['descricao']}','{$_GET['categoria']}','{$_GET['marca']}')";
    $query = mysqli_query($con, $inf);
    /*$id_produto = mysqli_insert_id($con);
    $inf2 = "INSERT INTO info_produto (`nome`,`estoque`,`preco`,`cor`,`tamanho`,`genero`,`fk_id_produto`)
    VALUES ('{$_GET['nome']}','{$_GET['estoque']}','{$_GET['preco']}','{$_GET['cor']}','{$_GET['tamanho']}',
    '{$_GET['genero']}','{$id_produto}')";
    $query = mysqli_query($con, $inf2);*/
    #header("location: produto.php?cadastrar=sucesso");
}
$inf2 = "SELECT * FROM produto";
$query = mysqli_query($con, $inf2);
$resultado = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>

<body class="text-center">
    <main class="form-signin">
        <form action="" method="get">
            <h1 class="h3 mb-3 fw-normal" style="margin-top: 1cm;">Cadastro de produtos</h1>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-6">
                        <div class="col-12">
                            <div class="form-floating" style="margin-top: 1cm;">
                                <input type="text" class="form-control" name="nome_produto">
                                <label for="exampleFormControlInput1" class="form-label"><strong>Produto</strong></label>
                            </div>
                            <div class="form-floating">
                                <input type="text" class="form-control" name="descricao">
                                <label for="exampleFormControlInput1" class="form-label"><strong>Descrição</strong></label>
                            </div>
                            <div class="form-floating">
                                <input type="text" class="form-control" name="categoria">
                                <label for="exampleFormControlInput1" class="form-label"><strong>Categoria</strong></label>
                                <!--<label for="select" class="form-label"></label>
                                <select class="form-select" name="categoria" required="">
                                    <option></option>-->
                                <?php
                                if (isset($produtos['categoria']) and $produtos['categoria'] == 'Roupa') {
                                    echo "
                                                    <option value='{$produtos['categoria']}'>{$produtos['categoria']}</option>
                                                    ";
                                }
                                if (isset($produtos['categoria']) and $produtos['categoria'] == 'Alimento') {
                                    echo "
                                                    <option value='{$produtos['categoria']}'>{$produtos['categoria']}</option>
                                                    ";
                                }
                                ?>
                                <div class="invalid-feedback">
                                    Por favor, selecione um produto válido.
                                </div>
                                </select>
                            </div>
                            <div class="form-floating" style="margin-bottom: 5mm;">
                                <input type="text" class="form-control" name="marca">
                                <label for="exampleFormControlInput1" class="form-label"><strong>Fabricante</strong></label>
                            </div>

                            <div class="row">
                                <div class="col-6">
                                    <a class="w-100 btn btn-lg btn-primary" style="margin-bottom: 5mm;" href="produto.php">Voltar</a>
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