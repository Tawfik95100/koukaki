console.log("scroll fleurs ok");

  const root = document.querySelector("body");
  window.addEventListener("scroll", () => {
    root.style.setProperty("--vitesse", "3s");
  });
  
  window.addEventListener("scrollend", () => {
    root.style.setProperty("--vitesse", "14s");
  });