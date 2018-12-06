(function () {
    'use strict';

    let body            = document.querySelector('body'),
        mobileIcon      = document.querySelector('.menu-trigger'),
        mobileMenuClose = document.querySelector('.header-nav-close'),
        menuItem        = document.querySelectorAll('.menu-link'),
        btButton        = document.querySelector('.back-top'),
        animatedObject  = document.querySelectorAll('.js-animation'),
        animatedObject2  = document.querySelectorAll('.js-animation2'),
        animatedObject3  = document.querySelectorAll('.js-animation3'),
        windowHeight    = window.innerHeight;

//Mobile Menu Toggle
    mobileIcon.addEventListener('click', function () {
        body.classList.toggle('menu-is-open');
    });

    menuItem.forEach(el => {
        el.addEventListener('click', function () {
            body.classList.toggle('menu-is-open');
        });
    });

    mobileMenuClose.addEventListener('click', function () {
        body.classList.toggle('menu-is-open');
    });



// Show or hide the Back to Top Button
    window.addEventListener('scroll', function () {
        let offset    = 500,
            scrollpos = window.scrollY;

        if (scrollpos > offset) {
            btButton.classList.add('visible');
        } else {
            btButton.classList.remove('visible');
        }
    });

//Smoothscroll
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();

            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });

    animatedObject.forEach(el => {
        window.addEventListener('scroll', function () {
            let posTop = el.getBoundingClientRect().top;
            if (posTop - windowHeight <= 0) {
                el.className = el.className.replace('js-animation', 'fade-in');
            }
        });
    });

    animatedObject2.forEach(el => {
        window.addEventListener('scroll', function () {
            let posTop = el.getBoundingClientRect().top;
            if (posTop - windowHeight <= 0) {
                el.className = el.className.replace('js-animation2', 'zoom-in');
            }
        });
    });

    animatedObject3.forEach(el => {
        window.addEventListener('scroll', function () {
            let posTop = el.getBoundingClientRect().top;
            if (posTop - windowHeight <= 0) {
                el.className = el.className.replace('js-animation3', 'pulse-in');
            }
        });
    });


    var target = document.querySelector('#logo');
    window.addEventListener('scroll', function() {
        if(window.scrollY > 450) {
            target.style.display = "none";
        }
        if(window.scrollY < 450) {
            target.style.display = "block";
        }
    });

})();
