(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["home"],{

/***/ "./assets/home.js":
/*!************************!*\
  !*** ./assets/home.js ***!
  \************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var core_js_modules_web_timers__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/web.timers */ "./node_modules/core-js/modules/web.timers.js");
/* harmony import */ var core_js_modules_web_timers__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_timers__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _styles_home_scss__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./styles/home.scss */ "./assets/styles/home.scss");
/* harmony import */ var _styles_home_scss__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_styles_home_scss__WEBPACK_IMPORTED_MODULE_1__);


/*
 * 
 *
 * Bienvenu dans le fichier de la page home
 */
// SCSS need to be import!
 // Par défault

$('#change_text-title').html('CV').css('left', '390px'); // On charge la variable qui va s'incrémenter sur chaques tour

sessionStorage.setItem('change_titletext_increment', 0);

function change_titletext() {
  setTimeout(function () {
    $('#change_text-title').fadeOut(100).addClass('d-none'); // On récupere la variable d'incrémentation

    var this_increment = sessionStorage.getItem('change_titletext_increment');
    console.log(this_increment); // On conditione l'incrémentation de façons à se qu'elle boucle

    if (this_increment == 5) {
      $('#change_text-title').html('CV').css('left', '390px');
      $('#change_text-title').removeClass('d-none').fadeIn(100);
      sessionStorage.setItem('change_titletext_increment', 0);
    }

    if (this_increment == 4) {
      $('#change_text-title').html('Projet').css('left', '383px');
      $('#change_text-title').removeClass('d-none').fadeIn(100);
      sessionStorage.setItem('change_titletext_increment', 5);
    }

    if (this_increment == 3) {
      $('#change_text-title').html('Réseau').css('left', '380px');
      $('#change_text-title').removeClass('d-none').fadeIn(100);
      sessionStorage.setItem('change_titletext_increment', 4);
    }

    if (this_increment == 2) {
      $('#change_text-title').html('Blog').css('left', '385px');
      $('#change_text-title').removeClass('d-none').fadeIn(100);
      sessionStorage.setItem('change_titletext_increment', 3);
    }

    if (this_increment == 1) {
      $('#change_text-title').html('Forum').css('left', '385px');
      $('#change_text-title').removeClass('d-none').fadeIn(100);
      sessionStorage.setItem('change_titletext_increment', 2);
    }

    if (this_increment == 0) {
      $('#change_text-title').html('Site').css('left', '385px');
      $('#change_text-title').removeClass('d-none').fadeIn(100);
      sessionStorage.setItem('change_titletext_increment', 1);
    } // On boucle la fonction


    change_titletext();
  }, 2100);
}

change_titletext();

/***/ }),

/***/ "./assets/styles/home.scss":
/*!*********************************!*\
  !*** ./assets/styles/home.scss ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ })

},[["./assets/home.js","runtime","vendors~home"]]]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9hc3NldHMvaG9tZS5qcyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvc3R5bGVzL2hvbWUuc2NzcyJdLCJuYW1lcyI6WyIkIiwiaHRtbCIsImNzcyIsInNlc3Npb25TdG9yYWdlIiwic2V0SXRlbSIsImNoYW5nZV90aXRsZXRleHQiLCJzZXRUaW1lb3V0IiwiZmFkZU91dCIsImFkZENsYXNzIiwidGhpc19pbmNyZW1lbnQiLCJnZXRJdGVtIiwiY29uc29sZSIsImxvZyIsInJlbW92ZUNsYXNzIiwiZmFkZUluIl0sIm1hcHBpbmdzIjoiOzs7Ozs7Ozs7Ozs7Ozs7OztBQUFBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFFQTtDQUdBOztBQUNBQSxDQUFDLENBQUMsb0JBQUQsQ0FBRCxDQUF3QkMsSUFBeEIsQ0FBNkIsSUFBN0IsRUFBbUNDLEdBQW5DLENBQXVDLE1BQXZDLEVBQStDLE9BQS9DLEUsQ0FDQTs7QUFDQUMsY0FBYyxDQUFDQyxPQUFmLENBQXVCLDRCQUF2QixFQUFxRCxDQUFyRDs7QUFFQSxTQUFTQyxnQkFBVCxHQUEyQjtBQUUxQkMsWUFBVSxDQUFDLFlBQVc7QUFFckJOLEtBQUMsQ0FBQyxvQkFBRCxDQUFELENBQXdCTyxPQUF4QixDQUFnQyxHQUFoQyxFQUFxQ0MsUUFBckMsQ0FBOEMsUUFBOUMsRUFGcUIsQ0FJckI7O0FBQ0EsUUFBSUMsY0FBYyxHQUFHTixjQUFjLENBQUNPLE9BQWYsQ0FBdUIsNEJBQXZCLENBQXJCO0FBQ0FDLFdBQU8sQ0FBQ0MsR0FBUixDQUFZSCxjQUFaLEVBTnFCLENBUXJCOztBQUNBLFFBQUdBLGNBQWMsSUFBSSxDQUFyQixFQUF1QjtBQUV0QlQsT0FBQyxDQUFDLG9CQUFELENBQUQsQ0FBd0JDLElBQXhCLENBQTZCLElBQTdCLEVBQW1DQyxHQUFuQyxDQUF1QyxNQUF2QyxFQUErQyxPQUEvQztBQUNBRixPQUFDLENBQUMsb0JBQUQsQ0FBRCxDQUF3QmEsV0FBeEIsQ0FBb0MsUUFBcEMsRUFBOENDLE1BQTlDLENBQXFELEdBQXJEO0FBQ0FYLG9CQUFjLENBQUNDLE9BQWYsQ0FBdUIsNEJBQXZCLEVBQXFELENBQXJEO0FBQ0E7O0FBQ0QsUUFBR0ssY0FBYyxJQUFJLENBQXJCLEVBQXVCO0FBRXRCVCxPQUFDLENBQUMsb0JBQUQsQ0FBRCxDQUF3QkMsSUFBeEIsQ0FBNkIsUUFBN0IsRUFBdUNDLEdBQXZDLENBQTJDLE1BQTNDLEVBQW1ELE9BQW5EO0FBQ0FGLE9BQUMsQ0FBQyxvQkFBRCxDQUFELENBQXdCYSxXQUF4QixDQUFvQyxRQUFwQyxFQUE4Q0MsTUFBOUMsQ0FBcUQsR0FBckQ7QUFDQVgsb0JBQWMsQ0FBQ0MsT0FBZixDQUF1Qiw0QkFBdkIsRUFBcUQsQ0FBckQ7QUFDQTs7QUFDRCxRQUFHSyxjQUFjLElBQUksQ0FBckIsRUFBdUI7QUFFdEJULE9BQUMsQ0FBQyxvQkFBRCxDQUFELENBQXdCQyxJQUF4QixDQUE2QixRQUE3QixFQUF1Q0MsR0FBdkMsQ0FBMkMsTUFBM0MsRUFBbUQsT0FBbkQ7QUFDQUYsT0FBQyxDQUFDLG9CQUFELENBQUQsQ0FBd0JhLFdBQXhCLENBQW9DLFFBQXBDLEVBQThDQyxNQUE5QyxDQUFxRCxHQUFyRDtBQUNBWCxvQkFBYyxDQUFDQyxPQUFmLENBQXVCLDRCQUF2QixFQUFxRCxDQUFyRDtBQUNBOztBQUNELFFBQUdLLGNBQWMsSUFBSSxDQUFyQixFQUF1QjtBQUV0QlQsT0FBQyxDQUFDLG9CQUFELENBQUQsQ0FBd0JDLElBQXhCLENBQTZCLE1BQTdCLEVBQXFDQyxHQUFyQyxDQUF5QyxNQUF6QyxFQUFpRCxPQUFqRDtBQUNBRixPQUFDLENBQUMsb0JBQUQsQ0FBRCxDQUF3QmEsV0FBeEIsQ0FBb0MsUUFBcEMsRUFBOENDLE1BQTlDLENBQXFELEdBQXJEO0FBQ0FYLG9CQUFjLENBQUNDLE9BQWYsQ0FBdUIsNEJBQXZCLEVBQXFELENBQXJEO0FBQ0E7O0FBQ0QsUUFBR0ssY0FBYyxJQUFJLENBQXJCLEVBQXVCO0FBRXRCVCxPQUFDLENBQUMsb0JBQUQsQ0FBRCxDQUF3QkMsSUFBeEIsQ0FBNkIsT0FBN0IsRUFBc0NDLEdBQXRDLENBQTBDLE1BQTFDLEVBQWtELE9BQWxEO0FBQ0FGLE9BQUMsQ0FBQyxvQkFBRCxDQUFELENBQXdCYSxXQUF4QixDQUFvQyxRQUFwQyxFQUE4Q0MsTUFBOUMsQ0FBcUQsR0FBckQ7QUFDQVgsb0JBQWMsQ0FBQ0MsT0FBZixDQUF1Qiw0QkFBdkIsRUFBcUQsQ0FBckQ7QUFDQTs7QUFDRCxRQUFHSyxjQUFjLElBQUksQ0FBckIsRUFBdUI7QUFFdEJULE9BQUMsQ0FBQyxvQkFBRCxDQUFELENBQXdCQyxJQUF4QixDQUE2QixNQUE3QixFQUFxQ0MsR0FBckMsQ0FBeUMsTUFBekMsRUFBaUQsT0FBakQ7QUFDQUYsT0FBQyxDQUFDLG9CQUFELENBQUQsQ0FBd0JhLFdBQXhCLENBQW9DLFFBQXBDLEVBQThDQyxNQUE5QyxDQUFxRCxHQUFyRDtBQUNBWCxvQkFBYyxDQUFDQyxPQUFmLENBQXVCLDRCQUF2QixFQUFxRCxDQUFyRDtBQUNBLEtBNUNvQixDQThDckI7OztBQUNBQyxvQkFBZ0I7QUFDaEIsR0FoRFMsRUFnRFAsSUFoRE8sQ0FBVjtBQWlEQTs7QUFFREEsZ0JBQWdCLEc7Ozs7Ozs7Ozs7O0FDbkVoQix1QyIsImZpbGUiOiJob21lLmpzIiwic291cmNlc0NvbnRlbnQiOlsiLypcbiAqIFxuICpcbiAqIEJpZW52ZW51IGRhbnMgbGUgZmljaGllciBkZSBsYSBwYWdlIGhvbWVcbiAqL1xuXG4vLyBTQ1NTIG5lZWQgdG8gYmUgaW1wb3J0IVxuaW1wb3J0ICcuL3N0eWxlcy9ob21lLnNjc3MnO1xuXG4vLyBQYXIgZMOpZmF1bHRcbiQoJyNjaGFuZ2VfdGV4dC10aXRsZScpLmh0bWwoJ0NWJykuY3NzKCdsZWZ0JywgJzM5MHB4Jyk7XG4vLyBPbiBjaGFyZ2UgbGEgdmFyaWFibGUgcXVpIHZhIHMnaW5jcsOpbWVudGVyIHN1ciBjaGFxdWVzIHRvdXJcbnNlc3Npb25TdG9yYWdlLnNldEl0ZW0oJ2NoYW5nZV90aXRsZXRleHRfaW5jcmVtZW50JywgMCk7XG5cbmZ1bmN0aW9uIGNoYW5nZV90aXRsZXRleHQoKXtcblx0XG5cdHNldFRpbWVvdXQoZnVuY3Rpb24oKSB7XG5cblx0XHQkKCcjY2hhbmdlX3RleHQtdGl0bGUnKS5mYWRlT3V0KDEwMCkuYWRkQ2xhc3MoJ2Qtbm9uZScpO1xuXG5cdFx0Ly8gT24gcsOpY3VwZXJlIGxhIHZhcmlhYmxlIGQnaW5jcsOpbWVudGF0aW9uXG5cdFx0dmFyIHRoaXNfaW5jcmVtZW50ID0gc2Vzc2lvblN0b3JhZ2UuZ2V0SXRlbSgnY2hhbmdlX3RpdGxldGV4dF9pbmNyZW1lbnQnKTtcblx0XHRjb25zb2xlLmxvZyh0aGlzX2luY3JlbWVudCk7XG5cblx0XHQvLyBPbiBjb25kaXRpb25lIGwnaW5jcsOpbWVudGF0aW9uIGRlIGZhw6dvbnMgw6Agc2UgcXUnZWxsZSBib3VjbGVcblx0XHRpZih0aGlzX2luY3JlbWVudCA9PSA1KXtcblxuXHRcdFx0JCgnI2NoYW5nZV90ZXh0LXRpdGxlJykuaHRtbCgnQ1YnKS5jc3MoJ2xlZnQnLCAnMzkwcHgnKTtcblx0XHRcdCQoJyNjaGFuZ2VfdGV4dC10aXRsZScpLnJlbW92ZUNsYXNzKCdkLW5vbmUnKS5mYWRlSW4oMTAwKTtcblx0XHRcdHNlc3Npb25TdG9yYWdlLnNldEl0ZW0oJ2NoYW5nZV90aXRsZXRleHRfaW5jcmVtZW50JywgMCk7XG5cdFx0fVxuXHRcdGlmKHRoaXNfaW5jcmVtZW50ID09IDQpe1xuXG5cdFx0XHQkKCcjY2hhbmdlX3RleHQtdGl0bGUnKS5odG1sKCdQcm9qZXQnKS5jc3MoJ2xlZnQnLCAnMzgzcHgnKTtcblx0XHRcdCQoJyNjaGFuZ2VfdGV4dC10aXRsZScpLnJlbW92ZUNsYXNzKCdkLW5vbmUnKS5mYWRlSW4oMTAwKTtcblx0XHRcdHNlc3Npb25TdG9yYWdlLnNldEl0ZW0oJ2NoYW5nZV90aXRsZXRleHRfaW5jcmVtZW50JywgNSk7XG5cdFx0fVxuXHRcdGlmKHRoaXNfaW5jcmVtZW50ID09IDMpe1xuXG5cdFx0XHQkKCcjY2hhbmdlX3RleHQtdGl0bGUnKS5odG1sKCdSw6lzZWF1JykuY3NzKCdsZWZ0JywgJzM4MHB4Jyk7XG5cdFx0XHQkKCcjY2hhbmdlX3RleHQtdGl0bGUnKS5yZW1vdmVDbGFzcygnZC1ub25lJykuZmFkZUluKDEwMCk7XG5cdFx0XHRzZXNzaW9uU3RvcmFnZS5zZXRJdGVtKCdjaGFuZ2VfdGl0bGV0ZXh0X2luY3JlbWVudCcsIDQpO1xuXHRcdH1cblx0XHRpZih0aGlzX2luY3JlbWVudCA9PSAyKXtcblxuXHRcdFx0JCgnI2NoYW5nZV90ZXh0LXRpdGxlJykuaHRtbCgnQmxvZycpLmNzcygnbGVmdCcsICczODVweCcpO1xuXHRcdFx0JCgnI2NoYW5nZV90ZXh0LXRpdGxlJykucmVtb3ZlQ2xhc3MoJ2Qtbm9uZScpLmZhZGVJbigxMDApO1xuXHRcdFx0c2Vzc2lvblN0b3JhZ2Uuc2V0SXRlbSgnY2hhbmdlX3RpdGxldGV4dF9pbmNyZW1lbnQnLCAzKTtcblx0XHR9XG5cdFx0aWYodGhpc19pbmNyZW1lbnQgPT0gMSl7XG5cblx0XHRcdCQoJyNjaGFuZ2VfdGV4dC10aXRsZScpLmh0bWwoJ0ZvcnVtJykuY3NzKCdsZWZ0JywgJzM4NXB4Jyk7XG5cdFx0XHQkKCcjY2hhbmdlX3RleHQtdGl0bGUnKS5yZW1vdmVDbGFzcygnZC1ub25lJykuZmFkZUluKDEwMCk7XG5cdFx0XHRzZXNzaW9uU3RvcmFnZS5zZXRJdGVtKCdjaGFuZ2VfdGl0bGV0ZXh0X2luY3JlbWVudCcsIDIpO1xuXHRcdH1cblx0XHRpZih0aGlzX2luY3JlbWVudCA9PSAwKXtcblxuXHRcdFx0JCgnI2NoYW5nZV90ZXh0LXRpdGxlJykuaHRtbCgnU2l0ZScpLmNzcygnbGVmdCcsICczODVweCcpO1xuXHRcdFx0JCgnI2NoYW5nZV90ZXh0LXRpdGxlJykucmVtb3ZlQ2xhc3MoJ2Qtbm9uZScpLmZhZGVJbigxMDApO1xuXHRcdFx0c2Vzc2lvblN0b3JhZ2Uuc2V0SXRlbSgnY2hhbmdlX3RpdGxldGV4dF9pbmNyZW1lbnQnLCAxKTtcblx0XHR9XG5cblx0XHQvLyBPbiBib3VjbGUgbGEgZm9uY3Rpb25cblx0XHRjaGFuZ2VfdGl0bGV0ZXh0KCk7XG5cdH0sIDIxMDApO1xufVxuXG5jaGFuZ2VfdGl0bGV0ZXh0KCk7IiwiLy8gZXh0cmFjdGVkIGJ5IG1pbmktY3NzLWV4dHJhY3QtcGx1Z2luIl0sInNvdXJjZVJvb3QiOiIifQ==