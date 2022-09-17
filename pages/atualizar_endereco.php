<?php
session_start();
//autor:Ana Clara
//arquivo com conexão com o BD
$title = "endereço update";
include '../include/header.php';
include '../include/database.php';
#echo'<pre>';
#var_dump($_GET);
#echo'</pre>';
$id = $_SESSION['id_pessoa'];
if (isset($_GET['submit']) and $_GET['submit'] == 'send') {
    $consulta1 = "UPDATE pessoa JOIN endereco ON pessoa.id_pessoa=endereco.fk_id_pessoa SET cidade='{$_GET['cidade']}',rua='{$_GET['rua']}',avenida='{$_GET['avenida']}'
,numero='{$_GET['numero']}',cep='{$_GET['cep']}',estado='{$_GET['estado']}',complemento='{$_GET['complemento']}' WHERE id_pessoa = {$id}";
    $query = mysqli_query($con, $consulta1);
    header("Location:pagina_usuario.php");
    #echo '<pre>';
    #var_dump($consulta1);
    #echo'</pre>';
}
$consulta = "SELECT * FROM pessoa JOIN endereco ON pessoa.id_pessoa = endereco.fk_id_pessoa WHERE pessoa.id_pessoa = {$id} ";
$query = mysqli_query($con, $consulta);
$endereco = mysqli_fetch_assoc($query);
echo $consulta;
?>

<form action="" method="get">
    <h1 class="text-center" style="margin-top: 1cm;">Atualizar endereço</h1>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="col-12">
                    <div class="form-floating" style="margin-top: 1cm;">
                        <input type="text" class="form-control" name='cidade' value="<?php echo $endereco['cidade']; ?>">
                        <label for="exampleFormControlInput1" class="form-label"><strong>Cidade</strong></label>
                    </div>
                    <div class="form-floating">
                        <input type="text" class="form-control" name='rua' value="<?php echo $endereco['rua']; ?>">
                        <label for="exampleFormControlInput1" class="form-label"><strong>rua</strong></label>
                    </div>
                    <div class="form-floating">
                        <input type="text" class="form-control" name='avenida' value="<?php echo $endereco['avenida']; ?>">
                        <label for="exampleFormControlInput1" class="form-label"><strong>avenida</strong></label>
                    </div>
                    <div class="form-floating">
                        <input type="text" class="form-control" name='numero' value="<?php echo $endereco['numero']; ?>">
                        <label for="exampleFormControlInput1" class="form-label"><strong>numero</strong></label>
                    </div>
                    <div class="form-floating">
                        <input type="text" class="form-control" name='cep' value="<?php echo $endereco['cep']; ?>">
                        <label for="exampleFormControlTextarea1" class="form-label"><strong>cep</strong></label>
                    </div>
                    <div class="form-floating">
                        <input type="text" class="form-control" name='estado' value="<?php echo $endereco['estado']; ?>">
                        <label for="exampleFormControlInput1" class="form-label"><strong>estado</strong></label>
                    </div>
                    <div class="form-floating">
                        <input type="text" class="form-control" name='complemento' value="<?php echo $endereco['complemento']; ?>">
                        <label for="exampleFormControlInput1" class="form-label"><strong>complemento</strong></label>

                        <input type="hidden" name="var" value="<?= $_SESSION['id_usu'] ?>" />
                    </div>



                    <div class="row">
                        <div class="col-6" style="margin-top: 5mm;">
                            <a class="w-100 btn btn-lg btn-secondary" href="pagina_usuario.php">Voltar</a>
                        </div>

                        <div class="col-6" style="margin-top: 5mm;">
                            <button type="submit" name='submit' value='send' class="w-100 btn btn-lg btn-primary">Enviar</button>
                        </div>
                        <?php
                        include '../include/footer.php';
                        ?>