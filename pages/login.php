<?php
//bianca nogueira
$title = "Login";
include "../include/header.php";
include "../include/database.php";
session_start();
//var_dump($_GET);
if (isset($_GET['login']) and $_GET['login'] == 'send') {
    $loginuse = $_GET['email'];
    $senhauser = base64_encode($_GET['senha']);
    $consulta = "Select * From `usuario` where email='{$loginuse}'";
    $query = mysqli_query($con, $consulta);
    $result = mysqli_fetch_assoc($query);
    //var_dump($result);
	$continuar = $_GET['continuar_compra'];
    if ($loginuse != '' and $senhauser != '') {
        if ($loginuse == $result["email"]) {
            if ($senhauser == $result["senha"]) {
                $_SESSION['id_usu'] = $result['id_usuario'];
                $_SESSION['id_pessoa'] = $result['fk_id_pessoa'];
				if(!$continuar){
					header('Location:../index.php');
				}else{
					header('Location:checkoutpage.php');
				}
            } else {
                header('Location:login.php?senha=erro');
            }
        } else {
            header('Location:login.php?login=email');
        }
    }
}
?>

<body class="bianca responsive">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div>
                <a class=' btn btn-dark' href="../index.php"> Home </a>
            </div>
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card bg-dark " style="border-radius: 1rem;" id="card">
                    <div class="card-body p-5 text-center">
                        <h2 style="color:white;">LOGIN </h2>
                        <div>
                            <?php
                            if (isset($_GET['login']) and $_GET['login'] == 'email') {
                                echo '<div class="alert alert-warning" role="alert">Errou o email!</div>';
                            }
                            if (isset($_GET['senha']) and $_GET['senha'] == 'erro') {
                                echo '<div class="alert alert-warning" role="alert">Errou a senha!</div>';
                            }
                            if (isset($_GET['cadastro']) and $_GET['cadastro'] == 'sucesso') {
                                echo '<div class="alert alert-warning" role="alert">Agora que se cadastrou, efetue login em sua conta!</div>';
                            }
                            if (isset($_GET['logout']) and $_GET['logout'] == 'confirm') {
                                echo '<div class="alert alert-warning" role="alert">Você se desconectou!</div>';
                            }
                            ?>
                        </div>
                        <form action="">
                            <div class="form-floating mt-3">
                                <input type="text" class="form-control" id="floatingPassword" placeholder="Password" name="email">
                                <label for="floatingPassword">Digite seu Login</label>
                            </div>
                            <div class="form-floating mt-2">
                                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="senha">
                                <label for="floatingPassword">Digite sua Senha</label>

                            </div>
                            <div class="mt-2 d-grid gap-2">
                                <button type="submit" value='send' name='login' class="btn btn-outline-light">Entrar</button>
                        </form>
                        <span style="color:white;">Ainda não tem uma conta?</span>
                        <a class='mt-1 btn btn-outline-light' href="cadastro_usuario.php"> Cadastre-se aqui</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

</body>

<?php
include '../include/footer.php';
?>