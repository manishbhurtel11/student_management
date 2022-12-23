let loginform = document.querySelectorAll(".loginform")[0];
loginform.addEventListener("submit" , ()=>{
    if(document.myform.name.value == ""){
        alert("Enter valid Credentials");
        document.myform.name.focus();
        return false;
    }
    else if(document.myform.email.value == ""){
        alert("Enter valid Credentials");
        document.myform.email.focus();
        return false;
    }
    else if(document.myform.password.value == ""){
        alert("Enter valid Credentials");
        document.myform.password.focus();
        return false;
    }
    return true;
});
