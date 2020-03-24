function hoverContacto(element) {
    document.getElementById("mailsito").src = "img/mail%202.png";
}

function hoverCasa(element) {
    document.getElementById("casita").src = "img/house%202.png";
}

function hoverLupa(element){
    document.getElementById("lupita").src = "img/lupa%202.png";
    document.getElementById("lupita").style.position = "relative";
    document.getElementById("lupita").style.left = "-10px";   
}

function unhoverContacto(element) {
    document.getElementById("mailsito").src = "img/mail%201.png";
}

function unhoverCasa(element) {
    document.getElementById("casita").src = "img/house%201.png";
}

function unhoverLupa(element){
    document.getElementById("lupita").src = "img/lupa%201.png";
    document.getElementById("lupita").style.position = "relative";
    document.getElementById("lupita").style.left = "-10px";
}



document.getElementById('header').setAttribute('draggable', false);
document.getElementById('logo').setAttribute('draggable', false);


