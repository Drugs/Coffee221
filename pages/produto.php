<?php
//bianca nogueira
session_start();
$title = "Produto";
include "../include/database.php";
include "../include/header.php";
include "../include/nave.php";
$inf = "SELECT * FROM info_roupa JOIN produto ON id_produto = fk_id_produto WHERE id_info_roupa = 26";
$query = mysqli_query($con, $inf);
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>

<body class="tabela">
    <div class="container-lg">
        <div class="row">
            <div class="col-md-7">
                <div id="cafedama" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner sliderproduto">
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
            <div class="col-md-3" style="margin-top: 5mm;">
                <?php
                foreach ($result as $produtos) {
                    if (isset($produtos['nome_produto']) and $produtos['nome_produto'] == 'Camisa Swile') {
                        echo "
                    <h2>{$produtos['nome_produto']}<i class='bi bi-bookmark-plus'></i></h2>
                    <h4>{$produtos['descricao']}</h4>";
                    }
                    if (isset($produtos['fk_id_produto']) and $produtos['fk_id_produto'] == 25) {
                        echo "
                    <div class='card card-body' style='width: 18rem;'>
                        <h5 class='card-title text-center'>
                            <p>Tamanho (BR)</p>
                        </h5>
                        <h6 class='card-subtitle'>Guia de tamanhos</h6>
                        <p class='card-text'>
                        <p>{$produtos['tamanho']}</p>
                    </div>";
                    }
                }
                ?>
                <p><i class='bi bi-star-fill'></i><i class='bi bi-star-fill'></i><i class='bi bi-star-fill'></i><i class='bi bi-star-fill'></i><i class='bi bi-star-fill'></i><i class='bi bi-star-fill'></i>
                </p>
                <h2>R$ 77,99</h2>
            </div>
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

    <?php
    include "../include/rodape.php";
    include "../include/footer.php";
    ?>