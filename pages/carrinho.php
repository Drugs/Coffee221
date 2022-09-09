    <?php
    $title = 'Carrinho';
    include '../include/header.php';
    ?>

    <body class="responsive">
        <header class="p-3 bg-dark text-white">

            <div class="container">

                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

                    <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">

                        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">

                            <use xlink:href="#bootstrap"></use>

                        </svg>

                    </a>



                    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">

                        <h2><i class="bi bi-cart4"></i> </h2>



                        <li><a href="#" class="nav-link px-2 text-warning">

                                <font style="vertical-align: inherit;">

                                    <font style="vertical-align: inherit;">SEU CARRINHO</font>

                                </font>

                            </a></li>



                        <li><a href="#" class="nav-link px-2 text-white">

                                <font style="vertical-align: inherit;">

                                    <font style="vertical-align: inherit;">Descontos</font>

                                </font>

                            </a></li>

                        <li><a href="#" class="nav-link px-2 text-white">

                                <font style="vertical-align: inherit;">

                                    <font style="vertical-align: inherit;">Comprar Novamente</font>

                                </font>

                            </a></li>

                        <li><a href="#" class="nav-link px-2 text-white">

                                <font style="vertical-align: inherit;">

                                    <font style="vertical-align: inherit;">Sobre</font>

                                </font>

                            </a></li>

                    </ul>





                    <h3><i class="bi bi-search" style="margin-right: 5mm;"></i>

                        <h3>

                            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">

                                <input type="search" class="form-control form-control-dark" placeholder="Procurar..." aria-label="Procurar">

                            </form>





                </div>

            </div>



        </header>



        <div class="container">

            <div class="row">
                <div class="col-md-4">
                    <h2 style="color: blue;">
                        <p>Itens</p>
                    </h2>

                    <div class="col">

                        <p></p>

                        <img src="../Imagens/cafe1.png" style="height:70px;">
                        Café Caramelo e Baunilha (Nova Caps...)

                    </div>

                    <div class="col">

                        <p></p>

                        <img src="../Imagens/cafe1.png" style="height:70px;">
                        Café Caramelo e Baunilha (Nova Caps...)
                    </div>

                    <div class="col">

                        <p></p>

                        <img src="../Imagens/cafe1.png" style="height:70px;">
                        Café Caramelo e Baunilha (Nova Caps...)
                    </div>
                </div>

                <div class="col-2">
                    <h2 style="color:blueviolet;">
                        <p>Quantidade</p>
                    </h2>
                    <div class="col">
                        <form action="" method="get">
                            <label for="nome" class="form-label"></label>
                            <input type="number" class="form-control" placeholder="1" id='quantidade1' name="quantidade" data-preco='14' 
                            onchange='atualiza(this.value, this.dataset.preco)' step="1" />
                        </form>

                    </div>
                    <div class="col">
                        <form action="" method="get">
                            <label for="nome" class="form-label"></label>
                            <input type="number" class="form-control" placeholder="1" id='quantidade2' name="quantidade" data-preco='12'
                             onchange='atualiza(this.value, this.dataset.preco)' step="1" />


                        </form>
                    </div>
                    <div class="col">
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
                        <p></p>
                        <button type="button" class="btn btn-sm btn-outline-primary">R$14,OO</button>
                    </div><br>
                    <div class="col">
                        <p></p>
                        <button type="button" class="btn btn-sm btn-outline-primary">R$12,OO</button>
                    </div><br>
                    <p></p>
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
                        <p></p>
                        <button type='button' class='btn btn-secondary btn-sm'>Deletar</button>
                    </div>
                    <div class="col">
                        <p></p>
                        <button type='button' class='btn btn-secondary btn-sm'>Deletar</button>
                    </div>
                    <div class="col">
                        <p></p>
                        <button type='button' class='btn btn-secondary btn-sm'>Deletar</button>
                    </div>
                </div>

                <div class="row">
                    <div class="col-">
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


    </body>

    </html>