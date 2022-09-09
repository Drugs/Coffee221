<?php
session_start();
$title="usuario cadastro";
include'../include/header.php';
include'../include/database.php';

echo'<pre>';
var_dump($_GET);
echo'</pre>';
if(isset($_GET['submit'])and $_GET['submit']=='send'){
#id_pessoa substituido pelo id_pessoa da sessão
$id_pessoa=$_SESSION['id_pessoa'];

$consulta="insert into endereco ( cidade,	rua, avenida, numero,	fk_id_pessoa, cep, estado,	complemento	) 
VALUES ('{$_GET['cidade']}','{$_GET['rua']}','{$_GET['avenida']}','{$_GET['numero']}','{$id_pessoa}'
'{$_GET['cep']}','{$_GET['estado']}','{$_GET['complemento']}')"; 
echo'<br>';
$query=mysqli_query($con,$consulta);
header("Location:relatorio_endereco.php");
}


?>
<body>

<form action="" method="get">
            <h1 class="text-center" style="margin-top: 1cm;">Cadastro de endereço</h1>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-6">
                        <div class="col-12">
                            <div class="form-floating" style="margin-top: 1cm;">
                                <input type="text" class="form-control" name='cidade'>
                                <label for="exampleFormControlInput1" class="form-label"><strong>Cidade</strong></label>
                            </div>
                            <div class="form-floating">
                                <input type="text" class="form-control" name='rua'>
                                <label for="exampleFormControlInput1" class="form-label"><strong>rua</strong></label>
                            </div>
                            <div class="form-floating">
                                <input type="text" class="form-control" name='avenida'>
                                <label for="exampleFormControlInput1" class="form-label"><strong>avenida</strong></label>
                            </div>
                            <div class="form-floating">
                                <input type="number" class="form-control" name='numero'>
                                <label for="exampleFormControlInput1" class="form-label"><strong>numero</strong></label>
                            </div>
                            <div class="form-floating" style="margin-bottom: 5mm;">
                                <input type="text" class="form-control" name='cep'>
                                <label for="exampleFormControlTextarea1" class="form-label"><strong>cep</strong></label>
                            </div>
                            <div class="form-floating">
                                <input type="text" class="form-control" name='estado'>
                                <label for="exampleFormControlInput1" class="form-label"><strong>estado</strong></label>
                            </div>
                            <div class="form-floating">
                                <input type="text" class="form-control" name='complemento'>
                                <label for="exampleFormControlInput1" class="form-label"><strong>complemento</strong></label>
                            </div>

                           
                        <div class="container">
                            <div class="row">
                                <div class="col-6">
                                    <a class="w-100 btn btn-lg btn-secondary" href="relatorio_endereco.php">Voltar</a>
                                </div>

                                <div class="col-6">
                                    <button type="submit" name='submit' value='send' class="w-100 btn btn-lg btn-primary">Enviar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                
            
        </form>











<?php
include'../include/footer.php'
?>