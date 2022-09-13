<?php
//bianca nogueira
session_start();
$title = "Produto";
include "../include/database.php";
include "../include/header.php";
include "../include/nave.php";
$inf = "SELECT * FROM info_roupa JOIN produto ON id_produto = fk_id_produto WHERE fk_id_produto = 25";
$query = mysqli_query($con, $inf);
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>

<body class="tabela">
    <div class="container-lg">
        <div class="row">
            <div class="col-md-5">
                <div id="cafedama" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner sliderproduto">
                        <!--Pegar imagens dinamicamente-->
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

            <div class="col-md-3" style="margin-top: 4mm;">
                <div class='card card-body' style='width: 30rem;'>
                    <?php
                    $produtos = $result[0];
                    $numero = $produtos['preco'];
                    $numero = str_replace('.', ',', $numero);
                    echo "
                    <h2>{$produtos['nome_produto']}<i class='bi bi-bookmark-plus'></i></h2>
                    <p>{$produtos['descricao']}</p>
                    
                    <div class='row'>
                        <div class='col-md-4'>
                            <h3 class='card-text' id='priceUpdate'>R$ {$numero}</h3>
                        </div>
                            <div class='col-md-5'>
                    <p>";
                    for ($i = 0; $i < 5; $i++) {
                        echo '<i class="bi bi-star-fill"></i>';
                    }
                    ?>
                </div>
            </div>
            <script>
                function alterar() {
                    document.getElementById("priceUpdate").innerHTML = "<?php $produtos['preco']; ?>";
                }
            </script>
            </p>

            <h5 class='card-title'>Guia de tamanhos</h5>
            <p>
                <?php
                foreach ($result as $informacoes) {
                    echo " 
                            <div class='col-md-12'>
                                <button type='button' class='btn btn-outline-dark' onclick='alterar()'>{$informacoes['tamanho']}</button>
                                <spam class='alert alert-secondary' style='margin-left: 2cm;'>- Em estoque: {$informacoes['estoque']}</spam>
                            </div>
                    </p>";
                } #- Em estoque: {$informacoes['estoque']}
                echo "
                    <div class= row>
                        <div class='col-md-6'>
                            <a type='button' class='btn btn-outline-success buttonprodutos' style='margin-top: 13mm;' href='checkoutpage.php'>COMPRAR</a>
                        </div>
                        <div class='col-md-6'>
                            <a type='button' class='btn btn-outline-dark' style='margin-top: 13mm; height: 60px; padding-top: 4mm;' href='galeriap.php'>Retornar para a galeria</a>
                        </div>
                    </div>";
                ?>
        </div>
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