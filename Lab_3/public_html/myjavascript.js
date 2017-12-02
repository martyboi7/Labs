// This is the javascript file for Lab 4. Ex 1

function myFunction() {
    var email = document.getElementById("email");
    if (email.checkValidity() === false){
        alert("Incorrect Email");
    } 
    else {
        document.getElementById("para").innerHTML = "Welcome back " + email.value + " to our\n\
        webstore. We are very pleased that you visit us again. How can we help you today?";
    }   
}

