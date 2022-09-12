    <?php
    $title = 'Carrinho';
    include '../include/header.php';
    include '../include/nave-site.php'
    ?>

    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
                <div class="card">
                   <div class="card-body p-4">
                        <div class="row">
                             <div class="col">
                                   <!---Titulo-->
                                        <div class="d-flex justify-content-between align-items-center mb-4">
                                        <div><h5 class="mb-1">Carrinho </h5></div>
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
                                                    <button type="button" class="ms-4 btn btn-dark"> - </button>
                                                    </div>
                                                <div class="d-flex flex-row align-items-center">
                                                <div style="width: 60px;">
                                               <h5 class="fw-normal mb-0">2</h5>
                                            </div>
                                                    <div style="width: 80px;">
                                                    <h5 class="mb-0">$900</h5>
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
                                            <img
                                                src="../Imagens/caffeine2.jpg"
                                                class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
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
                                         <h5 class="fw-normal mb-0">2</h5>
                                        </div>
                                            <div style="width: 80px;">
                                            <h5 class="mb-0">$900</h5>
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
                                            <img
                                                src="../Imagens/caffeine2.jpg"
                                                class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
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
                                         <h5 class="fw-normal mb-0">2</h5>
                                        </div>
                                            <div style="width: 80px;">
                                            <h5 class="mb-0">$1199</h5>
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
                                            <img
                                                src="../Imagens/caffeine2.jpg"
                                                class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
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
                                         <h5 class="fw-normal mb-0">2</h5>
                                        </div>
                                            <div style="width: 80px;">
                                            <h5 class="mb-0">$1799</h5>
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
 </div>





    <body class="responsive">
        <div class="container">

            <div class="row">
                <div class="col-md-5">
                    <h2 style="color: blue;">
                        <p>Itens</p>
                    </h2>

                    <div class="col">
                        <img src="../Imagens/cafe1.png" style="height:70px;">
                        Café Caramelo e Baunilha (Nova Caps...)
                    </div>

                    <div class="col">
                        <img src="../Imagens/cafe1.png" style="height:70px;">
                        Café Caramelo e Baunilha (Nova Caps...)
                    </div>

                    <div class="col">
                        <img src="../Imagens/cafe1.png" style="height:70px;">
                        Café Caramelo e Baunilha (Nova Caps...)
                    </div>
                </div>

                <div class="col-md-3">
                    <h2 style="color:blueviolet;">
                        <p>Quantidade</p>
                    </h2>
                    <div class="col-2">
                        <form action="" method="get">
                            <label for="nome" class="form-label"></label>
                            <input type="number" class="form-control" placeholder="1" id='quantidade1' name="quantidade" data-preco='14' 
                            onchange='atualiza(this.value, this.dataset.preco)' step="1" />
                        </form>

                    </div>
                    <div class="col-2">
                        <form action="" method="get">
                            <label for="nome" class="form-label"></label>
                            <input type="number" class="form-control" placeholder="1" id='quantidade2' name="quantidade" data-preco='12'
                             onchange='atualiza(this.value, this.dataset.preco)' step="1" />


                        </form>
                    </div>
                    <div class="col-2">
                        <form action="" method="get">
                            <label for="nome" class="form-label"></label>
                            <input type="number" class="form-control" placeholder="1" id='quantidade3' name="quantidade" data-preco='17'
                             onchange='atualiza(this.value, this.dataset.preco)' step="1" />


                        </form>
                    </div>
                </div>

                <div class="col-md-2">
                    <h2 style="color:blueviolet;">
                        <p>Preço</p>
                    </h2>
                    <div class="col">
                        <button type="button" class="btn btn-sm btn-outline-primary">R$14,OO</button>
                    </div>
                    <div class="col">
                        
                        <button type="button" class="btn btn-sm btn-outline-primary">R$12,OO</button>
                    </div>
                    
                    <div class="col">
                        <button type="button" class="btn btn-sm btn-outline-primary">R$17,OO</button>
                    </div>
                </div>

                <script>
                    function atualiza(quant, prc) {
                        console.dir(prc)

                    }function quantidade(){

                        let valor= document.getElementById('quantidade1')
                        let valor1=
                    }

                </script>


                <div class="col-md-2">
                    <h2 style="color: red;">
                        <p>Remover</p>
                    </h2>
                    <div class="col">
                        <button type='button' class='btn btn-secondary btn-sm'>Deletar</button>
                    </div>
                    <div class="col">
                        <button type='button' class='btn btn-secondary btn-sm'>Deletar</button>
                    </div>
                    <div class="col">
                        <button type='button' class='btn btn-secondary btn-sm'>Deletar</button>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <h2 style="color: red;">
                            <strong>
                                <p id='total'>Total</p>
                            </strong>
                        </h2>
                    </div>
                </div>
            </div>


    <?php
     include '../include/footer.php';
     ?>