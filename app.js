$(function() {
    var x = 0;
    setInterval(function() {
        x-=1;
        $('#enyxia_overhead').css('background-position', x + 'px');
    }, 20); 
})

document.getElementById("enyxia_button_seasons").onclick = function () {
    document.getElementById("read").scrollIntoView();
}