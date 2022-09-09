<?php

$title="Relatório endereço";
include '../include/header.php';
include '../include/database.php';
$pesquisa = '';

		if (isset($_GET["submit"]) and $_GET["submit"] == "buscar"){
			$pesquisa = $_GET['buscar'];

		$consulta = "SELECT *,id_endereco,cidade, rua, avenida, numero, fk_id_pessoa, cep, estado, complemento 
		from pessoa join endereco on pessoa.id_pessoa=endereco.fk_id_pessoa where endereco.id_endereco LIKE'%{$pesquisa}%' 
		";

		$query  = mysqli_query($con, $consulta);
		$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
		

}

$consulta2="SELECT *,id_endereco,cidade, rua, avenida, numero, fk_id_pessoa, cep, estado, complemento
 from pessoa join endereco on pessoa.id_pessoa=endereco.fk_id_pessoa";
 $query  = mysqli_query($con, $consulta2);
 $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
echo $consulta2;
#var_dump($_GET);

 
?>
 <div class='container'>
     <div class='row'>  
	 <form action="" method="get">
            <div class="col-12">
               <input type="text" name="buscar" 
               class="form-control"/>
            </div>

            <div class="col-2">
            <button type="submit" name='submit' value='buscar'
             class="btn btn-warning">Buscar</button>
            </div>
          </form>
    
    <h1 class='text-center'>Relatório de endereços</h1>
      <a class="btn mb-3 btn-warning float-start" href="cadastro_endereco.php">Cadastrar</a>
      <div class="col-12">
               <table class="mt-3 table table-dark" style="box-shadow:10px 10px 50px  #000000,10px 10px 10px  #000000;">
                <thead class="table table-dark table-striped">
					<tr>
						<th scope ="col">#</th>  
						<th scope ="col">Cidade</th>
						<th scope ="col">Rua</th>
						<th scope ="col">Avenida</th>
						<th scope ="col">numero</th>
						<th scope ="col">id_pessoa</th>
						<th scope ="col">CEP</th>
						<th scope ="col">Estado</th>
						<th scope ="col">Complemento</th>
						<th scope ="col">Atualizar</th>
						<th scope ="col">Deletar</th> 
					</tr>
				</thead>
				<tbody>
	<?php
		foreach ($result as $endereco){
			echo "<tr>
			<th scope='row'>{$endereco['id_endereco']}</th>
			 <td>{$endereco['cidade']}</td>
			 <td>{$endereco['rua']}</td>
			 <td>{$endereco['avenida']}</td>
			 <td>{$endereco['numero']}</td>
			 <td>{$endereco['id_pessoa']}</td>
			 <td>{$endereco['cep']}</td>
			 <td>{$endereco['estado']}</td>
			 </td>
			 <td>{$endereco['complemento']}</td>
			 <td><a class='btn btn-warning' href='.php?var={$endereco['id_endereco']}'>Atualizar</a> 
			 </td>
			 <td><a class='btn btn-outline-warning' href='.php?var={$endereco['id_endereco']}'>Deletar</a> </td>
					   </tr>";
        }

?>
               
     </tbody>

        </table>
        </div>
     </div>
     </div> 
   </div>

<?php
include '../include/footer.php';
?>