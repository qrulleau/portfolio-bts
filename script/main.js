const buttonModal = document.querySelector('.modal-button');
const modal = document.querySelector('.modal');
const closeModal = document.querySelector('.fa-times-circle');

const buttonSelectorEducation = document.querySelectorAll('.education-choice');
const buttonSelectorExperience = document.querySelectorAll('.sf');

buttonModal.addEventListener('click', function () {
	modal.classList.add('display');
});
closeModal.addEventListener('click', function () {
	modal.classList.remove('display');
});

buttonSelectorEducation.forEach((btn) => {
	btn.addEventListener('click', () => {
		let activeElement = document.querySelector('.active-education');
		let contents = document.querySelectorAll('.job');

		activeElement.classList.remove('active-education');
		btn.classList.add('active-education');

		contents.forEach((content) => {
			content.classList.remove('active');
		});

		const value = btn.value;
		const DisplayContent = document.getElementById(value);

		DisplayContent.classList.add('active');
	});
});

buttonSelectorExperience.forEach((btn) => {
	btn.addEventListener('click', () => {
		let activeElement = document.querySelector('.active-experience');
		let contents = document.querySelectorAll('.compagny');

		activeElement.classList.remove('active-experience');
		btn.classList.add('active-experience');

		contents.forEach((content) => {
			content.classList.remove('active');
		});

		const value = btn.value;
		const DisplayContent = document.getElementById(value);

		DisplayContent.classList.add('active');
	});
});

new Glider(document.querySelector('.glider'), {
	slidesToShow: 3,
	dots: '.dots',
	arrows: {
		prev: '.glider-prev',
		next: '.glider-next',
	},
});
