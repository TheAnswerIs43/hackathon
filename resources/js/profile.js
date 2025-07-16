import './bootstrap';

import $ from 'jquery';

$(function() {
    $('#btn-special').on('click', function() {
        alert('Ciao, questo è un messaggio di prova!');
    });
});
