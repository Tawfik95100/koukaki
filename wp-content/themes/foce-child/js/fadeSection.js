console.log("fade section ok");


document.addEventListener("DOMContentLoaded", function () {
  const sections = document.querySelectorAll(".fade-in");


  const visibilityThreshold = 0.8;

  
  function isElementInViewport(element, offset = 0) {
    const bounding = element.getBoundingClientRect();
    return bounding.top >= -offset && bounding.bottom <= window.innerHeight + offset;
  }

  function fadeIn() {
    sections.forEach((section) => {
      const { top, bottom } = section.getBoundingClientRect();
      const windowHeight = window.innerHeight;
      
      if (top < windowHeight - windowHeight * visibilityThreshold && bottom > windowHeight * visibilityThreshold) {
        section.classList.add("visible");
      }
    });
  }

  function handleScroll() {
    fadeIn();
  }

  window.addEventListener("scroll", handleScroll);
  fadeIn();
});
