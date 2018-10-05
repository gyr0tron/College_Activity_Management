/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 44);
/******/ })
/************************************************************************/
/******/ ({

/***/ 44:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(45);


/***/ }),

/***/ 45:
/***/ (function(module, exports) {

function addCommas(str) {
  /*
  var s = (str + ""), len = s.length, i = 0, output = "";
  while(i < len - 1)
  {
    output = output + s.charAt(i);
    i++;
  }
  
  return output + "." + s.charAt(len - 1);
  
  
  
  
  
  
  var parts = (str + "").split("."),
        main = parts[0],
        len = main.length,
        output = "",
        i = len - 1;
     while(i >= 0)
    {
        output = main.charAt(i) + output;
        if ((len - i) % 3 === 0 && i > 0) {
            output = "," + output;
        }
        --i;
        
    }
    // put decimal part back
    if (parts.length > 1) {
        output += "." + parts[1];
      
    }
  
    return output;
  */
  var s = str + "",
      len = s.length,
      i = 0,
      output = "";
  while (i < len - 1) {
    output = output + s.charAt(i);
    i++;
  }

  return output + "." + s.charAt(len - 1);
}

(function ($) {
  $.fn.countTo = function (options) {
    // merge the default plugin settings with the custom options
    options = $.extend({}, $.fn.countTo.defaults, options || {});

    // how many times to update the value, and how much to increment the value on each update
    var loops = Math.ceil(options.speed / options.refreshInterval),
        increment = (options.to - options.from) / loops;

    return $(this).each(function () {
      var _this = this,
          loopCount = 0,
          value = options.from,
          interval = setInterval(updateTimer, options.refreshInterval);

      function updateTimer() {
        value += increment;
        loopCount++;
        $(_this).html(addCommas(value.toFixed(options.decimals)) + ' M');

        if (typeof options.onUpdate == 'function') {
          options.onUpdate.call(_this, value);
        }

        if (loopCount >= loops) {
          clearInterval(interval);
          value = options.to;

          if (typeof options.onComplete == 'function') {
            options.onComplete.call(_this, value);
          }
        }
      }
    });
  };

  $.fn.countTo.defaults = {
    from: 0, // the number the element should start at
    to: 100, // the number the element should end at
    speed: 1000, // how long it should take to count between the target numbers
    refreshInterval: 100, // how often the element should be updated
    decimals: 0, // the number of decimal places to show
    onUpdate: null, // callback method for every time the element is updated,
    onComplete: null // callback method for when the element finishes updating
  };
})(jQuery);

$(document).ready(function () {

  //first page always the height of viewport
  $('#home').height($(window).height());
  $(window).resize(function () {
    //on resize too
    $('#home').height($(window).height());
  });

  //smooth scrolling event
  $('a[href^="#"]').on('click', function (e) {
    e.preventDefault();

    //smooth scroll to location
    var target = this.hash,
        $target = $(target);

    $('html, body').stop().animate({
      'scrollTop': $target.offset().top + 40
    }, 600, 'swing', function () {
      window.location.hash = target;
    });
  });

  //close on click in expanded menu
  $(document).on('click', '.navbar-collapse.in', function (e) {
    if ($(e.target).is('a')) {
      $(this).collapse('hide');
    }
  });

  //$('#nav').localScroll(800);

  //RepositionNav();

  //$(window).resize(function(){
  //RepositionNav();
  //});	

  //.parallax(xPosition, adjuster, inertia, outerHeight) options:
  //xPosition - Horizontal position of the element
  //adjuster - y position to start from
  //inertia - speed to move relative to vertical scroll. Example: 0.1 is one tenth the speed of scrolling, 2 is twice the speed of scrolling
  //outerHeight (true/false) - Whether or not jQuery should use it's outerHeight option to determine when a section is in the viewport


  //$('#home').parallax("50%", 0, 0, true);


  $('#advertisers-publishers').parallax("50%", $('#home').height() + 500, 0.5, true);
  //$('#features').parallax("50%", 1680, 0.1, true);
  //$('#tools').parallax("50%", 2880, 0.1, true);
  //$('.bg').parallax("50%", 2500, 0.4, true);
  $('#testimonials').parallax("50%", $('#home').height() + $('#features').height() + $('#tools').height(), 0.3, true);
  $('#contacts').parallax("50%", $('#home').height() + $('#features').height() + $('#tools').height() + $('#testimonials').height() + 500, 0.3, true);

  new WOW().init();

  $('#stats1').countTo({
    from: 50,
    to: 2854,
    speed: 1500,
    refreshInterval: 30,
    onComplete: function onComplete(value) {
      console.debug(this);
    }
  });
  $('#stats2').countTo({
    from: 50,
    to: 957,
    speed: 1500,
    refreshInterval: 30,
    onComplete: function onComplete(value) {
      console.debug(this);
    }
  });
  $('#stats3').countTo({
    from: 50,
    to: 748,
    speed: 1500,
    refreshInterval: 30,
    onComplete: function onComplete(value) {
      console.debug(this);
    }
  });
  $('#stats4').countTo({
    from: 50,
    to: 1274,
    speed: 1500,
    refreshInterval: 30,
    onComplete: function onComplete(value) {
      console.debug(this);
    }
  });

  smoothScroll.init({
    speed: 1000,
    easing: 'easeInOutCubic',
    offset: 0,
    updateURL: false,
    callbackBefore: function callbackBefore(toggle, anchor) {},
    callbackAfter: function callbackAfter(toggle, anchor) {}
  });
});

/***/ })

/******/ });