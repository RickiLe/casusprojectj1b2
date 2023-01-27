function show() {
    document.getElementById('slideout').classList.toggle('active');
    stand1 = document.getElementById('stand1')
    stand8 = document.getElementById('stand8')
    stand1.style.transition = "transitionDuration 2s";
    stand8.style.transition = "transitionDuration 2s";
    if (stand1.style.display === "none"){
        setTimeout(blockmaker, 150)
    }else{
        setTimeout(disappear, 250)
    }
}

function blockmaker() {
    stand1.style.display = "block";
    stand8.style.display = "block";
}

function disappear() {
    stand1.style.display = "none";
    stand8.style.display = "none";
}