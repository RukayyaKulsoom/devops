const fNameVal = () => {
    const nameRegex = '^[a-zA-Z]+$'
    const fName = document.getElementById("fname")
    const val = fName.value

    if(val.length === 0 ){
        fName.style.border = "solid 1px red"
    }
    else if(!val.match(nameRegex)){
        fName.style.border = "solid 1px red"
    }
    else{
        fName.style.border = "solid 1px green"
    }

}

const lNameVal = () => {
    const lName = document.getElementById("lname")
    const val = lName.value

    if(val.length === 0 ){
        lName.style.border = "solid 1px red"
    }
    else if(!val.match(nameRegex)){
        lName.style.border = "solid 1px red"
    }
    else{
        lName.style.border = "solid 1px green"
    }
}

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

const contactVal = () => {
    const contactRegex = '^[0-9]+$'
    const contact =  document.getElementById("contact")
    const val = contact.value

    if(val.length === 0){
        contact.style.border = "solid 1px red"
    }
    else if(val < 0){
        contact.style.border = "solid 1px red"
    }
    else if(val.length !== 11){
        contact.style.border = "solid 1px red"
    }
    else if(!val.match(contactRegex)){
        contact.style.border = "solid 1px red"
    }
    else {
        contact.style.border = "solid 1px green"
    }
}