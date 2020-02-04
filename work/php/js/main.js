/**
 * A function to wrap it all in.
 */

document.addEventListener("DOMContentLoaded", function (event) {
    var element = document.getElementById('bg');
    var height = element.offsetHeight;
    if (height < screen.height) {
        document.getElementById("footer").classList.add('atbottom');
    }
}, false);

(function () {
    "use strict";

    console.log("All ready.");
}());



