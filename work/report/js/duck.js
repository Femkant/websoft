"use strict";

var element = document.getElementById("duck");
var duckState = true;
var counter = 0;
if (JSON.parse(localStorage.getItem('counter') != null)) {
    counter = JSON.parse(localStorage.getItem('counter'));
} else {
    counter = 0;
}
var score = document.getElementById("score");
score.textContent = "Ducks shot: " + counter;

var interval = 2000;
if (counter >= 10 && counter < 20) {
    interval = 1500;
} else if (counter >= 20 && counter < 30) {
    interval = 1250;
} else if (counter >= 30) {
    interval = 1000;
}


(function () {
    element.style.position = 'absolute';
    element.style.top = Math.floor(Math.random() * 90 + 5) + '%';
    element.style.left = Math.floor(Math.random() * 90 + 5) + '%';


    window.setInterval(switchPos, interval);

    element.addEventListener("click", function () {
        counter = JSON.parse(localStorage.getItem('counter')) + 1;

        localStorage.setItem('counter', JSON.stringify(counter))
        element.style.position = 'absolute';
        element.style.top = Math.floor(Math.random() * 90 + 5) + '%';
        element.style.left = Math.floor(Math.random() * 90 + 5) + '%';


        var score = document.getElementById("score");
        score.textContent = "Ducks shot: " + counter;

        console.log(counter);
    });

    element.addEventListener("mouseover", function () {});

})();


function switchPos() {
    element.style.position = 'absolute';
    element.style.top = Math.floor(Math.random() * 90 + 5) + '%';
    element.style.left = Math.floor(Math.random() * 90 + 5) + '%';

}

function switchDuckState() {
    var btn = document.getElementById("duckBtn");
    var duck = document.getElementById("duck");
    if (duckState == true) {
        duckState = false;
        btn.textContent = "Start duck!"
        duck.hidden = true;
    } else {
        duckState = true;
        btn.textContent = "Stop duck!"
        duck.hidden = false;

    }
}