function menuOpen() {
    var menu = document.getElementById('menu-btn');
    var nav = document.getElementById('navbar');

    if (menu.classList.contains('fa-bars')) {
        menu.classList.replace('fa-bars', 'fa-times');
    }
    else {
        menu.classList.replace('fa-times', 'fa-bars');
    }
    console.log(nav);

    if (nav.classList.contains('active')) {
        nav.classList.remove('active');
    }
    else {
        nav.classList.add('active');
    }
}

function myfunction() {
    // var load = document.getElementById('loading');
    // load.style.display = 'none';

    var a = setTimeout(loader, 5000);
}
function loader() {
    var load = document.getElementById('loading');
    load.style.display = 'none';
}


/*===== LOGIN SHOW and HIDDEN =====*/
const signUp = document.getElementById('sign-up'),
    signIn = document.getElementById('sign-in'),
    loginIn = document.getElementById('login-in'),
    loginUp = document.getElementById('login-up')


signUp.addEventListener('click', () => {
    // Remove classes first if they exist
    loginIn.classList.remove('block')
    loginUp.classList.remove('none')

    // Add classes
    loginIn.classList.toggle('none')
    loginUp.classList.toggle('block')
})

signIn.addEventListener('click', () => {
    // Remove classes first if they exist
    loginIn.classList.remove('none')
    loginUp.classList.remove('block')

    // Add classes
    loginIn.classList.toggle('block')
    loginUp.classList.toggle('none')
})

// var ids = ['timeIcon',
//     'prodIcon',
//     'goalIcon'];


// function iconHover(id) {

//     var q = document.getElementById(ids[id]);

//     q.style.backgroundColor = 'orange';
//     q.style.color = 'white';

// }



