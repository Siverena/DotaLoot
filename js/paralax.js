let bg = document.querySelector('.free-main__bit');
let fog1 = document.querySelector('.free-main__bg--par-1');
let fog2 = document.querySelector('.free-main__bg--par-234');


window.addEventListener('mousemove', function(e) {
    let x = e.clientX / window.innerWidth;
    let y = e.clientY / window.innerHeight;
    if (window.innerWidth > 1200) {

        bg.style.transform = 'translate(+' + x * 10 + 'px, -' + y * 10 + 'px)';
        fog1.style.transform = 'translate(+' + x * 15 + 'px, -' + y * 15 + 'px)';
        fog2.style.transform = 'translate(+' + x * 15 + 'px, -' + y * 15 + 'px)';
    }

});