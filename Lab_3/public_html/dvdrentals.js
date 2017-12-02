// For the dvd rentals page

function chosen(){
    var input = document.forms.selection;
    var print = "";
    
    for(i=0; i<input.category.length; i++){
        if(input.category[i].selected){
            print = print + " " + input.category[i].value;
        }
        
    }
   
        alert("You have selected to search: " + print);
    }




