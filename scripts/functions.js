document.addEventListener('DOMContentLoaded', function () {
	particleground(document.getElementById('partcileBackground'), {
		dotColor: '#ffffff',
		lineColor: '#ffffff',
		proximity: 100
	});
	var intro = document.getElementById('topLayer');
	intro.style.marginTop = - intro.offsetHeight / 2 + 'px';
}, false);