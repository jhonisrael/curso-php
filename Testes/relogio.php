<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./recursos/CSS/relogio.css">
    <title></title>
    <style>
.op22 {
  text-align: center;
  font-size: 30px;
  color: brown;
}
</style>
</head>
<!-- relogio -->
<!-- <div id="clock"></div> -->

<!-- opção1 -->
<!-- <p id="demo"></p> -->

<!-- opção2 -->
<div class="op22" id="timer"></div>

<script>

//  Reloio com h,m,s --------------------------
//     function currentTime() {
//   var date = new Date(); /* creating object of Date class */
//   var hour = date.getHours();
//   var min = date.getMinutes();
//   var sec = date.getSeconds();
//   hour = updateTime(hour);
//   min = updateTime(min);
//   sec = updateTime(sec);
//   document.getElementById("clock").innerText = hour + " : " + min + " : " + sec; /* adding time to the div */
//     var t = setTimeout(function(){ currentTime() }, 1000); /* setting timer */
// }

// function updateTime(k) {
//   if (k < 10) {
//     return "0" + k;
//   }
//   else {
//     return k;
//   } 
// }  

/* opção 1 -----------------
var deadline = new Date("Jun 1, 2022 10:00:00").getTime();
var x = setInterval(function() {
var now = new Date().getTime();
var t = deadline - now;
var days = Math.floor(t / (1000 * 60 * 60 * 24));
var hours = Math.floor((t%(1000 * 60 * 60 * 24))/(1000 * 60 * 60));
var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60));
var seconds = Math.floor((t % (1000 * 60)) / 1000);
document.getElementById("demo").innerHTML = days + "d " 
+ hours + "h " + minutes + "m " + seconds + "s ";
    if (t < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
    }
}, 1000); */

//opção2-----------------------
function startTimer(duration, display) {
    var timer = duration, minutes, seconds;
    setInterval(function () {
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);
        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;
        display.textContent = minutes + ":" + seconds;
        if (--timer < 0) {
            timer = duration;
        }
    }, 1000);
}
window.onload = function () {
    var duration = 60 * 3; // Converter para segundos
        display = document.querySelector('#timer'); // selecionando o timer
    startTimer(duration, display); // iniciando o timer
};

currentTime(); /* calling currentTime() function to initiate the process */
</script>