// https://taylorhakes.com/posts/creating-a-clock-with-setinterval/

export default {

    init() {

        /*
          start countdown
          enter number and format
          days, hours, minutes or seconds
        */
        countDownClock(window.movement.conference_start);

    }

}

function countDownClock(conference_start) {

    let d              = document,
        daysElement    = d.getElementById('countdown_days'),
        hoursElement   = d.getElementById('countdown_hours'),
        minutesElement = d.getElementById('countdown_minutes'),
        secondsElement = d.getElementById('countdown_seconds'),
        one_second     = 1000;

    if (daysElement)
        timer(displayTimeLeft);

    function timer(fn) {

        let timestamp     = Date.now(),
            timeout_after = one_second - (timestamp % one_second);

        setTimeout(function () {

            let secondsLeft = Math.round((conference_start - timestamp) / one_second);

            fn(secondsLeft);

            if (secondsLeft)
                timer(fn)
        }, timeout_after);

    }

    function displayTimeLeft(seconds) {
        daysElement.innerText    = Math.floor(seconds / 86400);
        hoursElement.innerText   = Math.floor(seconds % 86400 / 3600);
        minutesElement.innerText = Math.floor(seconds % 86400 % 3600 / 60);
        if (secondsElement)
            secondsElement.innerText = seconds % 60 < 10 ? '0' + seconds % 60 : seconds % 60;
    }

}