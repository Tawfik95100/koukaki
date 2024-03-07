console.log("nuages ok");

function mouvement() {
    
    const activationSection = document.getElementById("place");
    const verticale = window.scrollY;
    const nuages = document.querySelector(".nuages");
  
   if (verticale >= activationSection.offsetTop) {
     
      const vitesse = 0.3;
      const initialPosition = 300;
      const nuages_horizontale = -verticale * vitesse + initialPosition;
      nuages.style.transform = `translateX(${nuages_horizontale}px)`;
    }
  }
  
  window.addEventListener("scroll", mouvement);