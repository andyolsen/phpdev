var count = 0;

function displayMessage() {
    var messageAreaElem = document.querySelector("#messageArea");
    messageAreaElem.innerHTML = "Count " + count++;
}