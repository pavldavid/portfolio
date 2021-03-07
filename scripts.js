document.getElementById("guestbook").onsubmit = validate;

function validate() {
    //Create flag variable
    let isValid = true;

    //Clear all error messages
    let errors = document.getElementsByClassName("err");
    for (let i = 0; i < errors.length; i++) {
        errors[i].style.display = "none";
    }

    //Check first name
    let first = document.getElementById("fname").value;
    if (first == "") {
        let errFirst = document.getElementById("err-fname");
        errFirst.style.display = "inline";
        isValid = false;
    }

    //Check last name
    let last = document.getElementById("lname").value;
    if (last == "") {
        let errLast = document.getElementById("err-lname");
        errLast.style.display = "inline";
        isValid = false;
    }
    
    let met = document.getElementById("met").value;

    if(met == "none"){
        let errMet = document.getElementById("err-met");
        errMet.style.display = "inline";
        isValid = false;
    }


    let url = document.getElementById("url").value;
    if(url != ""){
        if(!url.includes("http") || !url.includes(".com")){
            let errURL = document.getElementById("err-url");
            errURL.style.display = "inline";
            isValid = false;
        }
    }


    let validEmail = /^\s*[\w\-\+_]+(\.[\w\-\+_]+)*\@[\w\-\+_]+\.[\w\-\+_]+(\.[\w\-\+_]+)*\s*$/;

    let  email = document.getElementById("email").value;

    if (!email.match(validEmail)) {
        let errEmail = document.getElementById("err-email");
        errEmail.style.display = "inline";
        isValid = false;
    }


    let mailing = document.getElementById("check").checked;
    if(mailing === true && email === ""){
        let errEmail = document.getElementById("err-email");
        errEmail.style.display = "inline";
        isValid = false;
    }


    return isValid;
}
