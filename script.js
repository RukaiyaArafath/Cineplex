let menu=document.querySelector('#menu-btn');
let navbar=document.querySelector('.header .navbar');

menu.onclick=()=>{
     menu.classList.toggle('fa-times');
     navbar.classList.toggle('active');
};

const search=document.getElementById('search'),
     searchBtn=document.getElementById('search-btn'),
     searchClose=document.getElementById('search--close');

     searchBtn.addEventListener('click',()=>{
          search.classList.add('show-search')
     }) 
     

     searchClose.addEventListener('click', ()=>{
          search.classList.remove('show-search')
     }) ;
     

     const login = document.getElementById('login'),
        loginBtn = document.getElementById('login-btn'),
        loginClose = document.getElementById('login-close')

        loginBtn.addEventListener('click',()=>{
          login.classList.add('show-login')
     }) 
     

     loginClose.addEventListener('click',()=>{
          login.classList.remove('show-login')
     }) 
     


     var swiper = new Swiper(".home-slider", {
          loop:true,
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
          },
          navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
          },
      });



      var swiper = new Swiper(".image-slider", {
          effect: "coverflow",
          grabCursor: true,
          centeredSlides: true,
          slidesPerView: "auto",
          coverflowEffect: {
            rotate: 0,
            stretch: 0,
            depth: 100,
            modifier: 2,
            slideShadows: true,
          },loop:true,
          autpplay:{
               Delay:2000,
               disableOnInteraction:false,
          }
           });




var swiper = new Swiper(".container-slider", {
     slidesPerView: 1,
     spaceBetween: 30,
     loop: true,
     pagination: {
       el: ".swiper-pagination",
       clickable: true,
     },
     navigation: {
       nextEl: ".swiper-button-next",
       prevEl: ".swiper-button-prev",
     },
   });







   function toggleDropdown() {
    var dropdown = document.getElementById("dropdown-menu");
    dropdown.style.display = dropdown.style.display === "block" ? "none" : "block";
}



window.onclick = function(event) {
    if (!event.target.matches('.profile-btn')) {
        document.getElementById("dropdown-menu").style.display = "none";
    }
};




