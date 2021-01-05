// Set the date we're counting down to
const countDownDate = new Date("January 31, 2021 00:00:00").getTime();

// Update the count down every 1 second
const x = setInterval(function() {
    // Get today's date and time
    let now = new Date().getTime();

    // Find the distance between now and the count down date
    let distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    let days = distance > 0 ? Math.floor(distance / (1000 * 60 * 60 * 24)) : 0;
    let hours = distance > 0 ? Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)) : 0;
    let minutes = distance > 0 ? Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60)) : 0;
    let seconds = distance > 0 ? Math.floor((distance % (1000 * 60)) / 1000) : 0;

    document.querySelector('.countdown-box-days').innerHTML = formatNumber(days);
    document.querySelector('.countdown-box-hours').innerHTML = formatNumber(hours);
    document.querySelector('.countdown-box-minutes').innerHTML = formatNumber(minutes);
    document.querySelector('.countdown-box-seconds').innerHTML = formatNumber(seconds);

    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        return;
    }
}, 1000);

const formatNumber = function(num) {
    return num > 9 ? num : '0' + num;
}