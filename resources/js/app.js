import './bootstrap';
import Alpine from 'alpinejs';

window.Alpine = Alpine;
Alpine.start();

import Swiper from 'swiper/bundle';
import 'swiper/swiper-bundle.css';

import ClassicEditor from '@ckeditor/ckeditor5-build-classic';

// Initialize Swiper with breakpoints and autoplay
const swiper = new Swiper('.swiper-container', {
    loop: true,
    autoplay: {
        delay: 800, // Time between transitions (in milliseconds)
        disableOnInteraction: false, // Autoplay will not be disabled after interactions
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    breakpoints: {
        640: {
            slidesPerView: 1,
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 40,
        },
        1024: {
            slidesPerView: 3,
            spaceBetween: 50,
        },
    },
});

// Initialize CKEditor
document.addEventListener("DOMContentLoaded", function () {
    ClassicEditor
        .create(document.querySelector('#editor'), {
            toolbar: ['undo', 'redo', '|','heading', 'bold', 'italic', 'underline', 'link', 'bulletedList', 'numberedList', 'blockQuote']
        })
        .catch(error => {
            console.error(error);
        });
});
