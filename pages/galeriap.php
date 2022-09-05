<?php
    $title= 'GALERIA-PRODUTOS';
    include '../include/header.php';
?>
<div class='container'> 
  <div class='row'>

    <nav class="navbar navbar-dark bg-dark">
      <a class="nav-link  href=#"><i class="bi bi-arrow-left"></i><i class="bi bi-list"></i></a>
      <a class="nav-link" href="#"><button class="btn btn-sm btn-outline-secondary" 
      type="button"><i class="bi bi-search"></i>pesquisar</button></a>
      <a class="nav-link  href=#"><i class="bi bi-cart-fill"></i></a>
    </nav>

                    <!-- teste das colunas com os cards  -->

          
            <div class="row row-cols-3">
                <div class="col">
                  <div class="card" style="width: 14rem;">
                    <img src="../imagens/foco.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                     <h6 class="card-title">camisa foco, força, café TAM:M</h6>
                     <p class="card-text">adicionar ao carrinho</p>
                     <a href="#" class="btn btn-dark">39.90</a>
                   </div>
                 </div>
                </div>   
                <div class="col">
                     <div class="card" style="width: 14rem;">
                        <img src="../imagens/caffeine2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h6 class="card-title">descrição do produto</h6>
                          <p class="card-text">comprar/add ao carrinho</p>
                          <a href="#" class="btn btn-dark">49.90</a>
                        </div>
                      </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 14rem;">
                      <img src="../imagens/CA.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                       <h6 class="card-title">descrição do produto</h6>
                       <p class="card-text">comprar/add ao carrinho</p>
                       <a href="#" class="btn btn-dark">19.90</a>
                      </div>
                    </div>
                </div>
                
             </div>


<?php
    include '../include/footer.php';
?>