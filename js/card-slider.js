let container = document.querySelector('.sec__three')
let slider = document.querySelector('.advice__list');
let slides = document.querySelectorAll('.advice__item').length;
let buttons = document.querySelectorAll('#btns');


let currentPosition = 0;
let currentMargin = 0;
let slidesPerPage = 0;
let slidesCount = slides - slidesPerPage;
let containerWidth = container.offsetWidth;
window.addEventListener("resize", checkWidth);

function checkWidth() {
    containerWidth = container.offsetWidth;
    setParams(containerWidth);
}

function setParams(w) {
    if (w < 551) {
        slidesPerPage = 1;
    } else {
        if (w < 901) {
            slidesPerPage = 2;
        } else {
            if (w < 1101) {
                slidesPerPage = 3;
            } else {
                slidesPerPage = 4;
            }
        }
    }
    slidesCount = slides - slidesPerPage;
    if (currentPosition > slidesCount) {
        currentPosition -= slidesPerPage;
    }
    currentMargin = - currentPosition * (135 / slidesPerPage);
    slider.style.marginLeft = currentMargin + '%';
}

setParams();

function slideRight() {
    if (currentPosition !== 0) {
        slider.style.marginLeft = currentMargin + (135 / slidesPerPage) + '%';
        currentMargin += (135 / slidesPerPage);
        currentPosition--;
    }
}

function slideLeft() {
    if (currentPosition !== slidesCount) {
        slider.style.marginLeft = currentMargin - (135 / slidesPerPage) + '%';
        currentMargin -= (135 / slidesPerPage);
        currentPosition++;
    }
}