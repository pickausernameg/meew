/*
To add translation in HTML:
1°-Add class "lang", key="name" to the text;
2°-Add this key in this file.

Create new language:
1°-Add new button with class="translate";
2°-Add id="new-language"
*/

var arrLang = {
	'en' : {
		'ClickParaSaber' : 'click to learn more',
		'About' : 'About',
		'WhatWeWant' : 'What We Want',
		'Partners' : 'Partners',
	},

	'pt-br' : {
		'ClickParaSaber' : 'clique e saiba mais',
		'About' : 'Sobre',
		'WhatWeWant' : 	'O Que Queremos',
		'Partners' : 'Parceiros',
	},

	'es' : {
		'ClickParaSaber' : 'clic y sepa más',
		'About' : 'Sobre',
		'WhatWeWant' : 'Nuestro Concepto',
		'Partners' : 'Socios',
	},
}

$(function(){
	$('.translate').click(function(){
		var lang = $(this).attr('id');

		$('.lang').each(function(index, element){
			$(this).text(arrLang[lang][$(this).attr('key')]);
		});
	});
});

