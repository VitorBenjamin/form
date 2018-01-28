$('#listagem').DataTable({
    pageLength: 50,
    language: {
        url: "//cdn.datatables.net/plug-ins/1.10.16/i18n/Portuguese-Brasil.json" 
    },
    responsive: {
        details: {
            type: 'column',
            target: 'tr'
        }
    },
    aaSorting: [[ 0, 'asc' ]], 
    aoColumns: [ 
    { sType: "date-uk" }, null, null ],

    dom: 'Bfrtip',
    responsive: true
    
});

$.extend($.fn.dataTableExt.oSort, { 
    "date-uk-pre": function(a) { 
        var ukDatea = a.split('/'); 
        return (ukDatea[2] + ukDatea[1] + ukDatea[0]) * 1; 
    }, 
    "date-uk-asc": function(a, b) { 
        return ((a < b) ? -1 : ((a > b) ? 1 : 0)); 
    }, 
    "date-uk-desc": function(a, b) { 
        return ((a < b) ? 1 : ((a > b) ? -1 : 0)); 
    }
});
$(document).ready(function() {
    $.extend(true, $.magnificPopup.defaults, 
    {
        tClose: 'Fechar (Esc)', // Alt text on close button
        tLoading: 'Carregando...', // Text that is displayed during loading. Can contain %curr% and %total% keys
        gallery: {
        tPrev: 'Anterior', // Alt text on left arrow (Left arrow key)
        tNext: 'Próximo', // Alt text on right arrow (Right arrow key)
        tCounter: '%curr% de %total%' // Markup for "1 of 7" counter
    },
    image: {
        tError: '<a target="_blank" href="%url%">Baixar o <i class="material-icons">picture_as_pdf</i> </a>&ensp; Imagem não pode ser carregada.' // Error message when image could not be loaded
    },
    ajax: {
        tError: '<a href="%url%">The content</a> Não pode ser carregada.' // Error message when ajax request failed
    }
});
    $('.zoom-gallery').magnificPopup({
        delegate: 'a',
        type: 'image',
        closeOnContentClick: false,
        closeBtnInside: false,
        mainClass: 'mfp-with-zoom mfp-img-mobile',
        image: {
            verticalFit: true,
            titleSrc: function(item) {
                return item.el.attr('title');
            }
        },
        gallery: {
            enabled: true
        },
        zoom: {
            enabled: true,
            duration: 300, // don't foget to change the duration also in CSS
            opener: function(element) {
                return element.find('img');
            }
        }
        
    });
});