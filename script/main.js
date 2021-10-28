const buttonModal = document.querySelector('.modal-button');
const modal = document.querySelector('.modal');
const closeModal = document.querySelector('.fa-times-circle');

const buttonSelector = document.querySelectorAll('.education-choice');
console.log(buttonSelector);

let test = document.querySelector('.btec').value;
//console.log(test);

buttonModal.addEventListener('click', function () {
  modal.classList.add('display');
});

closeModal.addEventListener('click', function () {
  modal.classList.remove('display');
});

buttonSelector.forEach((btn) => {
  // let reactElement = document.querySelector(btn.value);
  //console.log(reactElement);

  btn.addEventListener('click', () => {
    let activeElement = document.querySelector('.active-education');
    activeElement.classList.remove('active-education');
    console.log(btn);
    console.log(activeElement.value);
    console.log(querySelector(activeElement.value));
    btn.classList.add('active-education');
  });
});
