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