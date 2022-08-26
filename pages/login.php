<?php
$title="Login";
include "../include/header.php";
?>
<body>
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card bg-dark " style="border-radius: 1rem;" id="card">
                    <div class="card-body p-5 text-center">
                        <h2 style="color:white;">LOGIN</h2>
                    <form action="valida.php">
                        <div class="form-floating mt-3">
                            <input type="text" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Digite seu Username</label>
                        </div>
                        <div class="form-floating mt-2">
                            <input type="email" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Digite seu Email</label>
                        </div>
                        <div class="form-floating mt-2">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Digite sua Senha</label>
                            
                        </div>
                        <div class="mt-2 d-grid gap-2">
                        <button type="submit" value='send' name='submit' class="btn btn-outline-light" href="../home.php">Entrar</button>
                                <p style="color:white;">Ainda não tem uma conta?<a href="cadastro.php"> Clique aqui</p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

</body>

<?php
include '../include/footer.php';
?>