require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

/**
 * Integración de ChartJS LIB de JS para graficos
 * DOC: https://www.chartjs.org/docs/latest/
 */
// window.Chart = require('chart.js');

/**
 * Integración con SweetAlert2 generación de alertas
 *  DOC: https://sweetalert2.github.io/
 */
 window.Swal = require('sweetalert2')


Alpine.start();

