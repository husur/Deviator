let menuToggle = document.querySelector('.menuToggle');
let navigation = document.querySelector('.navigation');

menuToggle.onclick = function(){
    menuToggle.classList.toggle('active');
    navigation.classList.toggle('active');
}

function disableScroll() {
    document.body.style.overflow = 'hidden';
}

function enableScroll(){
    document.body.style.overflow = 'auto';
}