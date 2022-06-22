import './bootstrap';

import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();

import currency from "currency.js";
window.currency = currency;

import SimpleMaskMoney from "simple-mask-money";
window.SimpleMaskMoney = SimpleMaskMoney;