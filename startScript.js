
var ids = ['timeIcon',
    'prodIcon',
    'goalIcon'
];


function iconHover(id) {

    var q = document.getElementById(ids[id]);

    q.style.backgroundColor = 'orange';
    q.style.color = 'white';

}

function iconFade(id) {

    var q = document.getElementById(ids[id]);

    q.style.backgroundColor = 'white';
    q.style.color = 'black';

}