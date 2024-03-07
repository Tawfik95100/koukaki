console.log("parallaxe ok");

const logo = document.querySelector("#parallaxe");

window.addEventListener("scroll", () => {

const verticale = window.scrollY;

const vitesse = 0.5;

const max_verticale = 197;

const position = Math.min(verticale*vitesse, max_verticale);

logo.style.transform = `translateY(${position}px)`;

});

