<?php
//bianca nogueira
$title="Login";
include "../include/header.php";
include "../include/database.php";
session_start();
var_dump($_GET);
if(isset($_GET['login'])and $_GET['login'] == 'send'){
    $loginuse=$_GET['email'];
    $senhauser= base64_encode($_GET['senha']);
    $consulta="Select * From `usuario` where email='{$loginuse}'";
    $query=mysqli_query($con, $consulta);
    $result= mysqli_fetch_assoc($query);
    echo $consulta;
    if($loginuse !='' AND $senhauser !=''){
        if($senhauser==$result["senha"]){
          if($loginuse==$result["email"]){
           $_SESSION['$id_usu']=$result['id_usuario'];
           header('Location:../home.php');
        }else{
            echo "Login errado";
        }
        }else{
            echo"Senha errada";
        }
    }
}

?>
<body class="bianca">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card bg-dark " style="border-radius: 1rem;" id="card">
                    <div class="card-body p-5 text-center">
                        <h2 style="color:white;">LOGIN</h2>
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
                                <p style="color:white;">Ainda não tem uma conta?<a href="usuario_cadastro.php"> Clique aqui</p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

</body>

<?php
include '../include/footer.php';
?>