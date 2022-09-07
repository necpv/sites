setInterval(function() {
    scroll();
}, 2000)


function scroll() {
    let firsrtEl; 
    let lastEl;  
    let ul = document.querySelector(".slider ul"); 
    ul.style.cssText = 'transition: margin 750ms ease-in-out;';
    ul.style.marginLeft = '-237px';

    setTimeout(function () {
        ul.style.cssText = 'transition: none;'; 
        firsrtEl = ul.firstElementChild;
        lastEl = firsrtEl.cloneNode(true);
        ul.appendChild(lastEl);
        ul.removeChild(firsrtEl);
        ul.style.marginLeft = '0px'
    }, 750);
}
