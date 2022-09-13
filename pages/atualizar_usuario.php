<?php
session_start();
#var_dump ($_SESSION);
//autor:Ana Clara
$title="Atualizar pagina usuário".$_SESSION['id_usu'];
include'../include/header.php';
include'../include/database.php';

#echo'<pre>';
#var_dump($_GET);
#echo'</pre>';
$id_usu=$_SESSION['id_pessoa'];

if(isset($_GET['cadastro']) and $_GET['cadastro'] == 'update'){
$cripton=base64_encode($_GET['senha']);

$consulta_up= "UPDATE pessoa
JOIN usuario ON pessoa.id_pessoa = usuario.fk_id_pessoa
SET nome = '{$_GET['nome']}', pessoa.email = '{$_GET['email']}', telefone = '{$_GET['telefone']}',
endereco = '{$_GET['endereco']}',pais = '{$_GET['pais']}', usuario.email = '{$_GET['login']}',senha=
'{$cripton}'
WHERE id_usuario = {$_GET['var']} ";
$query=mysqli_query($con,$consulta_up);
header("Location:pagina_usuario.php");
#echo'<pre>';
#var_dump($consulta_up);
#echo'</pre>';
}

$consulta="SELECT * , usuario.email as login, pessoa.email as bom from pessoa 
join usuario on pessoa.id_pessoa = usuario.fk_id_pessoa
where pessoa.id_pessoa = {$id_usu}";
#echo $consulta;
$query=mysqli_query($con,$consulta);
$result=mysqli_fetch_assoc($query);
#var_dump($result);

?>

<form action="" method="get">
            <h1 class="text-center" style="margin-top: 1cm;">Atualização de usuario</h1>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-6">
                        <div class="col-12">
                            <div class="form-floating" style="margin-top: 1cm;">
                                <input type="text" class="form-control" name='nome' value="<?php echo $result['nome'];?>"/>
                                <label for="exampleFormControlInput1" class="form-label"><strong>Nome</strong></label>
                            </div>
                            <div class="form-floating">
                                <input type="email" class="form-control" name='email'value="<?php echo $result['bom'];?>">
                                <label for="exampleFormControlInput1" class="form-label"><strong>Email</strong></label>
                            </div>
                            <div class="form-floating">
                                <input type="tel" class="form-control" name='telefone'data-mask="(00) 0000-0000" onkeypress="mascara(this)" pattern="^\(?\d{2}\)?[\s-]?[\s9]?\d{4}-?\d{4}$" required value="<?php echo $result['telefone'];?>">
                                <label for="exampleFormControlInput1" class="form-label"><strong>Telefone</strong></label>
                            </div>
                            <script>

                            </script>
                            <div class="form-floating">
                                <input type="text" class="form-control" name='endereco'value="<?php echo $result['endereco'];?>">
                                <label for="exampleFormControlInput1" class="form-label"><strong>Endereco</strong></label>
                            </div>
                            <div class="form-floating" style="margin-bottom: 5mm;">
                                <input type="text" class="form-control" name='pais' value="<?php echo $result['pais'];?>">
                                <label for="exampleFormControlTextarea1" class="form-label"><strong>Pais</strong></label>
                            </div>


                            <div class="row">
                                <div class="col-12">

                            <div class="form-floating">
                                <input type="text" class="form-control" name='login'value="<?php echo $result['login'];?>">
                                <label for="exampleFormControlInput1" class="form-label"><strong>login</strong></label>
                            </div>
                            <div class="form-floating">
                                <input type="password" class="form-control" name='senha' required>
                                <label for="exampleFormControlInput1" class="form-label"><strong>senha</strong></label>
                            </div>
                          
                           

                                <input type="hidden" name="var" value="<?=$_SESSION['id_usu']?>" />
                            </div>
                                
                           
                            <div class="row">
                                <div class="col-6">
                                    <a class="w-100 btn btn-lg btn-secondary" href="pagina_usuario.php">Voltar</a>
                                </div>
                                <div class="col-6">
                                    <button type="cadastro" name='cadastro' value='update' class="w-100 btn btn-lg btn-primary">Enviar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>




<?php
include'../include/footer.php'
?>