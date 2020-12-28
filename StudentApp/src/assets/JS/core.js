window.onload = function () {

    /**
     * Put your JavaScript file
     * It will be executed, when website is loaded.
    */


};

$(window).load(function() {
    // Animate loader off screen
    $(".se-pre-con").fadeOut("slow");;
});

function updateCurrentYear(){//by theCYBERbro
    // var year;
    // var date = new Date();   
    // year = date.getFullYear();

    document.getElementById("year").innerHTML = new Date().getFullYear();
    //$("#year").html(year);
  
   }