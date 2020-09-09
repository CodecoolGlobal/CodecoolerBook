function  checkPass() {
    if (document.getElementById('pass').value ==
        document.getElementById('confPass').value) {
        document.getElementById('confPass').style.backgroundColor = 'green';
        document.getElementById("submit").disabled= false;
    } else {
        document.getElementById('confPass').style.backgroundColor = 'red';
        document.getElementById("submit").disabled= true;
    }
}

