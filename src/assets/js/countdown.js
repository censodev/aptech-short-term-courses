// Set the date we're counting down to
var countDownDate = new Date("Jun 30, 2020 00:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {
    // Get today's date and time
    var now = new Date().getTime();

    // Find the distance between now and the count down date
    var distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    var days = distance > 0 ? Math.floor(distance / (1000 * 60 * 60 * 24)) : 0;
    var hours = distance > 0 ? Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)) : 0;
    var minutes = distance > 0 ? Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60)) : 0;
    var seconds = distance > 0 ? Math.floor((distance % (1000 * 60)) / 1000) : 0;

    document.querySelector('.countdown-box-days').innerHTML = days;
    document.querySelector('.countdown-box-hours').innerHTML = hours;
    document.querySelector('.countdown-box-minutes').innerHTML = minutes;
    document.querySelector('.countdown-box-seconds').innerHTML = seconds;

    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        return;
    }
}, 1000);