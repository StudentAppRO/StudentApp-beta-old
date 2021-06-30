//implementing cookies in JS:
//Cookie functions

function getCurrentSwitchMode() {
  return document.getElementById("darkModeSwitch").checked;
}

function applyDarkMode(switchStatus) {
  var element = document.body;
  if (switchStatus == true) {
    element.classList.toggle("dark-mode");
  } else {
    element.classList.remove("dark-mode");
  }
}

const html = document.getElementsByTagName('html')[0]
const toggle = document.getElementById('darkModeSwitch')

var dark = localStorage.getItem('dark') ? localStorage.getItem('dark') : 'false'
html.setAttribute('data-theme', dark)
localStorage.setItem('dark', dark)

function toggleClick() {
    html.setAttribute('data-theme', !dark)
    dark = !dark
    localStorage.setItem('dark', dark)
}

toggle.addEventListener('click', toggleClick)
