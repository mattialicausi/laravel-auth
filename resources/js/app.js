import './bootstrap';
import '~resources/scss/app.scss';

import { gsap } from "gsap";


import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])

// function for button 'delete' in modal
const deleteSubmitButtons = document.querySelectorAll('.delete-button');

deleteSubmitButtons.forEach((button) => {
    button.addEventListener('click', (event) => {
        event.preventDefault();

        const dataTitle = button.getAttribute('data-item-title');

        const modal = document.getElementById('deleteModal');

        const bootstrapModal = new bootstrap.Modal(modal);
        bootstrapModal.show();

        const modalItemTitle = modal.querySelector('#modal-item-title');
        modalItemTitle.textContent = dataTitle;

        const buttonDelete = modal.querySelector('button.btn-danger');

        buttonDelete.addEventListener('click', () => {
            button.parentElement.submit();
        })
    })
});


// gsap animation Home guest and navbar

let tl_1 = gsap.timeline({ ease: "bounce.out" });

tl_1
.from(".nav-link", {y: -100, duration: 1, delay: 0.2, opacity: 0, stagger: 0.2})
.from(".gsap-presentation-top", {x: -100, y: -100, duration: 1, delay: 0.3, ease: "bounce.out", opacity: 0}, "-=1")
.from(".emoji-gsap, .gsap-presentation-down", {scale: 0.7, opacity: 0, duration: 1.5}, "-=1")
gsap.registerPlugin(ScrollTrigger, ScrollSmoother);

let smoother = ScroolSmoother.create( {
    wrapper: '#smooth-wrapper',
    content: '#smooth-content',
    smooth: 2,
    smoothTouch: 0.1,
    effect: true,
});





