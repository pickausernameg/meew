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
		'Help' : 'Help',
		'Partners' : 'Partners',
		'Announce' : 'Donate',
		'LetMeIn' : 'Let me in.',
	},

	'pt-br' : {
		'ClickParaSaber' : 'clique e saiba mais',
		'About' : 'Sobre',
		'Help' : 	'Ajuda',
		'Partners' : 'Parceiros',
		'Announce' : 'Anunciar',
		'LetMeIn' : 'Deixe-me entrar.',
	},

	'es' : {
		'ClickParaSaber' : 'clic y sepa más',
		'About' : 'Sobre',
		'Help' : 'Ayuda',
		'Partners' : 'Socios',
		'Announce' : 'Anunciar',
		'LetMeIn' : 'Déjame entrar.',
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

