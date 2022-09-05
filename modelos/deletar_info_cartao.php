<?php
# BY - JONAS
$title = "DELETAR - Informações do cartão";
include "../include/header.php";
include '../include/database.php';
$id = $_GET['var'];

if (isset($_GET['del']) and $_GET['del'] == 1) {
    $inf = "DELETE FROM cartoes WHERE id_info_cartao = {$id}";
    $query = mysqli_query($con, $inf);
    header("location: info_cartao.php?del=sucesso");
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
            <h1 class='h3 mb-3 fw-normal' style='margin-top: 1cm;'>Deletar dados</h1>
            <div class='container'>
                <div class='row justify-content-center'>
                    <div class='col-6'>
                        <div class='col-12'>
                            <div class='form-floating' style='margin-top: 1cm;'>
                                <input type='text' class='form-control' name='nome_cartao' value='<?php echo $result['nome_cartao']; ?>' disabled>
                                <label for='exampleFormControlInput1' class='form-label'><strong>Nome</strong></label>
                            </div>
                            <div class='form-floating'>
                                <input type='text' class='form-control' name='validade' value='<?php echo $result["validade"]; ?>' disabled>
                                <label for='exampleFormControlInput1' class='form-label'><strong>Validade</strong></label>
                            </div>
                            <div class='form-floating'>
                                <input type='text' class='form-control' name='cvv' value='<?php echo $result["cvv"]; ?>' disabled>
                                <label for='exampleFormControlInput1' class='form-label'><strong>CVV</strong></label>
                            </div>
                            <div class='form-floating'>
                                <input type='text' class='form-control' name='numero' value='<?php echo $result["numero"]; ?>' disabled>
                                <label for='exampleFormControlInput1' class='form-label'><strong>Número</strong></label>
                            </div>
                            <input type='hidden' name='var' value='<?php echo $_GET['var']; ?>'>
                            <div class='row'>
                                <div class='col-6'>
                                    <a class='w-100 btn btn-lg btn-primary' style='margin-top: 5mm;' href='info_cartao.php'>Voltar</a>
                                </div>
                                <div class='col-6'>
                                    <button class='w-100 btn btn-lg btn-primary' style='margin-top: 5mm;' type='submit' value='1' name='del'>Confirmar</button>
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