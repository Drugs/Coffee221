<?php
include "../include/header.php";
?>

<body>

    <div class="container-fluid">
        <div class="row">
                    <div class="col-md-2 cartao">
                        <form action="">
                            <h2>Cadastrar-se</h2>
                            <label for="nome">Nome:</label>
                            <input placeholder="Digite seu nome" class="input-card" type="text" name="nome" id="">
                            <label for="email">Email:</label>
                            <input placeholder="Digite seu email" class="input-card" type="email" name="email" id="">
                            <label for="password">Senha:</label>
                            <input placeholder="Digite uma senha" class="input-card" type="password" name="password" id="">
                            <label for="telefone">Telefone:</label>
                            <input  placeholder="Digite seu telefone"class="input-card" type="text" name="telefone" id="">
                            <label for="endereco">Endereço:</label>
                            <input placeholder="Digite seu endereço" class="input-card" type="text" name="endereco" id="">
                            <label for="pais">País:</label>
                            <input placeholder="Digite seu país" class="input-card" type="text" name="pais" id="">
                            <input class="btn btn-primary mt-3" type="submit" value="Cadastrar">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
include "../include/footer.php";
?>