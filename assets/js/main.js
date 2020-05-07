var number = 1
function addinput(number, ligne){
    var input = document.createElement("input");
    input.type = "text";
    switch(number){
        case 1:
            input.placeholder = "Entrez votre " + number + "ere ligne";
            break;
        default:
            input.placeholder = "Entrez votre " + number + "eme ligne";
   }
    var select = "." + ligne;
    document.querySelector(select).appendChild(input);
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