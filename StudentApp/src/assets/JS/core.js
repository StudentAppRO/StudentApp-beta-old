let start = performance.now();

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
  $(".se-pre-con").fadeOut("slow");
});

//dark mode switch
//TODO
var switchStatus = false;
$("#darkModeSwitch").on('change', function() {
    if ($(this).is(':checked')) {
        switchStatus = $(this).is(':checked');
        switchStatus = $(this).is(":checked");
        if ((switchStatus == true)) {
          var element = document.body;
          element.classList.toggle("dark-mode");
        }
    }
    else {
       switchStatus = $(this).is(':checked');
       if ((switchStatus == false)) {
         var element = document.body;
         element.classList.remove("dark-mode");
       }    }
});

function aboutHeaderText() {
  aboutTxt = document.getElementsByClassName("ab_txt")[0];
  aboutTxt.innerHTML =
    "This app is designed to help young students with learning. The app can give a lot of good sources to learn and to make your homework dumbass.";
}

//TODO testing dont use 

function getFragment(id, path){
    $(document).ready(function() {
        $(id).load(path);
    });
}

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
      pName.innerHTML="Matematica";
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
        pName.innerHTML="Chimia";
      // code block
      break;
    default:
        //error page
    // code block
  }

  //------------------
}

function updateCurrentYear() {
  //by theCYBERbro
  // var year;
  // var date = new Date();
  // year = date.getFullYear();

  document.getElementById("year").innerHTML = new Date().getFullYear();
  //$("#year").html(year);
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

  document.getElementById("time").innerHTML =  time;
  document.getElementById("date").innerHTML =  date;

  //this basically makes the function to repeat itself every 1s
  refreshDate();
}

function refreshDate() {
  var refresh = 1000; // Refresh rate in milli seconds
  mytime = setTimeout("getCurrentDate()", refresh);
}

function getUserLocation() {
  var API_KEY = "d4ee10122f91777258657df189f1bf7f21ae00a6a4b3ae6b2d3d750a";
  var requestUrl = "https://api.ipdata.co?api-key=" + API_KEY;

  //documentation:
  //https://jsfiddle.net/ipdata/6wtf0q4g/922/
  $.ajax({
    url: requestUrl,
    type: "GET",
    success: function (json) {
      //var img = "";
      document.getElementById("userLocation").innerHTML =
        "🌍" + json.country_name;
      console.log("My country is: " + json.country_name);
    },
    error: function (err) {
      console.log("Request failed, error= " + err);
    },
  });
}

//outputs core.js performance miliseconds
let end = performance.now();
console.log(end - start + " miliseconds took to execute core.js");
