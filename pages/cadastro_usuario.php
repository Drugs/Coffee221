<?php
//bianca nogueira
session_start();
$title = "Cadastro";
include "../include/header.php";
include "../include/database.php";
if (isset($_GET['cadastra']) and $_GET['cadastra'] == 'send') {
    $consulta = "INSERT INTO pessoa (nome,email,telefone,pais)
    VALUES ('{$_GET['nome']}','{$_GET['email']}','{$_GET['telefone']}','{$_GET['pais']}')";
    var_dump($consulta);
    $query = mysqli_query($con, $consulta);
    $id_usu = mysqli_insert_id($con);
    $cripton = base64_encode($_GET['senha']);
    $consulta2 = "INSERT INTO usuario (email, senha, nivel, fk_id_pessoa, data) 
    VALUES ('{$_GET['email']}','{$cripton}','{$_GET['nivel']}','{$id_usu}', '{$_GET['data']}')";
    $query = mysqli_query($con, $consulta2);
    var_dump($consulta2);
    #header("Location: login.php?cadastro=sucesso");
}

?>
<script>
    function mascara(telefone) {
        if (telefone.value.length == 0)
            telefone.value = '(' + telefone.value;
        if (telefone.value.length == 3)
            telefone.value = telefone.value + ') 9';

        if (telefone.value.length == 10)
            telefone.value = telefone.value + '-';
    }
</script>

<body class="bianca responsive">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card bg-dark " style="border-radius: 1rem; padding-top: 2cm;" id="card">
                    <div class="card-body p-5 text-center">
                        <form action="" method="get">
                            <h2 style="color:white;">Cadastrar-se</h2>
                            <div class="form-floating mt-2">
                                <input type="text" class="form-control" id="floatingPassword" placeholder="Password" name='nome' required>
                                <label for="floatingPassword">Digite seu nome</label>
                            </div>

                            <div class="form-floating mt-2">
                                <input type="email" class="form-control" id="floatingPassword" placeholder="Password" name='email' required>
                                <label for="floatingPassword">Digite seu Email</label>
                            </div>

                            <div class="form-floating mt-2">
                                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name='senha' required>
                                <label for="floatingPassword">Digite sua Senha</label>
                            </div>
                            <div class="form-floating   mt-2">
                                <input type="tel" class="form-control" id="telefone" placeholder="Password" name='telefone' maxlength="15" data-mask="(00) 0000-0000" onkeypress="mascara(this)" pattern="^\(?\d{2}\)?[\s-]?[\s9]?\d{4}-?\d{4}$" required>
                                <label for="floatingPassword">Digite seu Telefone</label>
                            </div>
                            <!--<div class="form-floating   mt-2">
                                <input type="text" class="form-control" id="cadendereco" name='cep' maxlength="9" placeholder='Password' onkeyup='mascara2(this)' pattern="[0-9]{5}[-][0-9]{3}">
                                <label for="floatingPassword">Digite seu CEP</label>
                            </div>
                            <div class="form-floating   mt-2">
                                <input type="text" class="form-control" placeholder="Password" name='numero' maxlength="4">
                                <label for="floatingPassword">Digite o número de sua casa</label>
                            </div>
                            <div class="form-floating   mt-2">
                                <input type="text" class="form-control" placeholder="Password" name='estado'>
                                <label for="floatingPassword">Digite o seu Estado</label>
                            </div>
                            <div class="form-floating   mt-2">
                                <input type="text" class="form-control" placeholder="Password" name='cidade' required>
                                <label for="floatingPassword">Digite sua Cidade</label>
                            </div>
                            <div class="form-floating   mt-2">
                                <input type="text" class="form-control" placeholder="Password" name='rua'>
                                <label for="floatingPassword">Digite a sua Rua</label>
                            </div>-->
                            <div class="form-floating   mt-2">
                                <input type="text" class="form-control" id="floatingPassword" placeholder="Password" name='pais' required>
                                <label for="floatingPassword">Digite seu País</label>
                            </div>
                            <div class="form-floating   mt-2">
                                <input type="date" class="form-control" id="floatingPassword" placeholder="Data" name='data' required>
                                <label for="floatingPassword">Data</label>
                            </div>

                            <!-- ESTE INPUT DEFINE QUAL SERÁ O NÍVEL DO USUÁRIO -->
                            <input type="hidden" class="form-control" id="nivel" name='nivel' value="1">
                            <div class="mt-2 d-grid gap-2">
                                <button type="submit" value='send' name='cadastra' class="btn btn-outline-light">Cadastrar </button>
                                <span style="color:white;">Fazer login?</span>
                                <a href="login.php" class="btn btn-outline-light"> Clique aqui</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<?php
include "../include/footer.php";
?>