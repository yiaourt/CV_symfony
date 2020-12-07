(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["basic"],{

/***/ "./assets/basic.js":
/*!*************************!*\
  !*** ./assets/basic.js ***!
  \*************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _styles_basic_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./styles/basic.scss */ "./assets/styles/basic.scss");
/* harmony import */ var _styles_basic_scss__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_styles_basic_scss__WEBPACK_IMPORTED_MODULE_0__);
/*
 * 
 *
 *      Bienvenu dans le fichier de la page basic
 */
// SCSS need to be import!
 // On désactive le context menu du bouton clic droit ...

$(document).on('contextmenu', 'img', function () {
  return false;
}); // On désactive également le dragging des images

$('img').on('dragstart', function (event) {
  event.preventDefault();
}); // On créer un fond d'écran de particules avec particles.js dans certaines zone

particlesJS.load('particles-js-0', 'particles-0.json', function () {
  var el = document.querySelector(".particles-js-canvas-el");
  el.setAttribute("height", "190px");
});
particlesJS.load('particles-js-1', 'particles-1.json', function () {}); //
// On créer maintenant un évenement lorsque l'on scroll plus bas que la position du titre

$(window).scroll(function () {
  // Par défault on débug l'animation de animate.css du titre logo et de sa location
  $('#title').addClass('animate__fadeInDown');
  $('#title_location').addClass('animate__fadeInRight animate__fadeInDown');
  var body_offset = $('body').scrollTop();
  var window_offset = $(window).scrollTop();
  var last_window_offset = localStorage.getItem('window_pos'); // Quelques logs utiles ...
  //console.log('window : '+window_offset);
  //console.log('body : '+body_offset);
  //console.log('last_window : '+last_window_offset);
  //
  //

  if (window_offset == body_offset) {
    // On affiche la barre de navigation
    $('#navigation').removeClass('animate__fadeOutUp').addClass('animate__fadeInDown'); // On affiche le titre avec animate_animated

    $('#title').removeClass('top-cool animate__fadeInDown d-none').addClass('top-center animate__fadeInDown'); // On affiche le titre de location avec animate__animated

    $('#title_location').removeClass('top-center-nomg top-right animate__fadeInRight d-none').addClass('top-bottom animate__fadeInDown');
    localStorage.removeItem('window_pos');
    return false;
  }

  if (window_offset > body_offset) {
    // Si la fenêtre est plus grande que le top body
    // On cache la barre de navigation
    $('#navigation').removeClass('animate__fadeInDown').addClass('animate__fadeOutUp'); // On place le titre sur la barre de navigation car on scroll

    $('#title').removeClass('animate__fadeInDown').addClass('d-none');
    $('#title').removeClass('top-center').addClass('top-cool'); // On cache le titre de location car l'utilisateur scroll

    $('#title_location').removeClass('animate__fadeInRight').addClass('d-none');
    $('#title_location').removeClass('top-bottom top-center-nomg').addClass('top-right'); // On sauvegarde la position de la fenetre dans une variable local

    localStorage.setItem('window_pos', window_offset);

    if (last_window_offset) {
      // On vérifie si on à sauvegarder la dernière position de window
      if (last_window_offset > window_offset) {
        // Si la fenetre scroll up
        $('#navigation').removeClass('animate__fadeOutUp').addClass('animate__fadeInDown');
        $('#title').removeClass('d-none').addClass('animate__fadeInDown');
        $('#title_location').removeClass('d-none').addClass('animate__fadeInRight');
        return false;
      }
    }

    return false;
  }
}); //
// On créer ensuite un évenement lorsque la souris de l'utilisateur passe sur le bloc "hover_tha_menu"

$('#hover_tha_menu').hover(function (e) {
  e.preventDefault(); // On récupere la valeur de la hauteur de la fenêtre de scroll actuel et ses sauvegardes

  var body_offset = $('body').scrollTop();
  var window_offset = $(window).scrollTop();
  var last_window_offset = localStorage.getItem('window_pos'); // Quelques logs utiles ...
  //console.log('window : '+window_offset);
  //console.log('body : '+body_offset);
  //console.log('last_window : '+last_window_offset);
  //
  //

  if (window_offset == body_offset) {
    localStorage.removeItem('window_pos');
    return false;
  }

  if (window_offset > body_offset) {
    // Si la fenêtre est plus grande que le top body
    // On affiche la barre de navigation
    $('#navigation').removeClass('animate__fadeOutUp').addClass('animate__fadeInDown'); // On affiche le titre avec animate_animated

    $('#title').removeClass('top-center animate__fadeInDown d-none').addClass('top-cool animate__fadeInDown'); // On affiche le titre de location avec animate__animated

    $('#title_location').removeClass('top-center-nomg top-right top-bottom animate__fadeInRight d-none').addClass('top-right animate__fadeInRight'); // On sauvegarde la position de la fenetre dans une variable local

    localStorage.setItem('window_pos', window_offset);

    if (last_window_offset) {
      // On vérifie si on à sauvegarder la dernière position de window
      if (last_window_offset > window_offset) {
        // Si la fenetre scroll up
        $('#navigation').removeClass('animate__fadeOutUp').addClass('animate__fadeInDown');
        $('#title').removeClass('d-none').addClass('animate__fadeInDown');
        $('#title_location').removeClass('d-none').addClass('animate__fadeInRight');
        return false;
      }
    }

    return false;
  }
});

/***/ }),

/***/ "./assets/styles/basic.scss":
/*!**********************************!*\
  !*** ./assets/styles/basic.scss ***!
  \**********************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ })

},[["./assets/basic.js","runtime"]]]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9hc3NldHMvYmFzaWMuanMiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL3N0eWxlcy9iYXNpYy5zY3NzIl0sIm5hbWVzIjpbIiQiLCJkb2N1bWVudCIsIm9uIiwiZXZlbnQiLCJwcmV2ZW50RGVmYXVsdCIsInBhcnRpY2xlc0pTIiwibG9hZCIsImVsIiwicXVlcnlTZWxlY3RvciIsInNldEF0dHJpYnV0ZSIsIndpbmRvdyIsInNjcm9sbCIsImFkZENsYXNzIiwiYm9keV9vZmZzZXQiLCJzY3JvbGxUb3AiLCJ3aW5kb3dfb2Zmc2V0IiwibGFzdF93aW5kb3dfb2Zmc2V0IiwibG9jYWxTdG9yYWdlIiwiZ2V0SXRlbSIsInJlbW92ZUNsYXNzIiwicmVtb3ZlSXRlbSIsInNldEl0ZW0iLCJob3ZlciIsImUiXSwibWFwcGluZ3MiOiI7Ozs7Ozs7Ozs7QUFBQTtBQUFBO0FBQUE7QUFBQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBRUE7Q0FHQTs7QUFDQUEsQ0FBQyxDQUFDQyxRQUFELENBQUQsQ0FBWUMsRUFBWixDQUFlLGFBQWYsRUFBOEIsS0FBOUIsRUFBcUMsWUFBVztBQUMxQyxTQUFPLEtBQVA7QUFDTCxDQUZELEUsQ0FHQTs7QUFDQUYsQ0FBQyxDQUFDLEtBQUQsQ0FBRCxDQUFTRSxFQUFULENBQVksV0FBWixFQUF5QixVQUFTQyxLQUFULEVBQWdCO0FBQ3JDQSxPQUFLLENBQUNDLGNBQU47QUFDSCxDQUZELEUsQ0FJQTs7QUFDQUMsV0FBVyxDQUFDQyxJQUFaLENBQWlCLGdCQUFqQixFQUFtQyxrQkFBbkMsRUFBdUQsWUFBVztBQUM5RCxNQUFJQyxFQUFFLEdBQUdOLFFBQVEsQ0FBQ08sYUFBVCxDQUF1Qix5QkFBdkIsQ0FBVDtBQUNFRCxJQUFFLENBQUNFLFlBQUgsQ0FBZ0IsUUFBaEIsRUFBMEIsT0FBMUI7QUFDTCxDQUhEO0FBS0FKLFdBQVcsQ0FBQ0MsSUFBWixDQUFpQixnQkFBakIsRUFBbUMsa0JBQW5DLEVBQXVELFlBQVcsQ0FBRSxD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RUFBMkNQLFFBQTNDLENBQW9ELHNCQUFwRDtBQUVBLGVBQU8sS0FBUDtBQUNIO0FBQ0o7O0FBRUQsV0FBTyxLQUFQO0FBQ0g7QUFDSixDQXJERCxFOzs7Ozs7Ozs7OztBQ3BHQSx1QyIsImZpbGUiOiJiYXNpYy5qcyIsInNvdXJjZXNDb250ZW50IjpbIi8qXG4gKiBcbiAqXG4gKiAgICAgIEJpZW52ZW51IGRhbnMgbGUgZmljaGllciBkZSBsYSBwYWdlIGJhc2ljXG4gKi9cblxuLy8gU0NTUyBuZWVkIHRvIGJlIGltcG9ydCFcbmltcG9ydCAnLi9zdHlsZXMvYmFzaWMuc2Nzcyc7XG5cbi8vIE9uIGTDqXNhY3RpdmUgbGUgY29udGV4dCBtZW51IGR1IGJvdXRvbiBjbGljIGRyb2l0IC4uLlxuJChkb2N1bWVudCkub24oJ2NvbnRleHRtZW51JywgJ2ltZycsIGZ1bmN0aW9uKCkge1xuICAgICAgcmV0dXJuIGZhbHNlO1xufSk7XG4vLyBPbiBkw6lzYWN0aXZlIMOpZ2FsZW1lbnQgbGUgZHJhZ2dpbmcgZGVzIGltYWdlc1xuJCgnaW1nJykub24oJ2RyYWdzdGFydCcsIGZ1bmN0aW9uKGV2ZW50KSB7XG4gICAgZXZlbnQucHJldmVudERlZmF1bHQoKTsgXG59KTtcblxuLy8gT24gY3LDqWVyIHVuIGZvbmQgZCfDqWNyYW4gZGUgcGFydGljdWxlcyBhdmVjIHBhcnRpY2xlcy5qcyBkYW5zIGNlcnRhaW5lcyB6b25lXG5wYXJ0aWNsZXNKUy5sb2FkKCdwYXJ0aWNsZXMtanMtMCcsICdwYXJ0aWNsZXMtMC5qc29uJywgZnVuY3Rpb24oKSB7XG4gICAgbGV0IGVsID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcihcIi5wYXJ0aWNsZXMtanMtY2FudmFzLWVsXCIpOyBcbiAgICAgIGVsLnNldEF0dHJpYnV0ZShcImhlaWdodFwiLCBcIjE5MHB4XCIpO1xufSk7XG5cbnBhcnRpY2xlc0pTLmxvYWQoJ3BhcnRpY2xlcy1qcy0xJywgJ3BhcnRpY2xlcy0xLmpzb24nLCBmdW5jdGlvbigpIHt9KTtcblxuLy9cbi8vIE9uIGNyw6llciBtYWludGVuYW50IHVuIMOpdmVuZW1lbnQgbG9yc3F1ZSBsJ29uIHNjcm9sbCBwbHVzIGJhcyBxdWUgbGEgcG9zaXRpb24gZHUgdGl0cmVcbiQod2luZG93KS5zY3JvbGwoZnVuY3Rpb24oKXtcblxuICAgIC8vIFBhciBkw6lmYXVsdCBvbiBkw6lidWcgbCdhbmltYXRpb24gZGUgYW5pbWF0ZS5jc3MgZHUgdGl0cmUgbG9nbyBldCBkZSBzYSBsb2NhdGlvblxuICAgICQoJyN0aXRsZScpLmFkZENsYXNzKCdhbmltYXRlX19mYWRlSW5Eb3duJyk7XG4gICAgJCgnI3RpdGxlX2xvY2F0aW9uJykuYWRkQ2xhc3MoJ2FuaW1hdGVfX2ZhZGVJblJpZ2h0IGFuaW1hdGVfX2ZhZGVJbkRvd24nKTtcblxuICAgIFxuICAgIHZhciBib2R5X29mZnNldCA9ICQoJ2JvZHknKS5zY3JvbGxUb3AoKTtcbiAgICB2YXIgd2luZG93X29mZnNldCA9ICQod2luZG93KS5zY3JvbGxUb3AoKTtcbiAgICB2YXIgbGFzdF93aW5kb3dfb2Zmc2V0ID0gbG9jYWxTdG9yYWdlLmdldEl0ZW0oJ3dpbmRvd19wb3MnKTtcbiAgICBcbiAgICAvLyBRdWVscXVlcyBsb2dzIHV0aWxlcyAuLi5cbiAgICAvL2NvbnNvbGUubG9nKCd3aW5kb3cgOiAnK3dpbmRvd19vZmZzZXQpO1xuICAgIC8vY29uc29sZS5sb2coJ2JvZHkgOiAnK2JvZHlfb2Zmc2V0KTtcbiAgICAvL2NvbnNvbGUubG9nKCdsYXN0X3dpbmRvdyA6ICcrbGFzdF93aW5kb3dfb2Zmc2V0KTtcbiAgICAvL1xuICAgIC8vXG5cbiAgICBpZih3aW5kb3dfb2Zmc2V0ID09IGJvZHlfb2Zmc2V0KXtcblxuICAgICAgICAvLyBPbiBhZmZpY2hlIGxhIGJhcnJlIGRlIG5hdmlnYXRpb25cbiAgICAgICAgJCgnI25hdmlnYXRpb24nKS5yZW1vdmVDbGFzcygnYW5pbWF0ZV9fZmFkZU91dFVwJykuYWRkQ2xhc3MoJ2FuaW1hdGVfX2ZhZGVJbkRvd24nKTtcblxuICAgICAgICAvLyBPbiBhZmZpY2hlIGxlIHRpdHJlIGF2ZWMgYW5pbWF0ZV9hbmltYXRlZFxuICAgICAgICAkKCcjdGl0bGUnKS5yZW1vdmVDbGFzcygndG9wLWNvb2wgYW5pbWF0ZV9fZmFkZUluRG93biBkLW5vbmUnKS5hZGRDbGFzcygndG9wLWNlbnRlciBhbmltYXRlX19mYWRlSW5Eb3duJyk7XG5cbiAgICAgICAgLy8gT24gYWZmaWNoZSBsZSB0aXRyZSBkZSBsb2NhdGlvbiBhdmVjIGFuaW1hdGVfX2FuaW1hdGVkXG4gICAgICAgICQoJyN0aXRsZV9sb2NhdGlvbicpLnJlbW92ZUNsYXNzKCd0b3AtY2VudGVyLW5vbWcgdG9wLXJpZ2h0IGFuaW1hdGVfX2ZhZGVJblJpZ2h0IGQtbm9uZScpLmFkZENsYXNzKCd0b3AtYm90dG9tIGFuaW1hdGVfX2ZhZGVJbkRvd24nKTtcbiAgICAgICAgXG4gICAgICAgIGxvY2FsU3RvcmFnZS5yZW1vdmVJdGVtKCd3aW5kb3dfcG9zJyk7XG5cbiAgICAgICAgcmV0dXJuIGZhbHNlO1xuICAgIH1cblxuICAgIGlmKHdpbmRvd19vZmZzZXQgPiBib2R5X29mZnNldCl7IC8vIFNpIGxhIGZlbsOqdHJlIGVzdCBwbHVzIGdyYW5kZSBxdWUgbGUgdG9wIGJvZHlcblxuICAgICAgICAvLyBPbiBjYWNoZSBsYSBiYXJyZSBkZSBuYXZpZ2F0aW9uXG4gICAgICAgICQoJyNuYXZpZ2F0aW9uJykucmVtb3ZlQ2xhc3MoJ2FuaW1hdGVfX2ZhZGVJbkRvd24nKS5hZGRDbGFzcygnYW5pbWF0ZV9fZmFkZU91dFVwJyk7XG5cbiAgICAgICAgLy8gT24gcGxhY2UgbGUgdGl0cmUgc3VyIGxhIGJhcnJlIGRlIG5hdmlnYXRpb24gY2FyIG9uIHNjcm9sbFxuICAgICAgICAkKCcjdGl0bGUnKS5yZW1vdmVDbGFzcygnYW5pbWF0ZV9fZmFkZUluRG93bicpLmFkZENsYXNzKCdkLW5vbmUnKTtcblxuICAgICAgICAkKCcjdGl0bGUnKS5yZW1vdmVDbGFzcygndG9wLWNlbnRlcicpLmFkZENsYXNzKCd0b3AtY29vbCcpO1xuXG4gICAgICAgIC8vIE9uIGNhY2hlIGxlIHRpdHJlIGRlIGxvY2F0aW9uIGNhciBsJ3V0aWxpc2F0ZXVyIHNjcm9sbFxuICAgICAgICAkKCcjdGl0bGVfbG9jYXRpb24nKS5yZW1vdmVDbGFzcygnYW5pbWF0ZV9fZmFkZUluUmlnaHQnKS5hZGRDbGFzcygnZC1ub25lJyk7XG5cbiAgICAgICAgJCgnI3RpdGxlX2xvY2F0aW9uJykucmVtb3ZlQ2xhc3MoJ3RvcC1ib3R0b20gdG9wLWNlbnRlci1ub21nJykuYWRkQ2xhc3MoJ3RvcC1yaWdodCcpO1xuXG4gICAgICAgIC8vIE9uIHNhdXZlZ2FyZGUgbGEgcG9zaXRpb24gZGUgbGEgZmVuZXRyZSBkYW5zIHVuZSB2YXJpYWJsZSBsb2NhbFxuICAgICAgICBsb2NhbFN0b3JhZ2Uuc2V0SXRlbSgnd2luZG93X3BvcycsIHdpbmRvd19vZmZzZXQpO1xuICAgICAgICBcbiAgICAgICAgaWYobGFzdF93aW5kb3dfb2Zmc2V0KXsgLy8gT24gdsOpcmlmaWUgc2kgb24gw6Agc2F1dmVnYXJkZXIgbGEgZGVybmnDqHJlIHBvc2l0aW9uIGRlIHdpbmRvd1xuXG4gICAgICAgICAgICBpZihsYXN0X3dpbmRvd19vZmZzZXQgPiB3aW5kb3dfb2Zmc2V0KXsgLy8gU2kgbGEgZmVuZXRyZSBzY3JvbGwgdXBcblxuICAgICAgICAgICAgICAgICQoJyNuYXZpZ2F0aW9uJykucmVtb3ZlQ2xhc3MoJ2FuaW1hdGVfX2ZhZGVPdXRVcCcpLmFkZENsYXNzKCdhbmltYXRlX19mYWRlSW5Eb3duJyk7XG5cbiAgICAgICAgICAgICAgICAkKCcjdGl0bGUnKS5yZW1vdmVDbGFzcygnZC1ub25lJykuYWRkQ2xhc3MoJ2FuaW1hdGVfX2ZhZGVJbkRvd24nKTtcblxuICAgICAgICAgICAgICAgICQoJyN0aXRsZV9sb2NhdGlvbicpLnJlbW92ZUNsYXNzKCdkLW5vbmUnKS5hZGRDbGFzcygnYW5pbWF0ZV9fZmFkZUluUmlnaHQnKTtcbiAgICAgICAgICAgICAgICBcbiAgICAgICAgICAgICAgICByZXR1cm4gZmFsc2U7XG4gICAgICAgICAgICB9XG4gICAgICAgIH1cblxuICAgICAgICByZXR1cm4gZmFsc2U7XG4gICAgfVxufSk7XG5cbi8vXG4vLyBPbiBjcsOpZXIgZW5zdWl0ZSB1biDDqXZlbmVtZW50IGxvcnNxdWUgbGEgc291cmlzIGRlIGwndXRpbGlzYXRldXIgcGFzc2Ugc3VyIGxlIGJsb2MgXCJob3Zlcl90aGFfbWVudVwiXG4kKCcjaG92ZXJfdGhhX21lbnUnKS5ob3ZlcihmdW5jdGlvbihlKXtcblxuICAgIGUucHJldmVudERlZmF1bHQoKTtcblxuICAgIC8vIE9uIHLDqWN1cGVyZSBsYSB2YWxldXIgZGUgbGEgaGF1dGV1ciBkZSBsYSBmZW7DqnRyZSBkZSBzY3JvbGwgYWN0dWVsIGV0IHNlcyBzYXV2ZWdhcmRlc1xuICAgIHZhciBib2R5X29mZnNldCA9ICQoJ2JvZHknKS5zY3JvbGxUb3AoKTtcbiAgICB2YXIgd2luZG93X29mZnNldCA9ICQod2luZG93KS5zY3JvbGxUb3AoKTtcbiAgICB2YXIgbGFzdF93aW5kb3dfb2Zmc2V0ID0gbG9jYWxTdG9yYWdlLmdldEl0ZW0oJ3dpbmRvd19wb3MnKTtcbiAgICBcbiAgICAgLy8gUXVlbHF1ZXMgbG9ncyB1dGlsZXMgLi4uXG4gICAgLy9jb25zb2xlLmxvZygnd2luZG93IDogJyt3aW5kb3dfb2Zmc2V0KTtcbiAgICAvL2NvbnNvbGUubG9nKCdib2R5IDogJytib2R5X29mZnNldCk7XG4gICAgLy9jb25zb2xlLmxvZygnbGFzdF93aW5kb3cgOiAnK2xhc3Rfd2luZG93X29mZnNldCk7XG4gICAgLy9cbiAgICAvL1xuXG4gICAgaWYod2luZG93X29mZnNldCA9PSBib2R5X29mZnNldCl7XG5cbiAgICAgICAgbG9jYWxTdG9yYWdlLnJlbW92ZUl0ZW0oJ3dpbmRvd19wb3MnKTtcblxuICAgICAgICByZXR1cm4gZmFsc2U7XG4gICAgfVxuXG4gICAgaWYod2luZG93X29mZnNldCA+IGJvZHlfb2Zmc2V0KXsgLy8gU2kgbGEgZmVuw6p0cmUgZXN0IHBsdXMgZ3JhbmRlIHF1ZSBsZSB0b3AgYm9keVxuXG4gICAgICAgIC8vIE9uIGFmZmljaGUgbGEgYmFycmUgZGUgbmF2aWdhdGlvblxuICAgICAgICAkKCcjbmF2aWdhdGlvbicpLnJlbW92ZUNsYXNzKCdhbmltYXRlX19mYWRlT3V0VXAnKS5hZGRDbGFzcygnYW5pbWF0ZV9fZmFkZUluRG93bicpO1xuXG4gICAgICAgIC8vIE9uIGFmZmljaGUgbGUgdGl0cmUgYXZlYyBhbmltYXRlX2FuaW1hdGVkXG4gICAgICAgICQoJyN0aXRsZScpLnJlbW92ZUNsYXNzKCd0b3AtY2VudGVyIGFuaW1hdGVfX2ZhZGVJbkRvd24gZC1ub25lJykuYWRkQ2xhc3MoJ3RvcC1jb29sIGFuaW1hdGVfX2ZhZGVJbkRvd24nKTtcblxuICAgICAgICAvLyBPbiBhZmZpY2hlIGxlIHRpdHJlIGRlIGxvY2F0aW9uIGF2ZWMgYW5pbWF0ZV9fYW5pbWF0ZWRcbiAgICAgICAgJCgnI3RpdGxlX2xvY2F0aW9uJykucmVtb3ZlQ2xhc3MoJ3RvcC1jZW50ZXItbm9tZyB0b3AtcmlnaHQgdG9wLWJvdHRvbSBhbmltYXRlX19mYWRlSW5SaWdodCBkLW5vbmUnKS5hZGRDbGFzcygndG9wLXJpZ2h0IGFuaW1hdGVfX2ZhZGVJblJpZ2h0Jyk7XG4gICAgICAgIFxuICAgICAgICAvLyBPbiBzYXV2ZWdhcmRlIGxhIHBvc2l0aW9uIGRlIGxhIGZlbmV0cmUgZGFucyB1bmUgdmFyaWFibGUgbG9jYWxcbiAgICAgICAgbG9jYWxTdG9yYWdlLnNldEl0ZW0oJ3dpbmRvd19wb3MnLCB3aW5kb3dfb2Zmc2V0KTtcbiAgICAgICAgXG4gICAgICAgIGlmKGxhc3Rfd2luZG93X29mZnNldCl7IC8vIE9uIHbDqXJpZmllIHNpIG9uIMOgIHNhdXZlZ2FyZGVyIGxhIGRlcm5pw6hyZSBwb3NpdGlvbiBkZSB3aW5kb3dcblxuICAgICAgICAgICAgaWYobGFzdF93aW5kb3dfb2Zmc2V0ID4gd2luZG93X29mZnNldCl7IC8vIFNpIGxhIGZlbmV0cmUgc2Nyb2xsIHVwXG5cbiAgICAgICAgICAgICAgICAkKCcjbmF2aWdhdGlvbicpLnJlbW92ZUNsYXNzKCdhbmltYXRlX19mYWRlT3V0VXAnKS5hZGRDbGFzcygnYW5pbWF0ZV9fZmFkZUluRG93bicpO1xuXG4gICAgICAgICAgICAgICAgJCgnI3RpdGxlJykucmVtb3ZlQ2xhc3MoJ2Qtbm9uZScpLmFkZENsYXNzKCdhbmltYXRlX19mYWRlSW5Eb3duJyk7XG4gICAgICAgICAgICAgICAgXG4gICAgICAgICAgICAgICAgJCgnI3RpdGxlX2xvY2F0aW9uJykucmVtb3ZlQ2xhc3MoJ2Qtbm9uZScpLmFkZENsYXNzKCdhbmltYXRlX19mYWRlSW5SaWdodCcpO1xuICAgICAgICAgICAgICAgIFxuICAgICAgICAgICAgICAgIHJldHVybiBmYWxzZTtcbiAgICAgICAgICAgIH1cbiAgICAgICAgfVxuXG4gICAgICAgIHJldHVybiBmYWxzZTtcbiAgICB9XG59KTtcblxuIiwiLy8gZXh0cmFjdGVkIGJ5IG1pbmktY3NzLWV4dHJhY3QtcGx1Z2luIl0sInNvdXJjZVJvb3QiOiIifQ==