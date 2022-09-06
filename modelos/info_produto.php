<?php
# BY - JONAS
$title = "Informações - Produtos";
include "../include/header.php";
include '../include/database.php';
$pesquisa = '';
if (isset($_GET["submit"]) and $_GET["submit"] == "buscar") {
    $pesquisa = $_GET['buscar'];
}
$inf = "SELECT * FROM produto JOIN info_roupa ON id_produto = fk_id_produto WHERE produto.nome_produto LIKE '%{$pesquisa}%' 
OR info_roupa.tamanho LIKE '%{$pesquisa}%' OR info_roupa.genero LIKE '%{$pesquisa}%'
OR info_roupa.cor LIKE '%{$pesquisa}%'";
$query = mysqli_query($con, $inf);
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
# Nova consulta
$inf2 = "SELECT * FROM produto JOIN info_alimento ON id_produto = fk_id_produto WHERE produto.nome_produto LIKE '%{$pesquisa}%' 
OR info_alimento.sabor LIKE '%{$pesquisa}%' OR info_alimento.embalagem LIKE '%{$pesquisa}%'";
$query = mysqli_query($con, $inf2);
$result2 = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>

<body class="tabela">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <h1 style="margin-bottom: 1cm; margin-top: 1cm;" class="text-center">Informações dos produtos</h1>
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
                                    if (isset($_GET["submit"]) and $_GET["submit"] == "buscar") {
                                        echo '<div class="alert alert-dark" style="padding-top: 5px;
                                                    padding-bottom: 5px; margin-bottom: 1mm;" role="alert">
                                                    <strong>A pesquisa foi realizada com sucesso!</strong>
                                            </div>';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="col-2">
                        <a class="btn mb-3 btn-success float-start" href="info_cadastro_roupa.php">Cadastrar</a>
                    </div>
                    <div class="col-4">
                        <a class="btn mb-3 btn-success float-start" href="relatorio_produto.php">Acessar produtos</a>
                    </div>
                    <div class="col-6">
                        <?php
                        if (isset($_GET['delete']) and $_GET['delete'] == 'sucesso') {
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
                        ?>
                    </div>
                </div>
                <table class="table table-dark table-hover" class="shadow-lg p-3 mb-5 bg-body rounded">
                    <thead class="table table-dark table-striped">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Estoque</th>
                            <th scope="col">Preço</th>
                            <th scope="col">Cor</th>
                            <th scope="col">Tamanho</th>
                            <th scope="col">Gênero</th>
                            <th scope="col">Atualizar</th>
                            <th scope="col">Deletar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($result as $dados) {
                            echo "<tr>
                            <th scope='row'>{$dados['id_info_roupa']}</th>
                            <td>{$dados['nome_produto']}</td>
                            <td>{$dados['estoque']}</td>
                            <td>{$dados['preco']}</td>
                            <td>{$dados['cor']}</td>
                            <td>{$dados['tamanho']}</td>
                            <td>{$dados['genero']}</td>
                            <td><a class='btn btn-warning' href='update_info_roupa.php?var={$dados['id_info_roupa']}'>Atualizar</a></td>
                            <td><a class='btn btn-danger' href='deletar_info_roupa.php?var={$dados['id_info_roupa']}'>Deletar</a></td>
                        </tr>";
                        }
                        ?>
                    </tbody>
                </table>
                <h1 style="margin-bottom: 1cm; margin-top: 1cm;" class="text-center">Informações dos produtos alimentícios</h1>
                <table class="table table-dark table-hover" class="shadow-lg p-3 mb-5 bg-body rounded">
                    <thead class="table table-dark table-striped">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Estoque</th>
                            <th scope="col">Preço</th>
                            <th scope="col">Embalagem</th>
                            <th scope="col">Peso</th>
                            <th scope="col">Sabor</th>
                            <th scope="col">Atualizar</th>
                            <th scope="col">Deletar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($result2 as $dados2) {
                            echo "<tr>
                            <th scope='row'>{$dados2['id_info_alimento']}</th>
                            <td>{$dados2['nome_produto']}</td>
                            <td>{$dados2['estoque']}</td>
                            <td>{$dados2['preco']}</td>
                            <td>{$dados2['embalagem']}</td>
                            <td>{$dados2['peso']}</td>
                            <td>{$dados2['sabor']}</td>
                            <td><a class='btn btn-warning' href='update_info_alimento.php?var={$dados2['id_info_alimento']}'>Atualizar</a></td>
                            <td><a class='btn btn-danger' href='deletar_info_alimento.php?var={$dados2['id_info_alimento']}'>Deletar</a></td>
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