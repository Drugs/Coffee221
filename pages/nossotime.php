<?php
//BY GUSTAVO INC © 2022
session_start();
$title = "Nossa equipe";
include "../include/header.php";
include "../include/nave-site.php";
?>

<body class="corpo">
    <section>
        <div class="container">
            <div class="row d-flex g-4">
                <div class="col-12 navbar-brand">
                    <h1 class="texto_principal">Nossa equipe</h1>
                </div>
                <div class="col-12 coluna_12">
                    <div class="cartao professor">
                        <img class="imagens" src="https://picsum.photos/160/157" alt="">
                        <h2>Professor</h2>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas, dignissimos!</p>
                    </div>
                </div>
                <div class="col-md-4 coluna_4">
                    <div class="cartao aluno-3">
                        <img class="imagens" src="../Imagens\imagens-nossotime/bian.png" alt="">
                        <h2>Bianca Nogueira</h2>
                        <p>Chore ou ria, mas o prazo de entrega chega...</p>
                    </div>
                </div>
                <div class="col-md-4 coluna_4">
                    <div class="cartao aluno-1">
                        <img class="imagens" src="../Imagens\imagens-nossotime\myphoto.jpeg" alt="">
                        <h2>Gustavo Henrique</h2>
                        <p><strong>Front-end developer &lt;/&gt;</strong></p>
                        <P>HTML, CSS, JS <span>&lt;-/&#x2665;&gt;</span> </P>
                        <span class="social-medias">
                            <a href="http://www.instagram.com/gustavossantossmk/" target="_blank">
                                <h4><i class="bi bi-instagram"></i></h4>
                            </a>
                            <a href="https://github.com/gustavhuey" target="_blank">
                                <h4><i class="bi bi-github"></i></h4>
                            </a>
                            <a href="http://www.linkedin.com/in/gustavo-henrique-1a1514239/" target="_blank">
                                <h4><i class="bi bi-linkedin"></i></h4>
                            </a>
                        </span>
                    </div>
                </div>
                <div class="col-md-4  coluna_4">
                    <div class="cartao aluno-3">
                        <img class="imagens" src="../Imagens\imagens-nossotime\anafoto.jpeg" alt="">
                        <h2>Ana Clara Almeida</h2>
                        <p>Mais do que soma, progamador trabalha multiplicando as horas, saõ 4,são 6, são 8. </p>
                    </div>
                </div>
                <div class="col-md-4  coluna_4">
                    <div class="cartao aluno-3">
                        <img class="imagens" src="../Imagens\imagens-nossotime\" alt="">
                        <h2>Samuel</h2>
                        <p>lordin programodor, maestria dos 'br'.</p>
                    </div>
                </div>
                <div class="col-md-4 coluna_4">
                    <div class="cartao aluno-3">
                        <img class="imagens" src="../Imagens\imagens-nossotime\duda.jpeg" alt="">
                        <h2>Eduarda Venturini</h2>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas, dignissimos!</p>
                    </div>
                </div>
                <div class="col-md-4  coluna_4">
                    <div class="cartao aluno-3">
                        <img class="imagens" src="https://picsum.photos/160/157" alt="">
                        <h2>Aluno 6</h2>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas, dignissimos!</p>
                    </div>
                </div>
                <div class="col-12  coluna_12">
                    <div class="cartao professor">
                        <img class="imagens" src="https://picsum.photos/160/157" alt="">
                        <h2>Aluno 7</h2>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas, dignissimos!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
<?php
include "../include/rodape.php";
include "../include/footer.php";
?>