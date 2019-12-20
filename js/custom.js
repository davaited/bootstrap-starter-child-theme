//маска ввода
jQuery(document).ready(function($) {
	$('input[type="tel"]').mask("+7 (999) 999-99-99",{placeholder:"+7 (___) ___-__-__"});
});

//переход на страницу благодарности
document.addEventListener( 'wpcf7mailsent', function( event ) {
	location = '/stranica-blagodarnosti/';
}, false );

//кнопка "назад"
document.addEventListener('DOMContentLoaded', () => {
	if (document.getElementById('back-button')) {
		document.getElementById('back-button').setAttribute('onclick', 'window.history.back()');
	}
});
