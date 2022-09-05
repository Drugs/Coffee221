<?php
//bianca nogueira
$title = "Cadastro";
include "../include/header.php";
include "../include/database.php";
if (isset($_GET['cadastra']) and $_GET['cadastra'] == 'send') {
    $consulta = "insert into pessoa(nome,email,telefone,endereco,pais)
    VALUES ('{$_GET['nome']}','{$_GET['email']}','{$_GET['telefone']}','{$_GET['endereco']}','{$_GET['pais']}')";
    $query = mysqli_query($con, $consulta);
    $id_usu = mysqli_insert_id($con);
    $cripton = base64_encode($_GET['senha']);
    $consulta = "insert into usuario ( `email`, `senha`, `nivel`, `fk_id_pessoa`, `data`) 
VALUES ('{$_GET['email']}','{$cripton}','{$id_usu}', '{$_GET['data']}')";
    echo '<br>';
    $query = mysqli_query($con, $consulta);
    header("Location:../home.php");
}
?>

<body class="bianca">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card bg-dark " style="border-radius: 1rem; padding-top: 2cm;" id="card">
                    <div class="card-body p-5 text-center">
                        <form action="">
                            <h2 style="color:white;">Cadastrar-se</h2>
                            <div class="form-floating mt-3">
                                <input type="text" class="form-control" id="floatingPassword" placeholder="Password" name='nome'>
                                <label for="floatingPassword">Digite seu nome</label>
                            </div>

                            <div class="form-floating mt-2">
                                <input type="email" class="form-control" id="floatingPassword" placeholder="Password" name='email'>
                                <label for="floatingPassword">Digite seu Email</label>
                            </div>
                            <div class="form-floating mt-2">
                                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name='senha'>
                                <label for="floatingPassword">Digite sua Senha</label>
                            </div>
                            <div class="form-floating mt-3">
                                <input type="tel" class="form-control" id="floatingPassword" placeholder="Password" name='telefone'>
                                <label for="floatingPassword">Digite seu Telefone</label>
                            </div>
                            <div class="form-floating mt-3">
                                <input type="endereco" class="form-control" id="floatingPassword" placeholder="Password" name='endereco'>
                                <label for="floatingPassword">Digite seu Endereço</label>
                            </div>
                            <div class="form-floating mt-3">
                                <input type="text" class="form-control" id="floatingPassword" placeholder="Password" name='pais'>
                                <label for="floatingPassword">Digite seu País</label>
                            </div>
                            <div class="form-floating mt-3">
                                <input type="text" class="form-control" id="floatingPassword" placeholder="Nivel" name='nivel'>
                                <label for="floatingPassword">Digite o Nivel</label>
                            </div>
                            <div class="form-floating mt-3">
                                <input type="date" class="form-control" id="floatingPassword" placeholder="Data" name='data'>
                                <label for="floatingPassword">Data</label>
                            </div>
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