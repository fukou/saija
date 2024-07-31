document.addEventListener('DOMContentLoaded', () => {
	const header = document.querySelector('header.site-header');
	let lastScrollY = window.scrollY;

	window.addEventListener('scroll', () => {
		const currentScrollY = window.scrollY;

		if (currentScrollY < lastScrollY) {
			// Scrolling up
			header.classList.add('is-sticky');
			header.classList.remove('is-hidden');
		} else if (currentScrollY > lastScrollY) {
			// Scrolling down
			header.classList.remove('is-sticky');
			header.classList.add('is-hidden');
		}

		lastScrollY = currentScrollY;
	});
});
