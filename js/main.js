//menu para dispositivos moviles
let menu = document.querySelector('#menu-icon');
let navbar = document.querySelector('.alba_bar');

function cambiarHrefEnlace() {
    if (window.innerWidth <= 1300) {
        document.getElementById("cambio").href = "#Galeria";
    } else {
        document.getElementById("cambio").href = "#Proyectos";
    }
}

window.onresize = cambiarHrefEnlace;


menu.onclick = () => {
    menu.classList.toggle('bx-x');
    navbar.classList.toggle('open');
}

//Cambio del color del menu
window.onscroll = function () {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        //Si se cumple la condicion se aplicara el estilo de la clase navbar-scrolled al header
        document.querySelector("header").classList.add("navbar-scrolled");
        document.querySelector(".alba_bar").classList.add("navbar-color");
        //Si no se cumple la condicion no aplicara los estilos
    } else {
        document.querySelector("header").classList.remove("navbar-scrolled");
        document.querySelector(".alba_bar").classList.remove("navbar-color");
    }
};


// Toma la imagen de la clase logo
const logoImage = document.querySelector('.alba_logo');
// Define la ruta de la imagen principal y a la secundaria
const defaultLogo = 'img/ALBA_WEB_ELEMENTS-03.png';
const scrolledLogo = 'img/ALBA_WEB_ELEMENTS-02.png';

window.addEventListener('scroll', () => {
    // Verifica que el usuario scrolle más de 50 px
    if (window.scrollY > 50) {
        // Si la condición se cumple aplica el cambio del logo
        logoImage.src = scrolledLogo;
    } else {
        // De no ser así no hay cambio de logo
        logoImage.src = defaultLogo;
    }
});

//modales del apartado kits
const modalAdd1 = document.querySelector('#modalHome');
const modalAdd2 = document.querySelector('#modalWork');
const modalAdd3 = document.querySelector('#modalPlay');
const modalAdd4 = document.querySelector('#modalExperiencie');

const openModal = (modal) => {
    modal.style.display = 'flex';
}

const closeModal = (modal) => {
    modal.style.display = 'none';
}

modalAdd1.onclick = (event) => {
    if (event.target === modalAdd1) {
        closeModal(modalAdd1);
    }
};

modalAdd2.onclick = (event) => {
    if (event.target === modalAdd2) {
        closeModal(modalAdd2);
    }
};

modalAdd3.onclick = (event) => {
    if (event.target === modalAdd3) {
        closeModal(modalAdd3);
    }
};

modalAdd4.onclick = (event) => {
    if (event.target === modalAdd4) {
        closeModal(modalAdd4);
    }
};

function App() { }

window.onload = function (event) {
    var app = new App();
    window.app = app;
}

App.prototype.processingButton = function (event) {
    const btn = event.currentTarget;
    const carruselList = event.currentTarget.parentNode;
    const track = event.currentTarget.parentNode.querySelector('#track');
    const carrusel = track.querySelectorAll('.carrusel');

    const carruselWidth = carrusel[0].offsetWidth;

    const trackWidth = track.offsetWidth;
    const listWidth = carruselList.offsetWidth;

    track.style.left == "" ? leftPosition = track.style.left = 0 : leftPosition = parseFloat(track.style.left.slice(0, -2) * -1);
    btn.dataset.button == "button-prev" ? prevAction(leftPosition, carruselWidth, track) : nextAction(leftPosition, trackWidth, listWidth, carruselWidth, track);
}

let prevAction = (leftPosition, carruselWidth, track) => {
    if (leftPosition > 0) {
        track.style.left = `${-1 * (leftPosition - carruselWidth)}px`;
    }
}

let nextAction = (leftPosition, trackWidth, listWidth, carruselWidth, track) => {
    if (leftPosition < (trackWidth - listWidth)) {
        track.style.left = `${-1 * (leftPosition + carruselWidth)}px`;
    }
}


'use strict';

const galery = document.querySelector('.insta-photos');
const feed = document.querySelector('.contenedor-instagram');
const next = document.querySelector('#next');
const prev = document.querySelector('#prev');

const token = '';
const url = '';
