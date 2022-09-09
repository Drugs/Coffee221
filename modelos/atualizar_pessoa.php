<?php
//autor:Ana Clara
//arquivo com conexão com o BD
include'../include/header.php';
$title="relatorio";
include'../include/database.php';
$id= $_GET['var'];
 #echo'<pre>';
#var_dump($result);
#echo'</pre>';
if(isset($_GET['submit']) and $_GET['submit']=='send'){
$consulta = "UPDATE pessoa SET nome = '{$_GET['nome']}', telefone = '{$_GET['telefone']}', email='{$_GET['email']}'
,endereco='{$_GET['endereco']}' , pais= '{$_GET['pais']}' WHERE id_pessoa= {$id}";

#echo $consulta;
$query=mysqli_query($con, $consulta);
  if($query){
  echo"sucesso!!";
    header("Location:relatorio_pessoa.php");
  }else{
    echo"Fracasso";

  }
}

 $consulta="select * from pessoa where id_pessoa = {$id}";
$query=mysqli_query($con, $consulta);
$result = mysqli_fetch_assoc($query);
?>

<body>

<form action="" method="get">
            <h1 class="text-center" style="margin-top: 1cm;" >Atualização de pessoas</h1>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-6">
                        <div class="col-12">
                            <div class="form-floating" style="margin-top: 1cm;">
                                <input type="text" class="form-control" name='nome' value="<?php echo $result['nome'];?>">
                                <label for="exampleFormControlInput1" class="form-label"><strong>Nome</strong></label>
                            </div>
                            <div class="form-floating">
                                <input type="email" class="form-control" name='email' value="<?php echo $result['email'];?>">
                                <label for="exampleFormControlInput1" class="form-label"><strong>Email</strong></label>
                            </div>
                            <div class="form-floating">
                                <input type="number.mask('(000) 000-0000')" class="form-control" name='telefone' value="<?php echo $result['telefone'];?>">
                                <label for="exampleFormControlInput1" class="form-label"><strong>Telefone</strong></label>
                            </div>
                            <div class="form-floating">
                                <input type="text" class="form-control" name='endereco' value="<?php echo $result['endereco'];?>">
                                <label for="exampleFormControlInput1" class="form-label"><strong>Endereco</strong></label>
                            </div>
                            <div class="form-floating" style="margin-bottom: 5mm;">
                                <input type="text" class="form-control" name='pais' value="<?php echo $result['pais'];?>">
                                <label for="exampleFormControlTextarea1" class="form-label"><strong>Pais</strong></label>

                                <input type="hidden" name="var" value="<?=$_GET['var']?>" />

                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <a class="w-100 btn btn-lg btn-secondary" href="relatorio_pessoa.php">Voltar</a>
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
include'../include/footer.php';
?>