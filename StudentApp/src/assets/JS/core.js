let start = performance.now();

/*
  Biggest JS file, js big bro, here are all functions
*/

window.onload = function () {
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

$(window).load(function () {
  // Animate loader off screen
  $('.loading').removeClass('loading')
});

//dark mode switch
///TODO
const toggleButton = document.querySelector("#darkModeSwitch")
const element = document.body;
const localstorage = window.localStorage
toggleButton.checked = localstorage.getItem('dark') == 'true'
var switchStatus

function toggle() {
    switchStatus = toggleButton.checked
    if (switchStatus) {
        element.classList = ['dark-mode']
    } else {
        element.classList = ['']
    }
    localstorage.setItem('dark', toggleButton.checked)
}
toggle()
toggleButton.addEventListener('change', toggle)


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

function getCurrentDate() {
  // var curDate = new Date();
  // document.getElementById("date").innerHTML = curDate.toString();
  var x = new Date();

  // date part ///
  var month = x.getMonth() + 1;
  var day = x.getDate();
  var year = x.getFullYear();
  if (month < 10) {
    month = "0" + month;
  }
  if (day < 10) {
    day = "0" + day;
  }
  var date = month + "." + day + "." + year;

  // time part //
  var hour = x.getHours();
  var minute = x.getMinutes();
  var second = x.getSeconds();
  if (hour < 10) {
    hour = "0" + hour;
  }
  if (minute < 10) {
    minute = "0" + minute;
  }
  if (second < 10) {
    second = "0" + second;
  }
  var time = hour + ":" + minute + ":" + second;

  document.getElementById("time").innerHTML = time;
  document.getElementById("date").innerHTML = date;

  //this basically makes the function to repeat itself every 1s
  refreshDate();
}

function refreshDate() {
  var refresh = 1000; // Refresh rate in milli seconds
  mytime = setTimeout("getCurrentDate()", refresh);
}

// Disable right click on web page
$("html").on("contextmenu",function(e){
  return false;
});
// Disable cut, copy and paste on web page
$('html').bind('cut copy paste', function (e) {
   e.preventDefault();
});

//outputs core.js performance miliseconds
let end = performance.now();
console.log(end - start + " miliseconds took to execute core.js");
