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


// gsap animation nav bar

let tl_1 = gsap.timeline({ ease: "bounce.out" })
.from(".nav-link", {y: -100, duration: 1, delay: 0.3, opacity: 0, stagger: 0.2})
.from(".gsap-presentation", {x: -100, duration: 1, delay: 0.3, opacity: 0});



