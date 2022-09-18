<?php
session_start();
//autor:Ana Clara
$title = "Área de usuário";
include '../include/database.php';

if (isset($_SESSION['id_usu']) and $_SESSION['id_pessoa'] > 0) {
  $id_pessoa = $_SESSION['id_pessoa'];
  $inf = "SELECT * FROM pessoa JOIN endereco ON pessoa.id_pessoa = endereco.fk_id_pessoa WHERE id_pessoa = {$id_pessoa}";
  $query = mysqli_query($con, $inf);
  $resultado = mysqli_fetch_assoc($query);
  if ($resultado != 0) {
    $inf2 = "SELECT * FROM pessoa JOIN endereco ON pessoa.id_pessoa = endereco.fk_id_pessoa WHERE pessoa.id_pessoa = {$id_pessoa}";
    $query = mysqli_query($con, $inf2);
    $result2 = mysqli_fetch_all($query, MYSQLI_ASSOC);
  } else {
    header("location: cadastro_endereco.php?cadastro-endereco=erro");
  }
} else {
  echo "o usuário não existe.";
  header("Location:login.php?login=inexistente");
}
$consulta = "SELECT * FROM pessoa join usuario on usuario.fk_id_pessoa = id_pessoa
   join endereco on endereco.fk_id_pessoa=id_pessoa WHERE id_pessoa={$_SESSION['id_usu']}";
$query = mysqli_query($con, $consulta);
$pessoa = mysqli_fetch_assoc($query);

include '../include/cabecalho_usuario.php';
#var_dump($endereco);
?>

<body>
  <main class="col-md-3 ms-sm-auto col-lg-10 px-md-4">
    <?php
    if (isset($_GET['endereco']) and $_GET['endereco'] == 'feito') {
      echo '<div class="alert alert-warning" role="alert">Endereço cadastrado com sucesso!</div>';
    }
    ?>
    <canvas width="320" height="2" style="display: block; width: 320px; height: 2px;"></canvas>
    <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="https://picsum.photos/160/157" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
    <title>Placeholder</title>
    <rect width="100%" height="100%" fill="#55595c"></rect>
    <div class="card-body shadow p-3 mb-5 bg-body rounded">

      <p class="card-text">
        <?php

        $con =  new mysqli($host, $user, $pass, $db);
        // Check connection
        if ($con->connect_error) {
          die("Conecção falha: " . $con->connect_error);
        }

        $sql = "SELECT * FROM pessoa 
                    join usuario on usuario.fk_id_pessoa = id_pessoa 
                    WHERE id_pessoa={$_SESSION['id_pessoa']}";
        $result = $con->query($sql);

        if ($result->num_rows > 0) {
          // output data of each row
          while ($_GET = $result->fetch_assoc()) {
            echo "Usuário: " . $_GET['nome'] .
              "<br> Endereço: " . $_GET['endereco'] .  "<br>";
          }
        } else {
          echo "0 resultados";
        }
        $con->close();
        ?>
      </p>
      <div class="d-flex justify-content-between align-items-center">
        <div class="btn-group">
          <a class="btn btn-sm btn-dark" href="atualizar_endereco.php">Atualizar end.</a>
          <button type="button" onclick="document.location= 'atualizar_usuario.php '" class="btn btn-sm btn-warning">Atualizar usu.</button>
        </div>
      </div>
      <small class="text-muted">
        <?php
        $con =  new mysqli($host, $user, $pass, $db);
        // Check connection
        if ($con->connect_error) {
          die("Conecção falha: " . $con->connect_error);
        }

        $sql = "SELECT * FROM pessoa 
                join usuario on usuario.fk_id_pessoa = id_pessoa 
                WHERE id_pessoa={$_SESSION['id_pessoa']}";
        $result = $con->query($sql);

        if ($result->num_rows > 0) {
          // output data of each row
          while ($_GET = $result->fetch_assoc()) {
            echo "Id: " . $_GET['id_pessoa'] . "<br>";
          }
        } else {
          echo "0 resultados";
        }
        $con->close();
        ?>
      </small>
    </div>
  </main>
</body>


<?php
include '../include/footer.php';
?>