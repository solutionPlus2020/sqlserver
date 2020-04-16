import {clickConfirm} from "sweetalert2";

const $ = require('jquery');
global.$ = global.jQuery = $;

require('bootstrap');
require('@fortawesome/fontawesome-free/js/all');
require('datatables.net-bs4/js/dataTables.bootstrap4');

require('sweetalert2/dist/sweetalert2.all');
//require('bootstrap-datepicker/js/bootstrap-datepicker');
//require('bootstrap-datetimepicker-4.17.37/bootstrap-datetimepicker.min');
//require('tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4')
//require('eonasdan-bootstrap-datetimepicker')
;
require('jquery-datetimepicker/build/jquery.datetimepicker.full')
var moment = require('moment');
moment().format();
const swal = require('sweetalert2');

/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import '../css/app.css';

// Need jQuery? Install it with "yarn add jquery", then uncomment to import it.
// import $ from 'jquery';

console.log('Hello Webpack Encore! Edit me in assets/js/app.js');
$(document).ready(function() {
    $('[data-toggle="popover"]').popover();
});
$(document).ready(function() {



        $('#datetimepicker2').datetimepicker();

});
$(document).ready(function() {
b
        $('#datetimepicker1').datepicker();

});
$(document).ready(function() {
    $('#example').DataTable({
        "language": {

        "sProcessing":     "Traitement en cours...",
        "sSearch":         "Rechercher&nbsp;:",
        "sLengthMenu":     "Afficher _MENU_ &eacute;l&eacute;ments",
        "sInfo":           "Affichage de l'&eacute;lement _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments",
        "sInfoEmpty":      "Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments",
        "sInfoFiltered":   "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
        "sInfoPostFix":    "",
        "sLoadingRecords": "Chargement en cours...",
        "sZeroRecords":    "Aucun &eacute;l&eacute;ment &agrave; afficher",
        "sEmptyTable":     "Aucune donn&eacute;e disponible dans le tableau",
        "oPaginate": {
        "sFirst":      "Premier",
            "sPrevious":   "Pr&eacute;c&eacute;dent",
            "sNext":       "Suivant",
            "sLast":       "Dernier"
    },
        "oAria": {
        "sSortAscending":  ": activer pour trier la colonne par ordre croissant",
            "sSortDescending": ": activer pour trier la colonne par ordre d&eacute;croissant"
    }
    }

    });
} );
$(document).ready(function() {
    const swalWithBootstrapButtons = swal.mixin({
        customClass: {
            confirmButton: 'btn btn-info',
        },
        buttonsStyling: false
    })
    $('.ajout').click(function () {
        swalWithBootstrapButtons.fire(
            'Ajout réussit!',
            '',
            'success'
        )
    })
});

$(document).ready(function() {
    const swalWithBootstrapButtons = swal.mixin({
        customClass: {
            confirmButton: 'btn btn-warning',
        },
        buttonsStyling: false
    })
    $('.edit').click(function () {
        swalWithBootstrapButtons.fire(
            'Modification réussit!',
            '',
            'success',

        )
    })
});



        /*swal.fire({
            title: 'Vous êtes sûr de supprimer ?',
            text: 'You will not be able to recover this imaginary file!',
            type: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, keep it',
            confirmButtonClass: "btn btn-success",
            cancelButtonClass: "btn btn-danger",
            buttonsStyling: false
        }).then(function() {
            swal.fire({
                title: 'Deleted!',
                text: 'Your imaginary file has been deleted.',
                type: 'success',
                confirmButtonClass: "btn btn-success",
                buttonsStyling: false
            }).catch(swal.noop)
        }, function(dismiss) {
            // dismiss can be 'overlay', 'cancel', 'close', 'esc', 'timer'
            if (dismiss === 'cancel') {
                swal.fire({
                    title: 'Cancelled',
                    text: 'Your imaginary file is safe :)',
                    type: 'error',
                    confirmButtonClass: "btn btn-info",
                    buttonsStyling: false
                }).catch(swal.noop)
            }
        })

    })*/




