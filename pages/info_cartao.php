<?php
# BY - JONAS
$title = "Informações - cartão";
include "../include/database.php";
include "../include/header.php";

$inf = "SELECT * FROM cartoes JOIN pessoa ON id_pessoa = fk_id_cartao";
$query = mysqli_query($con, $inf);
$tradu = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>

<body class="tabela">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <h1 style="margin-bottom: 1cm; margin-top: 1cm;" class="text-center">Tabela produtos</h1>
                    <form action="">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-6">
                                    <input type="text" name="buscar" class="form-control" style="margin-bottom: 1cm;">
                                </div>
                                <div class="col-1">
                                    <input type="submit" name="submit" value="buscar" class="btn btn-dark">
                                </div>
                                <div class="col-5">
                                    <?php
                                    /*if (isset($_GET["submit"]) and $_GET["submit"] == "buscar") {
                                        echo '<div class="alert alert-dark" style="padding-top: 5px;
                                                    padding-bottom: 5px; margin-bottom: 1mm;" role="alert">
                                                    <strong>A pesquisa foi realizada com sucesso!</strong>
                                            </div>';
                                    }
                                    */ ?>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="col-2">
                        <!--<a class="btn mb-3 btn-success float-start" href="cadastro_produtos.php">Cadastrar</a>-->
                    </div>
                    <div class="col-4">
                        <!--<a class="btn mb-3 btn-success float-start" href="info_produto.php">Acessar informações dos produtos</a>-->
                    </div>
                    <div class="col-6">
                        <?php
                        /*if (isset($_GET['del']) and $_GET['del'] == 'sucesso') {
                            echo '<div class="alert alert-dark" style="padding-top: 5px;
                                    padding-bottom: 5px; margin-bottom: 1mm;" role="alert">
                                    <strong>Os dados foram deletados com sucesso!</strong>
                                    </div>';
                        }
                        if (isset($_GET['submit']) and $_GET['submit'] == 'sucesso') {
                            echo '<div class="alert alert-dark" style="padding-top: 5px;
                                    padding-bottom: 5px; margin-bottom: 1mm;" role="alert">
                                    <strong>Os dados foram atualizados com sucesso!</strong>
                                </div>';
                        }
                        if (isset($_GET['cadastrar']) and $_GET['cadastrar'] == 'sucesso') {
                            echo '<div class="alert alert-dark" style="padding-top: 5px;
                                    padding-bottom: 5px; margin-bottom: 1mm;" role="alert">
                                    <strong>O cadastro foi realizado com sucesso!</strong>
                                    </div>';
                        }
                        #echo var_dump((isset($_GET["submit == sucesso"])));
                        */ ?>
                    </div>
                </div>
                <table class="table table-dark table-hover" class="shadow-lg p-3 mb-5 bg-body rounded">
                    <thead class="table table-dark table-striped">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Validade</th>
                            <th scope="col">CVV</th>
                            <th scope="col">Número do cartão</th>
                            <th scope="col">Atualizar</th>
                            <th scope="col">Deletar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($tradu as $dados) {
                            echo "<tr>
                            <th scope='row'>{$dados['id_info_cartao']}</th>
                            <td>{$dados['nome_cartao']}</td>
                            <td>{$dados['validade']}</td>
                            <td>{$dados['cvv']}</td>
                            <td>{$dados['numero']}</td>
                            <td><a class='btn btn-warning' href='update_produtos.php?var={$dados['id_info_cartao']}'>Atualizar</a></td>
                            <td><a class='btn btn-danger' href='deletar_produtos.php?var={$dados['id_info_cartao']}'>Deletar</a></td>
                        </tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <?php
    include "../include/footer.php";
    ?>