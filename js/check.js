
function checkpass() {
    if (document.getElementById('pass').value ==
            document.getElementById('txtPass2').value) {
        document.getElementById('sbNew').disabled = false;
    } else {
        document.getElementById('sbNew').disabled = true;
    }
}