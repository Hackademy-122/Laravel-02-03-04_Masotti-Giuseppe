const navbar = document.querySelector('#navbar');
// link
const navLinks = document.querySelectorAll('.nav-link')
// logo
const navBrand = document.querySelector('.navbar-brand');


window.addEventListener('scroll', () => {
    if(window.scrollY > 0){
        navbar.style.backgroundColor = '#d69c1eff'
        navLinks.forEach((link) => {
            link.style.color = 'black'
        })
        navBrand.style.color = 'black';
    } else {
        navbar.style.backgroundColor = 'transparent'
        navLinks.forEach((link) => {
            link.style.color = '#d69c1eff'
        })
        navBrand.style.color = '#d69c1eff'
    }
})