
function NameValidate (){
    const nameRegex = '^[a-zA-Z]+$'
    const name = document.getElementById("name")
    const val = name.value

    if(val.length === 0 ){
        name.style.border = "solid 1px red"
    }
    else if(!val.match(nameRegex)){
        name.style.border = "solid 1px red"
    }
    else{
        name.style.border = "solid 1px green"
    }
}

