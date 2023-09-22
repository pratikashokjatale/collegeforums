let container = document.getElementById('container')

toggle = () => {
	container.classList.toggle('sign-in')
	container.classList.toggle('sign-up')
}

setTimeout(() => {
	container.classList.add('sign-in')
}, 200)
$("#LIZ .owl-carousel").owlCarousel({
	loop: true,
	nav: false,
	dots: false,
	responsive : {
		0: {
			items: 3
		},
		600: {
			items: 5
		},
		1000 : {
			items: 7
		}
	}
 });