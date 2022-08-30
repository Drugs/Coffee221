<!DOCTYPE >
<html>

<head>
    <title>The COFFE'JOIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css">

    <style>
        .feature-icon {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 4rem;
            height: 4rem;
            margin-bottom: 1rem;
            font-size: 2rem;
            color: #fff;
            border-radius: 0.75rem;
        }
    </style>

</head>
<body>

<div class="row g-5">
      <div class="col-md-5 col-lg-4 order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-primary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Seu carrinho</font></font></span>
          <span class="badge bg-primary rounded-pill"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></span>
        </h4>
        <ul class="list-group mb-3">
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nome do Produto</font></font></h6>
              <small class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Descrição breve</font></font></small>
            </div>
            <span class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$ 12</font></font></span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Segundo produto</font></font></h6>
              <small class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Descrição breve</font></font></small>
            </div>
            <span class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$ 8</font></font></span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Terceiro item</font></font></h6>
              <small class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Descrição breve</font></font></small>
            </div>
            <span class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$ 5</font></font></span>
          </li>
          <li class="list-group-item d-flex justify-content-between bg-light">
            <div class="text-success">
              <h6 class="my-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Código promocional</font></font></h6>
              <small><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">CÓDIGO DE EXEMPLO</font></font></small>
            </div>
            <span class="text-success"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">−$5</font></font></span>
          </li>
          <li class="list-group-item d-flex justify-content-between">
            <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Total (USD)</font></font></span>
            <strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$ 20</font></font></strong>
          </li>
        </ul>

        <form class="card p-2">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Código promocional">
            <button type="submit" class="btn btn-secondary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Resgatar</font></font></button>
          </div>
        </form>
      </div>
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Endereço de cobrança</font></font></h4>
        <form class="needs-validation" novalidate="">
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Primeiro nome</font></font></label>
              <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sobrenome</font></font></label>
              <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>

            <div class="col-12">
              <label for="username" class="form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nome de usuário</font></font></label>
              <div class="input-group has-validation">
                <span class="input-group-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">@</font></font></span>
                <input type="text" class="form-control" id="username" placeholder="Nome de usuário" required="">
              <div class="invalid-feedback">
                  Your username is required.
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">E- mail </font></font><span class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">(opcional)</font></font></span></label>
              <input type="email" class="form-control" id="email" placeholder="você@exemplo.com">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="col-12">
              <label for="address" class="form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Endereço</font></font></label>
              <input type="text" class="form-control" id="address" placeholder="Rua Principal 1234" required="">
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

            <div class="col-12">
              <label for="address2" class="form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Endereço 2 </font></font><span class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">(Opcional)</font></font></span></label>
              <input type="text" class="form-control" id="address2" placeholder="Apartamento ou suíte">
            </div>

            <div class="col-md-5">
              <label for="country" class="form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">País</font></font></label>
              <select class="form-select" id="country" required="">
                <option value=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Escolher...</font></font></option>
                <option><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Estados Unidos</font></font></option>
              </select>
              <div class="invalid-feedback">
                Please select a valid country.
              </div>
            </div>

            <div class="col-md-4">
              <label for="state" class="form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Estado</font></font></label>
              <select class="form-select" id="state" required="">
                <option value=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Escolher...</font></font></option>
                <option><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Califórnia</font></font></option>
              </select>
              <div class="invalid-feedback">
                Please provide a valid state.
              </div>
            </div>

            <div class="col-md-3">
              <label for="zip" class="form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Fecho eclair</font></font></label>
              <input type="text" class="form-control" id="zip" placeholder="" required="">
              <div class="invalid-feedback">
                Zip code required.
              </div>
            </div>
          </div>

          <hr class="my-4">

          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="same-address">
            <label class="form-check-label" for="same-address"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">O endereço de entrega é o mesmo que meu endereço de cobrança</font></font></label>
          </div>

          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="save-info">
            <label class="form-check-label" for="save-info"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Salve esta informação para a próxima vez</font></font></label>
          </div>

          <hr class="my-4">

          <h4 class="mb-3"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Pagamento</font></font></h4>

          <div class="my-3">
            <div class="form-check">
              <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked="" required="">
              <label class="form-check-label" for="credit"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cartão de crédito</font></font></label>
            </div>
            <div class="form-check">
              <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required="">
              <label class="form-check-label" for="debit"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cartão de débito</font></font></label>
            </div>
            <div class="form-check">
              <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required="">
              <label class="form-check-label" for="paypal"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">PayPal</font></font></label>
            </div>
          </div>

          <div class="row gy-3">
            <div class="col-md-6">
              <label for="cc-name" class="form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nome no cartão</font></font></label>
              <input type="text" class="form-control" id="cc-name" placeholder="" required="">
              <small class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nome completo conforme exibido no cartão</font></font></small>
              <div class="invalid-feedback">
                Name on card is required
              </div>
            </div>

            <div class="col-md-6">
              <label for="cc-number" class="form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Número do cartão de crédito</font></font></label>
              <input type="text" class="form-control" id="cc-number" placeholder="" required="">
              <div class="invalid-feedback">
                Credit card number is required
              </div>
            </div>

            <div class="col-md-3">
              <label for="cc-expiration" class="form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Expiração</font></font></label>
              <input type="text" class="form-control" id="cc-expiration" placeholder="" required="">
              <div class="invalid-feedback">
                Expiration date required
              </div>
            </div>

            <div class="col-md-3">
              <label for="cc-cvv" class="form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">CVV</font></font></label>
              <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
              <div class="invalid-feedback">
                Security code required
              </div>
            </div>
          </div>

          <hr class="my-4">

          <button class="w-100 btn btn-primary btn-lg" type="submit"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Continuar para finalizar a compra</font></font></button>
        </form>
      </div>
    </div>




<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>
</body>

</html>
