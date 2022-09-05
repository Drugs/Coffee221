<?php
# BY - JONAS
$title = "Atualizar - Roupa";
include "../include/header.php";
include '../include/database.php';

$id = $_GET['var'];

if (isset($_GET['submit']) and $_GET['submit'] = 'send') {
    $inf = "UPDATE info_roupa SET estoque = '{$_GET["estoque"]}', 
    preco = '{$_GET["preco"]}', cor = '{$_GET['cor']}', tamanho = '{$_GET['tamanho']}', genero = '{$_GET['genero']}' 
    WHERE id_info_roupa = {$id}";
    $query = mysqli_query($con, $inf);
    header("location: info_produto.php?submit=sucesso");
    echo $inf;
}
$inf2 = "SELECT * FROM info_roupa JOIN produto ON id_produto = fk_id_produto
WHERE id_info_roupa = {$id}";
$query = mysqli_query($con, $inf2);
$result = mysqli_fetch_assoc($query);
echo $inf2;
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
                                <input type='text' class='form-control' name='cor' value='<?php echo $result["cor"]; ?>'>
                                <label for='exampleFormControlInput1' class='form-label'><strong>Cor</strong></label>
                            </div>
                            <div class="form-floating">
                                <input type="text" class="form-control" name="tamanho" value="<?php echo $result['tamanho']; ?>">
                                <label for="exampleFormControlTextarea1" class="form-label"><strong>Tamanho</strong></label>
                            </div>
                            <div class='form-floating' style='margin-bottom: 5mm;'>
                                <input type='text' class='form-control' name='genero' value='<?php echo $result["genero"]; ?>'>
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