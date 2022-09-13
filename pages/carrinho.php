<?php
    session_start();
$title = 'Carrinho';
include '../include/header.php';
include '../include/nave-site.php';
?>

    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100 ">
            <div class="col">
                <div class="card">
                    <div class="card-body p-4">
                        <div class="row ">
                            <div class="col">
                                <!---Titulo-->
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <div>
                                        <h5 class="mb-1">Carrinho <i class="bi bi-cart3"></i></h5>
                                    </div>
                                </div>
                                <!---Primeiro produto-->
                                <div class="card mb-3" style="box-shadow: 10px 5px 5px ;">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex flex-row align-items-center">
                                                <div>
                                                    <img src="../Imagens/caffeine2.jpg" class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                                                </div>
                                                <div class="ms-3">
                                                    <h5>Camisa do café</h5>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-row align-items-center">
                                                <button type="button" class="mr-2 btn btn-dark">+</button>
                                                <button type="button" class="ms-4 btn btn-dark">-</button>
                                            </div>
                                            <div class="d-flex flex-row align-items-center">
                                                <div style="width: 60px;">
                                                    <h5 class="fw-normal mb-0" onclick="quant()" data-quantidade="1">1</h5>
                                                </div>
                                                <script>
                                                    function quant() {
                                                    console.log ('');
                                                    console.log ('quant+1');
                                                    }
                                                </script>
                                                <div style="width: 80px;">
                                                    <h5 class="mb-0">$900</h5>
                                                </div>
                                                <div style="width: 60px;">
                                                    <a><i class="bi bi-trash3-fill"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!---Segundo produto-->
                                <div class="card mb-3" style="box-shadow: 10px 5px 5px ;">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex flex-row align-items-center">
                                                <div>
                                                    <img src="../Imagens/caffeine2.jpg" class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                                                </div>
                                                <div class="ms-3">
                                                    <h5>Camisa de café</h5>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-row align-items-center">
                                                <button type="button" class="mr-2 btn btn-dark">+</button>
                                                <button type="button" class="ms-4 btn btn-dark">-</button>
                                            </div>
                                            <div class="d-flex flex-row align-items-center">
                                                <div style="width: 60px;">
                                                <h5 class="fw-normal mb-0" onclick="quant()" data-quantidade="1">1</h5>
                                                </div>
                                                <div style="width: 80px;">
                                                    <h5 class="mb-0">$900</h5>
                                                </div>
                                                <div style="width: 60px;">
                                                    <a><i class="bi bi-trash3-fill"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!---Terceiro produto-->
                                <div class="card mb-3" style="box-shadow: 10px 5px 5px;">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex flex-row align-items-center">
                                                <div>
                                                    <img src="../Imagens/caffeine2.jpg" class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                                                </div>
                                                <div class="ms-3">
                                                    <h5>Camisa de café</h5>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-row align-items-center">
                                                <button type="button" class="mr-2 btn btn-dark">+</button>
                                                <button type="button" class="ms-4 btn btn-dark"> - </button>
                                            </div>
                                            <div class="d-flex flex-row align-items-center">
                                                <div style="width: 60px;">
                                                <h5 class="fw-normal mb-0" onclick="quant()" data-quantidade="1">1</h5>
                                                </div>
                                                <div style="width: 80px;">
                                                    <h5 class="mb-0">$1199</h5>
                                                </div>
                                                <div style="width: 60px;">
                                                    <a><i class="bi bi-trash3-fill"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!---QUARTO  produto-->
                                <div class="card mb-3 mb-lg-0" style="box-shadow: 10px 5px 5px ;">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex flex-row align-items-center">
                                                <div>
                                                    <img src="../Imagens/caffeine2.jpg" class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                                                </div>
                                                <div class="ms-3">
                                                    <h5>Camisa de café</h5>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-row align-items-center">
                                                <button type="button" class="mr-2 btn btn-dark">+</button>
                                                <button type="button" class="ms-4 btn btn-dark"> - </button>
                                            </div>
                                            <div class="d-flex flex-row align-items-center">
                                                <div style="width: 60px;">
                                                <h5 class="fw-normal mb-0" onclick="quant()" data-quantidade="1">1</h5>
                                                </div>
                                                <div style="width: 80px;">
                                                    <h5 class="mb-0">$1799</h5>
                                                </div>
                                                <div style="width: 60px;">
                                                    <a><i class="bi bi-trash3-fill"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-between">
                                    <p class="mt-3 mb-2">Subtotal</p>
                                    <p class="mt-3 mb-2">$4798.00</p>
                                </div>

                                <div class="d-flex justify-content-between mb-4">
                                    <p class="mb-2">Total(Incl. taxes)</p>
                                    <p class="mb-2">$4818.00</p>
                                </div>

                                <button type="button" class="btn btn-info btn-block btn-lg">
                                    <div class="d-flex justify-content-between">
                                        <span>$4818.00</span>
                                        <span>Checkout <i class="fas fa-long-arrow-alt-right ms-2"></i></span>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
include '../include/footer.php';
?>