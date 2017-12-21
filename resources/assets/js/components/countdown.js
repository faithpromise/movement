export default {

    init() {

        /*
          start countdown
          enter number and format
          days, hours, minutes or seconds
        */
        countDownClock(20, 'days');

    }

}

let conference_start = Date.UTC(2018, 7, 12, 18, 30);

function countDownClock() {

    let d              = document,
        daysElement    = d.getElementById('countdown_days'),
        hoursElement   = d.getElementById('countdown_hours'),
        minutesElement = d.getElementById('countdown_minutes'),
        secondsElement = d.getElementById('countdown_seconds'),
        countdown      = void 0;

    timer();

    function timer() {

        let then = conference_start;

        countdown = setInterval(function () {
            let secondsLeft = Math.round((then - Date.now()) / 1000);

            if (secondsLeft <= 0) {
                clearInterval(countdown);
                return;
            }

            displayTimeLeft(secondsLeft);

        }, 1000);
    }

    function displayTimeLeft(seconds) {
        daysElement.innerText    = Math.floor(seconds / 86400);
        hoursElement.innerText   = Math.floor(seconds % 86400 / 3600);
        minutesElement.innerText = Math.floor(seconds % 86400 % 3600 / 60);
        if (secondsElement)
            secondsElement.innerText = seconds % 60 < 10 ? '0' + seconds % 60 : seconds % 60;
    }

}