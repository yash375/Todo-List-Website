function loadTheme() {

    const theme = localStorage.getItem('theme');

    if (theme) {
        const body = document.body;
        var current = body.className;
        body.classList.replace(current, theme);
    }
}

function loader() {
    loadTheme();
    // setup();
}


function createBlack() {
    const body = document.body;
    var current = body.className;
    console.log(current);
    body.classList.replace(current, 'black');
    localStorage.setItem('theme', 'black');
}

function createGreen() {
    const body = document.body;
    var current = body.className;
    console.log(current);
    body.classList.replace(current, 'green');
    localStorage.setItem('theme', 'green');
}

function createBlue() {
    const body = document.body;
    var current = body.className;
    console.log(current);
    body.classList.replace(current, 'blue');
    localStorage.setItem('theme', 'blue');
}

function createWhite() {
    const body = document.body;
    var current = body.className;
    console.log(current);
    body.classList.replace(current, 'white');
    localStorage.setItem('theme', 'white');
}
