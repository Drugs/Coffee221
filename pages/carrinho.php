    <?php
    $title = 'Carrinho';
    include '../include/header.php';
    include '../include/nave-site.php'
    ?>

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