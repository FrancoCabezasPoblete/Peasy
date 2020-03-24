function hoverContacto(element) {
    document.getElementById("icono-contacto").src = "img/mail%202.png";
}

function hoverCasa(element) {
    document.getElementById("icono-casa").src = "img/house%202.png";
}

function hoverLupa(element){
    document.getElementById("icono-lupa").src = "img/lupa%202.png";
    document.getElementById("icono-lupa").style.position = "relative";
    document.getElementById("icono-lupa").style.left = "-10px";   
}

function unhoverContacto(element) {
    document.getElementById("icono-contacto").src = "img/mail%201.png";
}

function unhoverCasa(element) {
    document.getElementById("icono-casa").src = "img/house%201.png";
}

function unhoverLupa(element){
    document.getElementById("icono-lupa").src = "img/lupa%201.png";
    document.getElementById("icono-lupa").style.position = "relative";
    document.getElementById("icono-lupa").style.left = "-10px";
}

$(function () {
    $('[data-toggle="popover"]').popover()
})

document.getElementById('header').setAttribute('draggable', false);
document.getElementById('logo').setAttribute('draggable', false);


