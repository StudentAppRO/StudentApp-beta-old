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
    urlParams();
};

$(window).load(function() {
    // Animate loader off screen
    $(".se-pre-con").fadeOut("slow");
});
$('.toggler').click(() => {
    $('.toggler').toggleClass('open')
})
//dark mode switch
///TODO

const toggleButton = document.querySelector('#theme-toggle')
const body = document.querySelector('body')
const localStorage = window.localStorage
var isAlreadyDark = localStorage.getItem('dark') == 'true'

function loadTheme() {
    if (isAlreadyDark) {
        body.classList = ['dark-mode']
        toggleButton.innerHTML = '<i class="fa fa-sun-o"></i>'
    } else {
        body.classList = ['']
        toggleButton.innerHTML = '<i class="fa fa-moon-o"></i>'
    }
}

function toggle() {
    var isDark = localStorage.getItem('dark') == 'true'
    if (!isDark) {
        body.classList = ['dark-mode']
        toggleButton.innerHTML = '<i class="fa fa-sun-o" aria-hidden="true"></i>'

    } else {
        body.classList = ['']
        toggleButton.innerHTML = '<i class="fa fa-moon-o" aria-hidden="true"></i>'
    }
    localStorage.setItem('dark', !isDark)
}
loadTheme()
toggleButton.addEventListener('click', toggle)


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


function urlParams() {
    //url param---------
    const queryString = window.location.search;
    //   console.log(queryString);
    const urlParams = new URLSearchParams(queryString);

    const page = urlParams.get("page");

    //   var number = getUrlVars()[""];

    //const subPpage = urlParams.get("subpage");
    //TODO: complete switch
    switch (page) {
        case "math":
            //pageName
            var pName = document.getElementById("pageName");
            pName.innerHTML = "Matematica";
            //clasa IX
            var cl9 = document.getElementById("cl9");
            cl9.setAttribute("href", "data.html?page=math&subpage=cl9");
            //clasa X
            var cl10 = document.getElementById("cl10");
            cl10.setAttribute("href", "#url");
            //clasa XI
            var cl11 = document.getElementById("cl11");
            cl11.setAttribute("href", "#url");
            //clasa XII
            var cl12 = document.getElementById("cl12");
            cl12.setAttribute("href", "#url");

            break;
        case "chemestry":
            //pageName
            var pName = document.getElementById("pageName");
            pName.innerHTML = "Chimia";
            // code block
            break;
        default:
            //error page
            // code block
    }

    //------------------
}

function updateCurrentYear() {
    document.getElementById("year").innerHTML = new Date().getFullYear();
}

// Disable right click on web page
$("html").on("contextmenu", function(e) {
    return false;
});
// Disable cut, copy and paste on web page
$('html').bind('cut copy paste', function(e) {
    e.preventDefault();
});

//outputs core.js performance miliseconds
let end = performance.now();
console.log(end - start + " miliseconds took to execute core.js");