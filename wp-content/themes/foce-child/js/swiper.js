console.log("swiper ok");

const swiper = new Swiper(".swiper-container", {
    
    effect: "coverflow",
    
    grabCursor: true,  
    
    centeredSlides: true,  
    
    slidesPerView: "auto",
    spaceBetween: 10,  
    
    direction: "horizontal",
  
     coverflowEffect: {
      rotate: 39, 
      stretch: 0, 
      depth: 10, 
      modifier: 1, 
      slideShadows: false, 
    },
  
    loop: true, 
    loopedSlides: 0, 
    loopAdditionalSlides: 0, 
  
    autoplay: {
      delay: 1100,
      disableOnInteraction: false, 
    },  
    
    speed: 850,

    on: {
      init: function () {
        const imagesChatsSwiper = document.querySelectorAll(".swiper-slide img");
        imagesChatsSwiper.forEach((img)=> {
          img.style.display = "block";
          img.style.maxWidth = "250px";
        });
    },
  },
});