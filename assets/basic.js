/*
 * 
 *
 *      Bienvenu dans le fichier de la page basic
 */

// SCSS need to be import!
import './styles/basic.scss';

// On désactive le context menu du bouton clic droit ...
$(document).on('contextmenu', 'img', function() {
      return false;
});
// On désactive également le dragging des images
$('img').on('dragstart', function(event) {
    event.preventDefault(); 
});

// On créer un fond d'écran de particules avec particles.js dans certaines zone
particlesJS.load('particles-js-0', 'particles-0.json', function() {
    let el = document.querySelector(".particles-js-canvas-el"); 
      el.setAttribute("height", "190px");
});

particlesJS.load('particles-js-1', 'particles-1.json', function() {});

//
// On créer maintenant un évenement lorsque l'on scroll plus bas que la position du titre
$(window).scroll(function(){

    // Par défault on débug l'animation de animate.css du titre logo et de sa location
    $('#title').addClass('animate__fadeInDown');
    $('#title_location').addClass('animate__fadeInRight animate__fadeInDown');

    
    var body_offset = $('body').scrollTop();
    var window_offset = $(window).scrollTop();
    var last_window_offset = localStorage.getItem('window_pos');
    
    // Quelques logs utiles ...
    //console.log('window : '+window_offset);
    //console.log('body : '+body_offset);
    //console.log('last_window : '+last_window_offset);
    //
    //

    if(window_offset == body_offset){

        // On affiche la barre de navigation
        $('#navigation').removeClass('animate__fadeOutUp').addClass('animate__fadeInDown');

        // On affiche le titre avec animate_animated
        $('#title').removeClass('top-cool animate__fadeInDown d-none').addClass('top-center animate__fadeInDown');

        // On affiche le titre de location avec animate__animated
        $('#title_location').removeClass('top-center-nomg top-right animate__fadeInRight d-none').addClass('top-bottom animate__fadeInDown');
        
        localStorage.removeItem('window_pos');

        return false;
    }

    if(window_offset > body_offset){ // Si la fenêtre est plus grande que le top body

        // On cache la barre de navigation
        $('#navigation').removeClass('animate__fadeInDown').addClass('animate__fadeOutUp');

        // On place le titre sur la barre de navigation car on scroll
        $('#title').removeClass('animate__fadeInDown').addClass('d-none');

        $('#title').removeClass('top-center').addClass('top-cool');

        // On cache le titre de location car l'utilisateur scroll
        $('#title_location').removeClass('animate__fadeInRight').addClass('d-none');

        $('#title_location').removeClass('top-bottom top-center-nomg').addClass('top-right');

        // On sauvegarde la position de la fenetre dans une variable local
        localStorage.setItem('window_pos', window_offset);
        
        if(last_window_offset){ // On vérifie si on à sauvegarder la dernière position de window

            if(last_window_offset > window_offset){ // Si la fenetre scroll up

                $('#navigation').removeClass('animate__fadeOutUp').addClass('animate__fadeInDown');

                $('#title').removeClass('d-none').addClass('animate__fadeInDown');

                $('#title_location').removeClass('d-none').addClass('animate__fadeInRight');
                
                return false;
            }
        }

        return false;
    }
});

//
// On créer ensuite un évenement lorsque la souris de l'utilisateur passe sur le bloc "hover_tha_menu"
$('#hover_tha_menu').hover(function(e){

    e.preventDefault();

    // On récupere la valeur de la hauteur de la fenêtre de scroll actuel et ses sauvegardes
    var body_offset = $('body').scrollTop();
    var window_offset = $(window).scrollTop();
    var last_window_offset = localStorage.getItem('window_pos');
    
     // Quelques logs utiles ...
    //console.log('window : '+window_offset);
    //console.log('body : '+body_offset);
    //console.log('last_window : '+last_window_offset);
    //
    //

    if(window_offset == body_offset){

        localStorage.removeItem('window_pos');

        return false;
    }

    if(window_offset > body_offset){ // Si la fenêtre est plus grande que le top body

        // On affiche la barre de navigation
        $('#navigation').removeClass('animate__fadeOutUp').addClass('animate__fadeInDown');

        // On affiche le titre avec animate_animated
        $('#title').removeClass('top-center animate__fadeInDown d-none').addClass('top-cool animate__fadeInDown');

        // On affiche le titre de location avec animate__animated
        $('#title_location').removeClass('top-center-nomg top-right top-bottom animate__fadeInRight d-none').addClass('top-right animate__fadeInRight');
        
        // On sauvegarde la position de la fenetre dans une variable local
        localStorage.setItem('window_pos', window_offset);
        
        if(last_window_offset){ // On vérifie si on à sauvegarder la dernière position de window

            if(last_window_offset > window_offset){ // Si la fenetre scroll up

                $('#navigation').removeClass('animate__fadeOutUp').addClass('animate__fadeInDown');

                $('#title').removeClass('d-none').addClass('animate__fadeInDown');
                
                $('#title_location').removeClass('d-none').addClass('animate__fadeInRight');
                
                return false;
            }
        }

        return false;
    }
});

