var live = document.querySelectorAll(".live__tr");
var opacity = 1;


for (var i = 2; i <= live.length; i++) {
    var att = 'opacity:' + opacity;
    live[i].setAttribute('style', att);
    opacity = opacity - 0.28;
}






//console.log(live);
