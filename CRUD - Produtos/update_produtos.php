<?php
$title = "CRUD - Produtos";
include "../include/header.php";
include '../include/database_projeto.php';
$id = $_GET['var'];

if (isset($_GET['submit']) and $_GET['submit'] = 'send') {
    $inf = "UPDATE produto SET nome_produto = '{$_GET["nome_produto"]}', descricao = '{$_GET["descricao"]}', 
    categoria = '{$_GET["categoria"]}', marca = '{$_GET['marca']}' WHERE id_produto = {$id}";
    $query = mysqli_query($con, $inf);
    header("location: produto.php?submit=sucesso");
}
$inf2 = "SELECT * FROM produto WHERE id_produto = {$id}";
$query = mysqli_query($con, $inf2);
$result = mysqli_fetch_assoc($query);
?>

<body class='text-center'>
    <main class='form-signin'>
        <form action='' method='get'>
            <h1 class='h3 mb-3 fw-normal' style='margin-top: 1cm;'>Atualizar dados</h1>
            <div class='container'>
                <div class='row justify-content-center'>
                    <div class='col-6'>
                        <div class='col-12'>
                            <div class='form-floating' style='margin-top: 1cm;'>
                                <input type='text' class='form-control' name='nome_produto' value='<?php echo $result["nome_produto"]; ?>'>
                                <label for='exampleFormControlInput1' class='form-label'><strong>Produto</strong></label>
                            </div>
                            <div class='form-floating'>
                                <input type='text' class='form-control' name='descricao' value='<?php echo $result["descricao"]; ?>'>
                                <label for='exampleFormControlInput1' class='form-label'><strong>Descrição</strong></label>
                            </div>
                            <div class='form-floating'>
                                <input type='text' class='form-control' name='categoria' value='<?php echo $result["categoria"]; ?>'>
                                <label for='exampleFormControlInput1' class='form-label'><strong>Categoria</strong></label>
                            </div>
                            <div class='form-floating' style='margin-bottom: 5mm;'>
                                <input type='text' class='form-control' name='marca' value='<?php echo $result["marca"]; ?>'>
                                <label for='exampleFormControlInput1' class='form-label'><strong>Fabricante</strong></label>
                            </div>
                            <input type='hidden' name='var' value='<?php echo $_GET['var']; ?>'>
                            <div class='row'>
                                <div class='col-6'>
                                    <a class='w-100 btn btn-lg btn-primary' href='produto.php'>Voltar</a>
                                </div>
                                <div class='col-6'>
                                    <button class='w-100 btn btn-lg btn-primary' type='submit' value='send' name='submit'>Enviar</button>
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