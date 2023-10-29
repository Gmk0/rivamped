import './bootstrap';

//import   './plugins'

import AOS from 'aos';

import { Livewire,Alpine } from '../../vendor/livewire/livewire/dist/livewire.esm';


import Swiper from "swiper/bundle";


window.Swiper = Swiper;

Window.Alpine =Alpine;




AOS.init();


Livewire.start();

window.addEventListener('load', function () {
    const preloader = document.querySelector(".app-preloader");


    if (!preloader) return;

    setTimeout(() => {
        preloader.classList.add("animate-[cubic-bezier(0.4,0,0.2,1)_fade-out_500ms_forwards]");
        setTimeout(() => {
            preloader.remove();
        }, 1000);
    }, 150);
});
