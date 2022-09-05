<?php
//bianca nogueira
$title = "Produto";
include "../include/database.php";
include "../include/header.php";
include "../include/nave.php";
$inf = "SELECT * FROM produto JOIN info_roupa ON id_produto = fk_id_produto";
$query = mysqli_query($con, $inf);
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>

<body class="tabela">
    <div class="container-lg">
        <div class="row">
            <div class="col-md-6">
                <h2>
                    <center> Camisa swile <i class="bi bi-bookmark-plus"></i></center>
                </h2>
                <div id="cafedama" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="../Imagens/camisa1.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="../Imagens/camisa2.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="../Imagens/Camisa3.png" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#cafedama" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#cafedama" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-5">
                <?php
                foreach ($result as $produtos) {
                    if (isset($produtos['nome_produto']) and $produtos['nome_produto'] == 'Camisa Swile') {
                        echo "
                <center>
                    <h4>{$produtos['descricao']}</h4>
                </center>";
                    }
                }
                echo "
                <p><i class='bi bi-star-fill'></i><i class='bi bi-star-fill'></i><i class='bi bi-star-fill'></i><i class='bi bi-star-fill'></i><i class='bi bi-star-fill'></i><i class='bi bi-star-fill'></i>
                </p>
                <h2>R$ 77,99</h2>
                <div class='card card-body' style='width: 18rem;'>
                    <h5 class='card-title'>
                        <center>
                            <p>Tamanho (BR)</p>
                        </center>
                    </h5>
                    <h6 class='card-subtitle'>Guia de tamanhos</h6>
                    <p class='card-text'>
                ";
                foreach ($result as $tamanhos) {
                    if (isset($tamanhos['nome_produto']) and $tamanhos['nome_produto'] == 'Camisa Swile') {
                        echo "
                    <p>{$tamanhos['tamanho']}</p>
                    </div>";
                    }
                }
                foreach ($result as $estoque) {
                    if (isset($estoque['nome_produto']) and $estoque['nome_produto'] == 'Camisa Swile') {
                        echo "
                    <p>{$estoque['estoque']}</p>
                    </div>";
                    }
                }
                ?>
            </div>
        </div>

        <div class="album py-5 bg-light">
            <div class="container">
                <h3>Sugestão</h3>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="../Imagens/caf2.png" alt="">

                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                    </div>
                                    <small class="text-muted">
                                        <h5>Camisa do café</h5>
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="../Imagens/caf2.png" alt="">

                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                    </div>
                                    <small class="text-muted">
                                        <h5>Camisa do café</h5>
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="../Imagens/caf2.png" alt="">

                            <div class="card-body">

                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                    </div>
                                    <small class="text-muted">
                                        <h5>Camisa do café</h5>
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <footer class="d-flex flex-nowrap justify-content-between align-items-center py-3 my-4 border-top">
            <div class="col-md-4 d-flex align-items-center">
                <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                    <svg class="bi" width="30" height="24">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                </a>
                <span class="text-muted ">© 2022, Coffe221 .</span>
            </div>

        </footer>



        <?php
        include "../include/footer.php";
        ?>