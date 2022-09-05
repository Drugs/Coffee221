<?php
//bianca nogueira
$title="Login";
include "../include/header.php";
include "../include/database.php";
session_start();
//var_dump($_GET);
if(isset($_GET['login'])and $_GET['login'] == 'send'){
    $loginuse=$_GET['email'];
    $senhauser= base64_encode($_GET['senha']);
    $consulta="Select * From `usuario` where email='{$loginuse}'";
    $query=mysqli_query($con, $consulta);
    $result= mysqli_fetch_assoc($query);
   //var_dump($result);
    if($loginuse !='' AND $senhauser !=''){
        if($loginuse==$result["email"]){
        if($senhauser==$result["senha"]){
           $_SESSION['id_usu']=$result['id_usuario'];
           $_SESSION['id_pessoa']=$result['fk_id_pessoa'];
           header('Location:../home.php');
        }else{
            header('Location:login.php?senha=erro');
        }
         }else{
             header('Location:login.php?login=email');
       }
    }
}
?>
<body class="bianca">
    <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div> 
        <a class=' btn btn-outline-light' href="../home.php"> Home </a>
            </div>
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark " style="border-radius: 1rem;" id="card">
                        <div class="card-body p-5 text-center">
                        <h2 style="color:white;">LOGIN </h2>
                        <div>
                            <?php
                            if (isset($_GET['login']) and $_GET['login'] == 'email' ){
                           echo '<div class="alert alert-warning" role="alert">Errou o email!</div>';
                            }
                            if (isset($_GET['senha']) and $_GET['senha'] == 'erro' ){
                                echo '<div class="alert alert-warning" role="alert">Errou a senha!</div>';
                                 }
                            ?>
                </div>
                    <form action="">
                        <div class="form-floating mt-3">
                            <input type="text" class="form-control" id="floatingPassword" placeholder="Password" name="email">
                            <label for="floatingPassword">Digite seu Username</label>
                        </div>
                        <div class="form-floating mt-2">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password"  name="senha">
                            <label for="floatingPassword">Digite sua Senha</label>
                            
                        </div>
                        <div class="mt-2 d-grid gap-2">
                        <button type="submit" value='send' name='login' class="btn btn-outline-light">Entrar</button>
                    </form>
						<span style="color:white;">Ainda não tem uma conta?</span>
						<a class='mt-1 btn btn-outline-light' href="cadastro_usuario.php"> Clique aqui</a>
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