document.getElementById('accept-next').onclick = () => {
    let lists = document.querySelectorAll('.accept-item');
    document.getElementById('accept-slide').appendChild(lists[0]);
}
document.getElementById('accept-prev').onclick = () => {
    let lists = document.querySelectorAll('.accept-item');
    document.getElementById('accept-slide').prepend(lists[lists.length - 1]);
}

const sm_acc_cont = document.querySelector('.sm-accept-container');

let pressed = false;
let startX = 0;

sm_acc_cont.addEventListener('mousedown', function(e){
    pressed = true;
    startX = e.clientX;
    this.style.cursor = 'grabbing';
});

sm_acc_cont.addEventListener('mouseleave', function(e){
    pressed = false;
});

window.addEventListener('mouseup', function(e){
    pressed = false;
    this.style.cursor = 'grabbing';
});

sm_acc_cont.addEventListener('mousemove', function(e){
    if(!pressed){
        return;
    }

    this.scrollLeft += startX - e.clientX;
});

let phone = document.getElementById("home-phone");

window.addEventListener('scroll', function() {
    let value = window.scrollY;
    phone.style.top = value * .8 + "px";
    phone.style.marginRight = value * -.5 + "px";
});

// toggle icon
let menuIcon = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');

menuIcon.onclick = () =>{
    menuIcon.classList.toggle('bx-x');
    navbar.classList.toggle('active');
}

// active links
let sections = document.querySelectorAll('.slider img');
let navLinks = document.querySelectorAll('slider-nav a');

window.onscroll = () => {
    // sections.forEach(sec => {
    //     let left = window.scrollX;
    //     let offset = sec.offsetTop - 150;
    //     let height = sec.offsetHeight;
    //     let id = sec.getAttribute('id');

    //     if(left >= offset && left < offset + height){
    //         navLinks.forEach(links =>{
    //             links.classList.remove('active');
    //             document.querySelector('header nav a[href*= '+id+']').classList.add('active');
    //         });
    //     }
    // });

    // sicky header
    let header = document.querySelector('header');
    
    header.classList.toggle('sticky', window.scrollY > 100)
    
    // remove active and bx-x when link clicked
    menuIcon.classList.remove('bx-x');
    navbar.classList.remove('active');
}

// scroll reveal
ScrollReveal({ 
    // reset: true,
    distance: '40px',
    duration: 2000,
    delay: 200
});

ScrollReveal().reveal('.home .content h1, .heading, .accept-heading', { origin: 'top' });
ScrollReveal().reveal('.advantage img', { origin: 'bottom' });
// ScrollReveal().reveal('.home .content p, .about-img', { origin: 'left' });
// ScrollReveal().reveal('.home-content p, .about-content', { origin: 'right' });

// typed text
const typed = new Typed('.multiple-text', {
    strings: ['Fullstack Developer', 'Graphic Designer', 'Game Developer'],
    typeSpeed: 100,
    backSpeed: 100,
    backDelay: 1000,
    loop: true
});