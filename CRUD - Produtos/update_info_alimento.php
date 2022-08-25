<?php
$title = "Atualizar - Alimento";
include "../include/header.php";
include '../include/database_projeto.php';
$id = $_GET['var'];

if (isset($_GET['submit']) and $_GET['submit'] = 'send') {
    $inf = "UPDATE info_alimento SET estoque = '{$_GET["estoque"]}', 
    preco = '{$_GET["preco"]}', embalagem = '{$_GET['embalagem']}', peso = '{$_GET['peso']}', sabor = '{$_GET['sabor']}' 
    WHERE id_info_alimento = {$id}";
    $query = mysqli_query($con, $inf);
    header("location: info_produto.php?submit=sucesso");
}
$inf2 = "SELECT * FROM info_alimento JOIN produto ON id_produto = fk_id_alimento
WHERE id_info_alimento = {$id}";
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
                                <input type='text' class='form-control' name='nome_produto' value='<?php echo $result['nome_produto']; ?>' disabled>
                                <label for='exampleFormControlInput1' class='form-label'><strong>Nome</strong></label>
                            </div>
                            <div class='form-floating'>
                                <input type='text' class='form-control' name='estoque' value='<?php echo $result["estoque"]; ?>'>
                                <label for='exampleFormControlInput1' class='form-label'><strong>Estoque</strong></label>
                            </div>
                            <div class='form-floating'>
                                <input type='text' class='form-control' name='preco' value='<?php echo $result["preco"]; ?>'>
                                <label for='exampleFormControlInput1' class='form-label'><strong>Preço</strong></label>
                            </div>
                            <div class='form-floating'>
                                <input type='text' class='form-control' name='embalagem' value='<?php echo $result["embalagem"]; ?>'>
                                <label for='exampleFormControlInput1' class='form-label'><strong>Cor</strong></label>
                            </div>
                            <div class="form-floating">
                                <input type="text" class="form-control" name="peso" value="<?php echo $result['peso']; ?>">
                                <label for="exampleFormControlTextarea1" class="form-label"><strong>Tamanho</strong></label>
                            </div>
                            <div class='form-floating' style='margin-bottom: 5mm;'>
                                <input type='text' class='form-control' name='sabor' value='<?php echo $result["sabor"]; ?>'>
                                <label for='exampleFormControlInput1' class='form-label'><strong>Gênero</strong></label>
                            </div>
                            <input type='hidden' name='var' value='<?php echo $_GET['var']; ?>'>
                            <div class='row'>
                                <div class='col-6'>
                                    <a class='w-100 btn btn-lg btn-primary' href='info_produto.php'>Voltar</a>
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