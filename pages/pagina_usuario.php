<?php
	session_start();
	//autor:Ana Clara
	$title = "Área de usuário";
	include '../include/database.php';
  
  if(isset($_SESSION['id_usu']) and $_SESSION['id_pessoa']){
    //echo "o usuário existe."; 
  }else{

    echo "o usuário não existe.";
    header("Location:login.php?login=inexistente");
  }
	$consulta = "SELECT * FROM pessoa join usuario on usuario.fk_id_pessoa = id_pessoa
   join endereco on endereco.fk_id_pessoa=id_pessoa WHERE id_pessoa={$_SESSION['id_usu']}";
	$query = mysqli_query($con, $consulta);
	$pessoa = mysqli_fetch_assoc($query);

	include'../include/cabecalho_usuario.php';
  #var_dump($endereco);


?>
<body>    
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3"  href="../index.php">Coffee 221</a>
      <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
     
      <div class="navbar-nav">
        <div class="nav-item text-nowrap">
        <a class=" btn  btn-warning me-2"    href="logout.php">Desconectar</a>
        </div>
      </div>
    </header>
    
    <div class="container-fluid">
      <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
          <div class="position-sticky pt-3">


                <ul class="nav flex-column">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../index.php">
                    <i class="bi bi-house"></i>
                      Home
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">
                    <i class="bi bi-file-earmark-text"></i>
                      Historico de compras
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="carrinho.php">
                    <i class="bi bi-cart4"></i>
                      Produtos no carrinho
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pagina_usuario.php">
                    <i class="bi bi-person-circle"></i>
                      Usuário
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="checkoutpage.php">
                    <i class="bi bi-basket3"></i>
                      Checkout
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">
                    <i class="bi bi-stack"></i>
                      Integrations
                    </a>
                  </li>
                </ul>
            </nav>
      
            <main class="col-md-3 ms-sm-auto col-lg-10 px-md-4">
                       <?php
                      //var_dump($endereco);?>
                  <canvas width="320" height="2" style="display: block; width: 320px; height: 2px;"></canvas> 
                          <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Foto de usuário</text>
                          </svg>
                          <div class="card-body">
                              <p class="card-text"><?php 
                                        $con=  new mysqli($host, $user, $pass, $db);
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
                                          while($_GET= $result->fetch_assoc()) {
                                            echo "Usuário: " . $_GET['nome'].
                                             "<br> endereço: " . $_GET['endereco'].  "<br>";
                                          }
                                        } else {
                                          echo "0 resultados";
                                        }
                                        $con->close();
                                        ?></p>
                                          
                            <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                            <a class="btn btn-sm btn-dark" href="atualizar_endereco.php">Atualizar end.</a>
                  <button type="button"  onclick="document.location= 'atualizar_usuario.php '"  class="btn btn-sm btn-warning">Atualizar</button>
                </div>
                              
                           
                              </div>
                              <small class="text-muted"><?php 
                                        $con=  new mysqli($host, $user, $pass, $db);
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
                                          while($_GET= $result->fetch_assoc()) {
                                            echo "Id: " . $_GET['id_pessoa']. "<br>";
                                          }
                                        } else {
                                          echo "0 resultados";
                                        }
                                        $con->close();
                                        ?></small>

                                    </div>
                                </main>
                              </div>
                            </div>  
    </body>


  <?php
  include '../include/footer.php';
  ?>