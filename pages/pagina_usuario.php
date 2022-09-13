<?php
	session_start();
	//autor:Ana Clara
	$title = "Área de usuário";
	include '../include/database.php';
  
  if(isset($_SESSION['id_usu']) and $_SESSION['id_pessoa']){
    echo "o usuário existe."; 
  }else{

    echo "o usuário não existe.";
    header("Location:login.php?login=inexistente");
  }
	$consulta = "SELECT * FROM pessoa 
	join usuario on usuario.fk_id_pessoa = id_pessoa 
	WHERE id_usuario={$_SESSION['id_usu']}";
	$query = mysqli_query($con, $consulta);
	$pessoa = mysqli_fetch_assoc($query);
	include'../include/cabecalho_usuario.php';
  #var_dump($pessoa);


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
                    <a class="nav-link" href="#">
                    <i class="bi bi-cart4"></i>
                      Produtos no carrinho
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">
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
    
      
            <main class="col-md-6 ms-sm-auto col-lg-10 px-md-4"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
              <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
              </div>
              <?php
              #var_dump($pessoa);?>
              <canvas width="1" height="1" style="display: block; width: 1px; height: 1px;"></canvas> 
                      <svg class="bd-placeholder-img card-img-top" width="200%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Foto de usuário</text>
                      </svg>
                      <div class="card-body">
                          <p class="card-text"><?php 
                                    $con=  new mysqli($host, $user, $pass, $db);
                                    // Check connection
                                    if ($con->connect_error) {
                                      die("Connection failed: " . $con->connect_error);
                                    }

                                    $sql = "SELECT * FROM pessoa 
                                    join usuario on usuario.fk_id_pessoa = id_pessoa 
                                    WHERE id_pessoa={$_SESSION['id_pessoa']}";
                                    $result = $con->query($sql);

                                    if ($result->num_rows > 0) {
                                      // output data of each row
                                      while($_GET= $result->fetch_assoc()) {
                                        echo "Usuário: " . $_GET['nome']. "<br>";
                                      }
                                    } else {
                                      echo "0 results";
                                    }
                                    $con->close();
                                    ?></p>
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="btn-group">
                          
                            <button type="button" onclick="document.location= 'atualizar_usuario.php '" class="btn btn-sm btn-warning">Atualizar</button>
                          </div>
                          <small class="text-muted">9 mins</small>
                        </div>
                      </div>
              </main>
              
 </body>


  <?php
  include '../include/footer.php';
  ?>