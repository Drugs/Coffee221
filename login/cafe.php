<?php
$title = "Pagina de Login";
include 'head.php';
?>

<body>
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card bg-dark " style="border-radius: 1rem;" id="card">
                    <div class="card-body p-5 text-center">
                        <h2 style="color:white;">LOGIN</h2>
                    <form>
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
                        <div class="form-floating mt-2 mb-3">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Confirme sua Senha</label>
                        </div>
                        <div class="row">
                            <div class=" col-6 mt-2 d-grid gap-2">
                                <button type="submit" value='send' name='submit' class="btn btn-dark">Enviar</button>
                            </div>
                            <div class="col-6 mt-1 d-grid gap-2">
                                <a class='btn btn-info' href=''>Voltar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

</body>

<?php
include 'footer.php';
?>