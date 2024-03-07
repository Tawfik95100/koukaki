console.log("ok menu burger");

 document.addEventListener('DOMContentLoaded', function () {
        const burger = document.querySelector('.burger');
        const croix = document.querySelector('.croix');
        const listeMenu = document.querySelector('.liste_menu');
        const lien = document.querySelectorAll('.lien li a');

        const openModal = ()=>{
        listeMenu.style.display = 'flex';
        burger.style.display = 'none';
        croix.style.display = 'block';
        };

        const closeModal = ()=>{
            listeMenu.style.display = 'none';
            croix.style.display = 'none';
            burger.style.display='block';
        }

        burger.addEventListener('click', function () {
            openModal();
        });

        croix.addEventListener('click', function () {
            closeModal();
        });

        lien.forEach((element) => {
            element.addEventListener("click" , function(){
                closeModal()
            });
        });
    });



