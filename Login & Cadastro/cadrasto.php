<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="_assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="_assets/css/fonts.css">
    <link rel="stylesheet" href="meu.css">
</head>
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
   </div>

<?php
include "footer.php";
?>