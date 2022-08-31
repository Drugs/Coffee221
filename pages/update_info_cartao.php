<?php
$title = "Atualizar - Cartão";
include "../include/header.php";
include '../include/database.php';
$id = $_GET['var'];

if (isset($_GET['submit']) and $_GET['submit'] == 'send') {
    $inf = "UPDATE cartoes SET nome_cartao = '{$_GET['nome_cartao']}', validade = '{$_GET['validade']}',
    cvv = '{$_GET['cvv']}', numero = '{$_GET['numero']}' WHERE id_info_cartao = {$id}";
    $query = mysqli_query($con, $inf);
    #header("location: info_cartao.php?submit=sucesso");
    echo $inf;
}
$inf2 = "SELECT * FROM cartoes JOIN pessoa ON id_pessoa = fk_id_pessoa
WHERE id_info_cartao = {$id}";
$query = mysqli_query($con, $inf2);
$result = mysqli_fetch_assoc($query);
?>

<body class='text-center'>
    <main class='form-signin'>
        <form action='' method='get'>
            <h1 class='h3 mb-3 fw-normal' style='margin-top: 1cm;'>Atualizar dados cartão</h1>
            <div class='container'>
                <div class='row justify-content-center'>
                    <div class='col-6'>
                        <div class='col-12'>
                            <div class='form-floating' style='margin-top: 1cm;'>
                                <input type='text' class='form-control' name='nome_cartao' value='<?php echo $result['nome_cartao']; ?>'>
                                <label for='exampleFormControlInput1' class='form-label'><strong>Nome</strong></label>
                            </div>
                            <div class='form-floating'>
                                <input type='text' class='form-control' name='validade' value='<?php echo $result["validade"]; ?>'>
                                <label for='exampleFormControlInput1' class='form-label'><strong>Validade</strong></label>
                            </div>
                            <div class='form-floating'>
                                <input type='text' class='form-control' name='cvv' value='<?php echo $result["cvv"]; ?>'>
                                <label for='exampleFormControlInput1' class='form-label'><strong>CVV</strong></label>
                            </div>
                            <div class='form-floating'>
                                <input type='number' id="quantidade" max="9999999999999999" class='form-control' name='numero' value='<?php echo $result["numero"]; ?>'>
                                <label for='quantidade' class='form-label'><strong>Número</strong></label>
                            </div>
                            <input type='hidden' name='var' value='<?php echo $_GET['var']; ?>'>
                            <div class='row'>
                                <div class='col-6'>
                                    <a class='w-100 btn btn-lg btn-primary' href='info_cartao.php'>Voltar</a>
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