/*------ Javascript - Clinicoeurs ASBL Vielsam ------*/
document.documentElement.classList.add("js-enabled");
const body = document.querySelector('body');

/* Testimonial slider */
const next = document.querySelector(".next");
const prev = document.querySelector(".previous");
const slides = document.querySelectorAll(".slide");

let index = 0;
display(index);

function display(index) {
    slides.forEach((slide) => {
        slide.style.display = "none";
    });
    slides[index].style.display = "grid";
}

function nextSlide() {
    index++;
    if (index > slides.length - 1) {
        index = 0;
    }
    display(index);
}

function prevSlide() {
    index--;
    if (index < 0) {
        index = slides.length - 1;
    }
    display(index);
}

next.addEventListener("click", nextSlide);
prev.addEventListener("click", prevSlide);

