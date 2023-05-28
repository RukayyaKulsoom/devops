const emailVal = () => {
    const emailValidation = /^\w+([\.-]?\w+)@\w+([\.-]?\w+)(\.\w{2,3})+$/
    const email = document.getElementById("email")
    const val = email.value

    if(val.length === 0 ){
        email.style.border = "solid 1px red"
    }
    else if(!emailValidation.test(val)){
        email.style.border = "solid 1px red"
    }
    else{
        email.style.border = "solid 1px green"
    }
}


const cardVal = () => {
    const cardRegex = /^[0-9]{4}-[0-9]{4}-[0-9]{4}-[0-9]{4}$/;
    const card = document.getElementById("credit_card_number")
    const val = card.value

    if(val.length === 0) {
        card.style.border = "solid 1px red"
    }
    else if(!val.match(cardRegex)){
        card.style.border = "solid 1px red"
    }
    else{
        card.style.border = "solid 1px green"
    }
}

const amountVal = () => {
    const amountRegex = '^[0-9]+$'
    const amount =  document.getElementById("amount")
    const val = amount.value

    if(val.length === 0){
        amount.style.border = "solid 1px red"
    }
    else if(val < 0){
        amount.style.border = "solid 1px red"
    }
    else if(!val.match(amountRegex)){
        amount.style.border = "solid 1px red"
    }
    else {
        amount.style.border = "solid 1px green"
    }
}

const emailVal1 = () => {
    const emailValidation = /^\w+([\.-]?\w+)@\w+([\.-]?\w+)(\.\w{2,3})+$/
    const email = document.getElementById("email1")
    const val = email.value

    if(val.length === 0 ){
        email.style.border = "solid 1px red"
    }
    else if(!emailValidation.test(val)){
        email.style.border = "solid 1px red"
    }
    else{
        email.style.border = "solid 1px green"
    }
}


const cardVal1 = () => {
    const cardRegex = /^[0-9]{4}-[0-9]{4}-[0-9]{4}-[0-9]{4}$/;
    const card = document.getElementById("credit_card_number1")
    const val = card.value

    if(val.length === 0) {
        card.style.border = "solid 1px red"
    }
    else if(!val.match(cardRegex)){
        card.style.border = "solid 1px red"
    }
    else{
        card.style.border = "solid 1px green"
    }
}

const amountVal1 = () => {
    const amountRegex = '^[0-9]+$'
    const amount =  document.getElementById("amount1")
    const val = amount.value

    if(val.length === 0){
        amount.style.border = "solid 1px red"
    }
    else if(val < 0){
        amount.style.border = "solid 1px red"
    }
    else if(!val.match(amountRegex)){
        amount.style.border = "solid 1px red"
    }
    else {
        amount.style.border = "solid 1px green"
    }
}
const emailVal2 = () => {
    const emailValidation = /^\w+([\.-]?\w+)@\w+([\.-]?\w+)(\.\w{2,3})+$/
    const email = document.getElementById("email2")
    const val = email.value

    if(val.length === 0 ){
        email.style.border = "solid 1px red"
    }
    else if(!emailValidation.test(val)){
        email.style.border = "solid 1px red"
    }
    else{
        email.style.border = "solid 1px green"
    }
}


const cardVal2 = () => {
    const cardRegex = /^[0-9]{4}-[0-9]{4}-[0-9]{4}-[0-9]{4}$/;
    const card = document.getElementById("credit_card_number2")
    const val = card.value

    if(val.length === 0) {
        card.style.border = "solid 1px red"
    }
    else if(!val.match(cardRegex)){
        card.style.border = "solid 1px red"
    }
    else{
        card.style.border = "solid 1px green"
    }
}

const amountVal2 = () => {
    const amountRegex = '^[0-9]+$'
    const amount =  document.getElementById("amount2")
    const val = amount.value

    if(val.length === 0){
        amount.style.border = "solid 1px red"
    }
    else if(val < 0){
        amount.style.border = "solid 1px red"
    }
    else if(!val.match(amountRegex)){
        amount.style.border = "solid 1px red"
    }
    else {
        amount.style.border = "solid 1px green"
    }
}
const emailVal3 = () => {
    const emailValidation = /^\w+([\.-]?\w+)@\w+([\.-]?\w+)(\.\w{2,3})+$/
    const email = document.getElementById("email3")
    const val = email.value

    if(val.length === 0 ){
        email.style.border = "solid 1px red"
    }
    else if(!emailValidation.test(val)){
        email.style.border = "solid 1px red"
    }
    else{
        email.style.border = "solid 1px green"
    }
}


const cardVal3 = () => {
    const cardRegex = /^[0-9]{4}-[0-9]{4}-[0-9]{4}-[0-9]{4}$/;
    const card = document.getElementById("credit_card_number3")
    const val = card.value

    if(val.length === 0) {
        card.style.border = "solid 1px red"
    }
    else if(!val.match(cardRegex)){
        card.style.border = "solid 1px red"
    }
    else{
        card.style.border = "solid 1px green"
    }
}

const amountVal3 = () => {
    const amountRegex = '^[0-9]+$'
    const amount =  document.getElementById("amount3")
    const val = amount.value

    if(val.length === 0){
        amount.style.border = "solid 1px red"
    }
    else if(val < 0){
        amount.style.border = "solid 1px red"
    }
    else if(!val.match(amountRegex)){
        amount.style.border = "solid 1px red"
    }
    else {
        amount.style.border = "solid 1px green"
    }
}
