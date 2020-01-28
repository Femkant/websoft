

var flagElement = document.getElementById("flagContainer");

function toggleFrance() {
    if (flagElement.classList == "france"){
        flagElement.classList = "flag";
    }else {
    flagElement.classList = "";
    flagElement.classList.toggle("france");
}
}

function toggleItaly() {
    if (flagElement.classList == "italy"){
        flagElement.classList = "flag";
    }else {
    flagElement.classList = "";
    flagElement.classList.toggle("italy");
}
}

function toggleGermany() {
    if (flagElement.classList == "germany"){
        flagElement.classList = "flag";
    }else {
    flagElement.classList = "";
    flagElement.classList.toggle("germany");
}
}