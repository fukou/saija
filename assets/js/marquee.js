document.addEventListener('DOMContentLoaded', function() {
	const marquees = document.querySelectorAll('[class*="is-style-saija-marquee"]');

	marquees.forEach(marquee => {
		const isRightToLeft = marquee.classList.contains('is-style-saija-marquee-right');
		const children = Array.from(marquee.children);
		const containerWidth = marquee.offsetWidth;

		// Create a wrapper for the content
		const wrapper = document.createElement('div');
		wrapper.style.display = 'flex';
		wrapper.style.whiteSpace = 'nowrap';
		wrapper.style.width = '100%'; // Make wrapper fit the width of marquee container
		wrapper.style.position = 'relative';

		// Clone children and append to the wrapper for seamless scrolling
		const clonedChildren = children.map(child => child.cloneNode(true));
		children.forEach(child => wrapper.appendChild(child));
		clonedChildren.forEach(clonedChild => wrapper.appendChild(clonedChild));

		marquee.innerHTML = ''; // Clear existing content
		marquee.appendChild(wrapper); // Append the wrapper with children

		const totalWidth = Array.from(wrapper.children).reduce((sum, child) => sum + child.offsetWidth, 0);

		let position = 0;
		const speed = 1.25; // Speed in pixels per frame

		function animate() {
			position += isRightToLeft ? -speed : speed;

			if (isRightToLeft && position <= -totalWidth / 2) {
				position = 0;
			} else if (!isRightToLeft && position >= totalWidth / 2) {
				position = 0;
			}

			wrapper.style.transform = `translateX(${position}px)`;

			requestAnimationFrame(animate);
		}

		animate();
	});
});
