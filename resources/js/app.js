import './bootstrap';

import currency from "currency.js";
import SimpleMaskMoney from "simple-mask-money";
import Alpine from 'alpinejs';

window.currency = currency;
window.SimpleMaskMoney = SimpleMaskMoney;
window.Alpine = Alpine;
Alpine.start();