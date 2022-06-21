import './bootstrap';

import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();

import SimpleMaskMoney from "simple-mask-money";
import currency from "currency.js";
window.currency = currency;
window.SimpleMaskMoney = SimpleMaskMoney;