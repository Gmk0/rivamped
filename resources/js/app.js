import './bootstrap';

//import   './plugins'

import AOS from 'aos';

import { Livewire } from '../../vendor/livewire/livewire/dist/livewire.esm';


import Swiper from 'swiper';


window.Swiper = Swiper;




AOS.init();


Livewire.start()
