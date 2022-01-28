var counter = 0;
var timeleft = 10;

function convertSeconds(s) {
    var min = Math.floor(s / 60);
    var sec = s % 60;
    return min + ':' + sec;
}

function convertMinutes(min, sec) {
    if (min == 0 && sec == 0) {
        alert('Please specify the time..!!');
        return counter + 1;
    }
    if (min <= 60) {
        var remSec = min * 60;
        remSec = remSec + sec;
        // console.log(remSec + ':' + min + ':' + sec);
        return remSec;
    }
    else {
        alert('Sorry but no more than 60 minutes');
        return counter + 1;
    }

}

function setup() {
    var timer = document.getElementById('timer');
    var btn = document.getElementById('sub');
    var min = parseInt(document.getElementById('min').value);
    var sec = parseInt(document.getElementById('sec').value);

    console.log(min + ':' + sec);

    timeleft = convertMinutes(min, sec);

    btn.disabled = true;

    timer.innerText = convertSeconds(timeleft - counter);

    // timer.innerHTML = '0';

    var interval = setInterval(setTimer, 1000);

    function setTimer() {
        counter++;
        timer.innerText = convertSeconds(timeleft - counter);
        if (timeleft == counter) {
            counter = 0;
            btn.disabled = false;
            var audio = new Audio('aud/beep.mp3');
            audio.play();
            timer.innerText = 'Success..!!';
            clearInterval(interval);

        }
    }


}

function openTimer() {
    var win = window.open('timer.php');
}