

var flagElement = document.getElementById("flagContainer");
var swedenElement = document.getElementById("swedenID");
var italyElement = document.getElementById("italyID");
var germanyElement = document.getElementById("germanyID");


function toggleSweden() {
    if (flagElement.classList == "sweden"){
        flagElement.classList = "hide";
        setNoColor();
    }else {
    flagElement.classList = "";
    flagElement.classList.toggle("sweden");
    swedenElement.classList = "buttonColor"
    italyElement.classList = "buttonNoColor"
    germanyElement.classList = "buttonNoColor"
}
}

function toggleItaly() {
    if (flagElement.classList == "italy"){
        flagElement.classList = "hide";
        setNoColor();
    }else {
    flagElement.classList = "";
    flagElement.classList.toggle("italy");
    italyElement.classList = "buttonColor"
    swedenElement.classList = "buttonNoColor"
    germanyElement.classList = "buttonNoColor"
}
}

function toggleGermany() {
    if (flagElement.classList == "germany"){
        flagElement.classList = "hide";
        setNoColor();
    }else {
    flagElement.classList = "";
    flagElement.classList.toggle("germany");
    germanyElement.classList = "buttonColor"
    swedenElement.classList = "buttonNoColor"
    italyElement.classList = "buttonNoColor"
}
}

function hide() {
    germanyElement.classList = "buttonNoColor"
    swedenElement.classList = "buttonNoColor"
    italyElement.classList = "buttonNoColor"

    flagElement.classList.toggle("hide");
}

function setNoColor() {
    swedenElement.classList = "buttonNoColor"
    italyElement.classList = "buttonNoColor"
    germanyElement.classList = "buttonNoColor"
}