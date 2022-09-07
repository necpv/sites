// Menu-hamburger =====================================================================================

let hamburger = document.getElementById('jsMenuMobile');
let menuList = document.querySelector('.menu-list');
let hamburgSvg = document.querySelector('.menu-icon');
let crossSvg = document.querySelector('.menu-cross')


hamburger.addEventListener("click", function () {
    menuList.classList.toggle('menu-opened');
    hamburgSvg.classList.toggle('icon-closed');
    crossSvg.classList.toggle('menu-opened');


});



// Scroll =============================================================================================

const anchors = document.querySelectorAll('a[href*="#"]')

for (let anchor of anchors) {
  anchor.addEventListener('click', function (e) {
    e.preventDefault();
    
    const blockID = anchor.getAttribute('href').substr(1);
    
    document.getElementById(blockID).scrollIntoView({
      behavior: 'smooth',
      block: 'start'
    })
  })
}


// Show text =============================================================================================

let btnList = document.querySelectorAll(".what-do-block .btn");
btnList.forEach((btn) => {
    btn.addEventListener('click', (e) => {

        let clicked = e.target.closest(".what-do_item").querySelector(".text-block").style.opacity == "1" ? true : false;
        let elemText = e.target.closest(".what-do_item").querySelector(".text-block");

        let shift = 0;
        if (!clicked) {
            elemText.style.display = "block";
            shift = elemText.offsetHeight + 10;
        } else {
            elemText.style.display = "none";
        }

        e.target.closest(".what-do_item").querySelector(".title-upper").style.transform = "translateY(-" + shift + "px)";

        if (!clicked) {
            let timerId = setTimeout(function() {
                e.target.closest(".what-do_item").querySelector(".text-block").style.opacity = "1";
                clearTimeout(timerId);
            }, 600);
        } else {
            e.target.closest(".what-do_item").querySelector(".text-block").style.opacity = "0";
        }

    });
});