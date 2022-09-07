'use strict';

late();
let interval = setInterval(late,5000);
function late() {
	document.querySelectorAll('#customers tr')
	.forEach((i) => {
		if (i.firstElementChild.nodeName == 'TD'
		&& (Date.now() - Date.parse(i.firstElementChild.innerText))/1000/60 > 1) {
			i.classList.add('late');
		}
	})
}

let interval1 = setInterval(() => {
	location.reload()
}, 5000)