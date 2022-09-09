function mask_valid() {
    let valid = document.getElementById('validade')
    if(validade.value.length == 2) {
        validade.value += "/";
    }
}


function number_valid() {
    let valid = document.getElementById('number_card')
    if(number_card.value.length==4||number_card.value.length ==9) {
        number_card.value += " ";
    } else if(number_card.value.length == 14){
        number_card.value += " ";
    }
}

function mascara(cartao) {
    if (cartao.value.length == 4)
        cartao.value = cartao.value + '-';
    if (cartao.value.length == 9)
        cartao.value = cartao.value + '-';

    if (cartao.value.length == 14)
        cartao.value = cartao.value + '-';
}