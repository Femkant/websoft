"use strict";

(function () {

    var element = document.getElementById("duck");

    element.addEventListener("click", function () {
        console.log("Duck clicked!");
    });

    element.addEventListener("mouseover", function () {
        element.style.left = element.offsetLeft + 20 + "px";
        console.log("Mouse over!");
    });

})();