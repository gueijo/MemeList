const hamburguer = document.querySelector(".hamburguer");
const nav = document.querySelector(".nav");

hamburguer.addEventListener("click", () => {
    nav.classList.toggle("active");
});

const chk = document.querySelector("#theme");
const root = document.documentElement;

window.onload = function() {
    getThemeFromLocalStorage()
}

const lightTheme = {
    '--background-color': '#fefefe',
    '--dark-btn': '#111',
    '--text-color': '#000',
    '--text-color2': '#fff',
    '--ball': '#fff',
    '--back-btn': '#232c35',
    '--header': '#cdcdcd'
};
const darkTheme = {
    '--background-color': '#232c35',
    '--dark-btn': '#fefefe',
    '--text-color': '#fff',
    '--text-color2': '#000',
    '--ball': '#111',
    '--back-btn': '#fff',
    '--header': '#111'
};

chk.addEventListener('change', () => {
    const isChecked = chk.checked
    if (isChecked) {
        changeTheme(darkTheme)
    } else {
        changeTheme(lightTheme)
    }
});

function changeTheme(theme) {
    for (let prop in theme) {
        changeProperty(prop, theme[prop])
    }
    saveThemeToLocalStorage(theme)
}

function changeProperty(property, value) {
    root.style.setProperty(property, value)
}

function saveThemeToLocalStorage(theme) {
    localStorage.setItem('theme', JSON.stringify(theme))
}

function getThemeFromLocalStorage() {
    const theme = JSON.parse(localStorage.getItem('theme'))
    if (isThemeEqual(theme, darkTheme)) chk.checked = true
    changeTheme(theme)
}

function isThemeEqual(firstTheme, secondTheme) {
    for (let prop in firstTheme){
        if (firstTheme[prop] != secondTheme[prop]) return false
    }
    return true
}