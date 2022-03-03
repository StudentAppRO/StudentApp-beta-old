let start = performance.now();

/*
  Biggest JS file, js big bro, here are all functions
*/

window.onload = function() {
    /**
     * These functions/code
     * will be executed, when website is loaded.
     */
    // aboutHeaderText();
    // updateCurrentYear();
    // getCurrentDate();
    // getUserLocation();
    // urlParams();
};

$(window).load(function() {
    // Animate loader off screen
    $(".se-pre-con").fadeOut("slow");
});

$('.navbar-toggler').click(() => {
    if (!$('.collapsing').length && !$('.show').length) $('.toggler').addClass('open')
    else if ($('.show').length) $('.toggler').removeClass('open')
});
//dark mode switch
///TODO

const toggleButton = document.querySelector('#theme-toggle');
const body = document.querySelector('body');
const localStorage = window.localStorage;
var isAlreadyDark = localStorage.getItem('dark') == 'true';

function loadTheme() {
    if (isAlreadyDark) {
        body.classList = ['dark-mode'];
        //may use this one
        //<i class="fa fa-adjust" aria-hidden="true"></i>
        toggleButton.innerHTML = '<i class="fa fa-sun-o"></i>';
    } else {
        body.classList = [''];
        toggleButton.innerHTML = '<i class="fa fa-moon-o"></i>';
    }
}

function toggle() {
    var isDark = localStorage.getItem('dark') == 'true';
    if (!isDark) {
        body.classList = ['dark-mode'];
        toggleButton.innerHTML = '<i class="fa fa-sun-o" aria-hidden="true"></i>';

    } else {
        body.classList = [''];
        toggleButton.innerHTML = '<i class="fa fa-moon-o" aria-hidden="true"></i>';
    }
    localStorage.setItem('dark', !isDark);
}
loadTheme();
toggleButton.addEventListener('click', toggle);


// const toggleButton = document.querySelector("#darkModeSwitch")
// const element = document.body;
// const localstorage = window.localStorage
// toggleButton.checked = localstorage.getItem('dark') == 'true'
// var switchStatus

// function toggle() {
//     switchStatus = toggleButton.checked
//     if (switchStatus) {
//         element.classList = ['dark-mode']
//     } else {
//         element.classList = ['']
//     }
//     localstorage.setItem('dark', toggleButton.checked)
// }
// toggle()
// toggleButton.addEventListener('change', toggle)

//index typewriter effect
var TxtType = function(el, toRotate, period) {
    this.toRotate = toRotate;
    this.el = el;
    this.loopNum = 0;
    this.period = parseInt(period, 10) || 2000;
    this.txt = '';
    this.tick();
    this.isDeleting = false;
};

TxtType.prototype.tick = function() {
    var i = this.loopNum % this.toRotate.length;
    var fullTxt = this.toRotate[i];

    if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
    } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
    }

    this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

    var that = this;
    var delta = 200 - Math.random() * 100;

    if (this.isDeleting) { delta /= 2; }

    if (!this.isDeleting && this.txt === fullTxt) {
    delta = this.period;
    this.isDeleting = true;
    } else if (this.isDeleting && this.txt === '') {
    this.isDeleting = false;
    this.loopNum++;
    delta = 500;
    }

    setTimeout(function() {
    that.tick();
    }, delta);
};

window.onload = function() {
    var elements = document.getElementsByClassName('typewrite');
    for (var i=0; i<elements.length; i++) {
        var toRotate = elements[i].getAttribute('data-type');
        var period = elements[i].getAttribute('data-period');
        if (toRotate) {
          new TxtType(elements[i], JSON.parse(toRotate), period);
        }
    }
};
//index typewriter effect


function updateCurrentYear() {
    document.getElementById("year").innerHTML = new Date().getFullYear();
}

// // Disable right click on web page
// $("html").on("contextmenu", function(e) {
//     return false;
// });
// // Disable cut, copy and paste on web page
// $('html').bind('cut copy paste', function(e) {
//     e.preventDefault();
// });

//outputs core.js performance miliseconds
let end = performance.now();
console.log(end - start + " miliseconds took to execute core.js");