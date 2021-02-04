window.onload = function() {

    /**
     * Put your JavaScript file
     * It will be executed, when website is loaded.
     */


};

$(window).load(function() {
    // Animate loader off screen
    $(".se-pre-con").fadeOut("slow");
});

function aboutHeaderText() {
    aboutTxt = document.getElementById('ab_txt');
    aboutTxt.innerHTML = "This app is designed to help young students with learning. The app can give a lot of good sources to learn and to make your homework dumbass."
}

function updateCurrentYear() { //by theCYBERbro
    // var year;
    // var date = new Date();   
    // year = date.getFullYear();

    document.getElementById("year").innerHTML = new Date().getFullYear();
    //$("#year").html(year);

}