require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

/**
 * Integración de ChartJS LIB de JS para graficos
 * DOC: https://www.chartjs.org/docs/latest/
 */
window.Chart = require('chart.js');

Alpine.start();

