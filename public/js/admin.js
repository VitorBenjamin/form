
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
    var wordLimit = 15;
	$('.show-summary').each(function() {
		var post = $(this);
		var text = post.text();
		var re = /[\s]+/gm, results = null, count = 0;
		while ((results = re.exec(text)) !== null && ++count < wordLimit) { }
			if (results !== null && count >= wordLimit) {
				var summary = text.substring(0, re.lastIndex - results[0].length);
				post.text(summary + '...');

			}
		});
});
$(document).ready( function() {
	$(document).on('change', '.btn-file :file', function() {
		var input = $(this),
		label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
		input.trigger('fileselect', [label]);
	});

	$('.btn-file :file').on('fileselect', function(event, label) {

		var input = $(this).parents('.input-group').find(':text'),
		log = label;

		if( input.length ) {
			input.val(log);
		} else {
			if( log ) alert(log);
		}

	});
	function readURL(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();

			reader.onload = function (e) {
				$('#img-upload').attr('src', e.target.result);
			}

			reader.readAsDataURL(input.files[0]);
		}
	}

	$("#imgInp").change(function(){
		readURL(this);
	}); 	
});
$(document).ready( function() {
	$(document).on('change', '.btn-file2 :file', function() {
		var input = $(this),
		label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
		input.trigger('fileselect', [label]);
	});

	$('.btn-file2 :file').on('fileselect', function(event, label) {
		
		var input = $(this).parents('.input-group').find(':text'),
		log = label;
		
		if( input.length ) {
			input.val(log);
		} else {
			if( log ) alert(log);
		}
		
	});
	function readURL(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			
			reader.onload = function (e) {
				$('.img-upload').attr('src', e.target.result);
			}
			
			reader.readAsDataURL(input.files[0]);
		}
	}

	$("#imgInp2").change(function(){
		readURL(this);
	}); 	
});
$('.submit').click(function(event) {
	$(".enviar").click();
});

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
	// aoColumns: [ 
	// { sType: "date-uk" }, null, null ],

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

