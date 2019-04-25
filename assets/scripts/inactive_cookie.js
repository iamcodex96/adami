var timeoutInMiliseconds = 300000;
var timeoutId;

function startTimer() {
    timeoutId = window.setTimeout(doInactive, timeoutInMiliseconds);
}

function doInactive() {
    window.location.replace("http://daw2a02.abp-politecnics.com/api/session_destroyer.php");
}

function setupTimers() {
    document.addEventListener("mousemove", resetTimer, false);
    document.addEventListener("mousedown", resetTimer, false);
    document.addEventListener("keypress", resetTimer, false);
    document.addEventListener("touchmove", resetTimer, false);

    startTimer();
}

function resetTimer() {
    window.clearTimeout(timeoutId);
    startTimer();
}

setupTimers();