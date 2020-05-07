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
    var div = document.createElement("div");
    div.id = "check";
    div.style = "position: absolute;";
    var a = document.createElement("a");
    a.id = "valid"
    var i = document.createElement("i");
    i.className = "material-icons";
    i.innerHTML = "check";
    var select = "." + ligne;

    document.querySelector(select).appendChild(input);
    document.querySelector(select).appendChild(div);
    document.getElementById("check").appendChild(a);
    document.getElementById("valid").appendChild(i);

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