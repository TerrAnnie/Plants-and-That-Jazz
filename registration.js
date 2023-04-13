function passwordCheck(){
    let password = document.getElementById("password").value;
    let password2 =  document.getElementById("Verpassword").value;

    if (password == ""){
        document.getElementById("message").innerHTML= "Please insert value into password field";
        return false;
        
    }

    if (password.length< 8){
        document.getElementById("message").innerHTML= "Password must be greater than 8 characters";
        return false;
        
    }

    if (password.length > 20){
        document.getElementById("message").innerHTML= "Password must be less than  20 characters";
        return false;
        
    }


    if(password != password2){
        document.getElementById("message2").innerHTML= "Passwords must be equal";
        return false;

    }


    return true; 
    alert("Successful registration");


}



