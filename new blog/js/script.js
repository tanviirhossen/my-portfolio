    // animeted hamburger

    const menuBtn = document.querySelector('.menu-btn');
    const navMenu = document.querySelector('.nav');

    menuBtn.addEventListener('click', () => {
        menuBtn.classList.toggle('open');
        navMenu.classList.toggle('nav-open');
    })

    document.querySelectorAll('.nav-link').forEach(n => n.
        addEventListener('click', () => {
            menuBtn.classList.remove('open');
            navMenu.classList.remove('nav-open');
        }))

const responsive ={
    300:{
        items:1
    },
    768:{
        items:2
    },
    1200:{
        items:3
    }
}

$(document).ready(function(){

    //owl-carousel for blog
    $('.owl-carousel').owlCarousel({
        loop:true,
        autoplay: true,
        autoplayTmout:3000,
        dots:false,
        nav:true,
        navText:[$('.owl-navigation .owl-nav-perv'), $('.owl-navigation .owl-nav-next')],
        responsive: responsive
    });
    
    // Click to scrool up
    $('.move-up span').click(function(){
        $('html,body').animate({
            scrollTop: 0
        },1000);
    })
    
    // AOS instance
    AOS.init();


    });