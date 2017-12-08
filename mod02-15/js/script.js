// toggle button-hide sidebar

var	toggleIcon = document.querySelector('#toggleIcon');

toggleIcon.addEventListener('click', function() {
	
	console.log('toggleIcon is working');

	var nav	= document.querySelector('nav');
	nav.style.width='0%';

	var	wrapper = document.querySelector('div.wrapper');
	wrapper.style.width = '100%';

	var toggleIcon = document.querySelector('#toggleIcon');
	toggleIcon.setAttribute('hidden', 'hidden');

	var	toggleIcon1 = document.querySelector('#toggleIcon1');
	toggleIcon1.removeAttribute('hidden');
});

// toggle button-appear sidebar
var	toggleIcon = document.querySelector('#toggleIcon1');

toggleIcon1.addEventListener('click', function() {
	
	console.log('toggleIcon1 is working');

	var nav	= document.querySelector('nav');
	nav.style.width ='15%';

	var	wrapper = document.querySelector('div.wrapper');
	wrapper.style.width = '85%';
	
	var	toggleIcon = document.querySelector('#toggleIcon');
	toggleIcon.removeAttribute('hidden');

	var toggleIcon1 = document.querySelector('#toggleIcon1');
	toggleIcon1.setAttribute('hidden', 'hidden');

});