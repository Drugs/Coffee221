<?php
//autor:Ana Clara
//arquivo com conexão com o BD
include '../include/header.php';
$title = "cadastrar";
include '../include/database.php';
#echo '<pre>';
#var_dump($_GET);
#echo '</pre>';
if (isset($_GET['submit']) and $_GET['submit'] == 'send') {
    $consulta = "INSERT INTO pessoa(`nome`,`email`,`telefone`,`endereco`,`pais`)
     VALUES('{$_GET['nome']}','{$_GET['email']}','{$_GET['telefone']}','{$_GET['endereco']}',
     '{$_GET['pais']}')";
    $query = mysqli_query($con, $consulta);
    #echo $consulta;
    if ($query) {
        #echo"sucesso!!";
        header("Location:relatorio_pessoa.php");
    } else {
        #echo"sem sucesso:(";

    }
}
?>

<body>

    <form action="" method="get">
        <h1 class="text-center" style="margin-top: 1cm;">Cadastro de pessoas</h1>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6">
                    <div class="col-12">
                        <div class="form-floating" style="margin-top: 1cm;">
                            <input type="text" class="form-control" name='nome'>
                            <label for="exampleFormControlInput1" class="form-label"><strong>Nome</strong></label>
                        </div>
                        <div class="form-floating">
                            <input type="email" class="form-control" name='email'>
                            <label for="exampleFormControlInput1" class="form-label"><strong>Email</strong></label>
                        </div>
                        <div class="form-floating">
                            <input type="number.mask('(000) 000-0000')" class="form-control" name='telefone'>
                            <label for="exampleFormControlInput1" class="form-label"><strong>Telefone</strong></label>
                        </div>
                        <div class="form-floating">
                            <input type="text" class="form-control" name='endereco'>
                            <label for="exampleFormControlInput1" class="form-label"><strong>Endereco</strong></label>
                        </div>
                        <div class="form-floating" style="margin-bottom: 5mm;">
                            <input type="text" class="form-control" name='pais'>
                            <label for="exampleFormControlTextarea1" class="form-label"><strong>Pais</strong></label>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <a class="w-100 btn btn-lg btn-secondary" href="CRUD_cadastro.php">Voltar</a>
                            </div>
                            <div class="col-6">
                                <button type="submit" name='submit' value='send' class="w-100 btn btn-lg btn-primary">Enviar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <?php
    include '../include/footer.php';
    ?>