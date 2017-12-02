/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// Lab 4 returns page js file

function verify(){
    var ime = document.getElementById("email");
    var dvd = document.getElementById("dvd");
    var date = document.getElementById("rdate").value;
    var msec = Date.parse(date);
    var now = Date.now();
console.log(msec);
console.log(isNaN(msec));
    //alert(now);
    //alert(msec.value);
    
    if (ime.checkValidity() === false){
        alert("Incorrect Email");
        
    }else if(dvd.checkValidity() === false){
        alert("Inccorect Input for DVD Name");
        
    }else if(msec < now || isNaN(msec)){
        alert("Return Date inserted preceeds todays's Date or is Erroneous");
        
    } else{
        alert("All details are OK");
       
    }
       
    // Only problem with code is that user can decide not to insert a date.
    // need to figure a way to fix this. ASK FOR HELP
}
