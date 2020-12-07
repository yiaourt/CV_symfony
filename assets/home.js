/*
 * 
 *
 * Bienvenu dans le fichier de la page home
 */

// SCSS need to be import!
import './styles/home.scss';

// Par défault
$('#change_text-title').html('CV').css('left', '390px');
// On charge la variable qui va s'incrémenter sur chaques tour
sessionStorage.setItem('change_titletext_increment', 0);

function change_titletext(){
	
	setTimeout(function() {

		$('#change_text-title').fadeOut(100).addClass('d-none');

		// On récupere la variable d'incrémentation
		var this_increment = sessionStorage.getItem('change_titletext_increment');
		console.log(this_increment);

		// On conditione l'incrémentation de façons à se qu'elle boucle
		if(this_increment == 5){

			$('#change_text-title').html('CV').css('left', '390px');
			$('#change_text-title').removeClass('d-none').fadeIn(100);
			sessionStorage.setItem('change_titletext_increment', 0);
		}
		if(this_increment == 4){

			$('#change_text-title').html('Projet').css('left', '383px');
			$('#change_text-title').removeClass('d-none').fadeIn(100);
			sessionStorage.setItem('change_titletext_increment', 5);
		}
		if(this_increment == 3){

			$('#change_text-title').html('Réseau').css('left', '380px');
			$('#change_text-title').removeClass('d-none').fadeIn(100);
			sessionStorage.setItem('change_titletext_increment', 4);
		}
		if(this_increment == 2){

			$('#change_text-title').html('Blog').css('left', '385px');
			$('#change_text-title').removeClass('d-none').fadeIn(100);
			sessionStorage.setItem('change_titletext_increment', 3);
		}
		if(this_increment == 1){

			$('#change_text-title').html('Forum').css('left', '385px');
			$('#change_text-title').removeClass('d-none').fadeIn(100);
			sessionStorage.setItem('change_titletext_increment', 2);
		}
		if(this_increment == 0){

			$('#change_text-title').html('Site').css('left', '385px');
			$('#change_text-title').removeClass('d-none').fadeIn(100);
			sessionStorage.setItem('change_titletext_increment', 1);
		}

		// On boucle la fonction
		change_titletext();
	}, 2100);
}

change_titletext();