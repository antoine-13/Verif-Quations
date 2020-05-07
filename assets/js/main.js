var number = 1
function addinput(number, ligne){

    var select = "." + ligne;

    var div = document.createElement("div");
    div.className="container_chevron col s1";
    div.style = "height: 100%";
    div.style.paddingTop = "20px";
    document.querySelector(select).appendChild(div);

    var i = document.createElement("i");
    i.className = "material-icons";
    i.innerHTML = "chevron_right";
    i.style.height = "100%";
    document.querySelector(select + " .container_chevron").appendChild(i);


    var div = document.createElement("div");
    div.className = "container_input col s8";
    document.querySelector(select).appendChild(div)

    var input = document.createElement("input");
    input.type = "text";
    input.name = number;
    switch(number){
        case 1:
            input.placeholder = "Entrez votre " + number + "ere ligne";
            break;
        default:
            input.placeholder = "Entrez votre " + number + "eme ligne";
    }

    document.querySelector(select + " .container_input").appendChild(input);

    var num_ligne_prec = number - 1;
    var a = num_ligne_prec.toString();
    var ligne_prec = ".ligne" + a;
    
    if(num_ligne_prec >= 1){
        var span = document.createElement("span");
        span.innerHTML = document.querySelector(ligne_prec + " .container_input input").value;

        document.querySelector(ligne_prec + " .container_chevron").style.paddingTop = "0";

        var parent = document.querySelector(ligne_prec + " .container_input");
        var child = document.querySelector(ligne_prec + " .container_input input");
        parent.replaceChild(span ,child);

        /*var div = document.createElement("div");
        div.className = "row container_titre";
        document.querySelector("entree").appendChild(div);

        var span = document.createElement("span");
        span.innerHTML = "ligne " + a + ":"
        document.querySelector(ligne_prec + " .container_titre").appendChild(span);*/
        
    }
    
    
}

function addrow(number){
    var div = document.createElement("div");
    var a = number.toString();
    var ligne = "ligne" + a;
    div.className = "row " + ligne;
    document.querySelector(".entree").appendChild(div);
    addinput(number, ligne)
}

document.getElementById("add").onclick = function() {
    addrow(number);
    number++;
}


