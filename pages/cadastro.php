<?php
$title="Cadastro";
include "../include/header.php";
?>
<body>
	<div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card bg-dark " style="border-radius: 1rem;" id="card">
                    <div class="card-body p-5 text-center">
                        <form action="">
                            <h2 style="color:white;">Cadastrar-se</h2>

                            <div class="form-floating mt-3">
                            <input type="text" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Digite seu nome</label>
                            </div>

                            <div class="form-floating mt-2">
                            <input type="email" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Digite seu Email</label>
                        </div>
                        <div class="form-floating mt-2">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Digite sua Senha</label>
                            </div>
                        <div class="form-floating mt-3">
                            <input type="telefone" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Digite seu Telefone</label>
                        </div>
                        <div class="form-floating mt-3">
                            <input type="endereco" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Digite seu Endereço</label>
                        </div>
                        <div class="form-floating mt-3">
                            <input type="text" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Digite seu País</label>
                        </div>
                        <div class="mt-2 d-grid gap-2">
                            <input class="btn btn-light mt-3" type="submit" value="Cadastrar">
                            <p style="color:white;">Fazer login?<a href="login.php"> Clique aqui</p>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<?php
include "../include/footer.php";
?>