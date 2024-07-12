// Get elements

const rootElement = document.getElementById('app');
const numbersPanel = rootElement.querySelector('.numbers-panel');

const guessedNumbers = [...document.querySelectorAll('.guessed-number')];
const startBtn = rootElement.querySelector('.start-button');

const hidenNumHeading = document.querySelector('.hidden-numbers-heading');

const cowsHeading = hidenNumHeading.querySelector('#cows');
const bullsHeading = hidenNumHeading.querySelector('#bulls');

// Set data containers

let selectedNumbers = [0, 0, 0, 0];
let randomNumbers = [];
let score = { bulls: 0, cows: 0 };

// Add logic

for (let index = 0; index < 10; index++) {
  const buttonElement = document.createElement('button');

  buttonElement.textContent = index;

  numbersPanel.appendChild(buttonElement);

}

function generateRandomNumbers() {

  for (let index = 0; index < 4; index++) {
    const number = Math.floor(Math.random() * 10);

    if (!randomNumbers.includes(number)) randomNumbers.push(number);

  }

  if (randomNumbers.length < 4) {
    generateRandomNumbers();
  }

  if (randomNumbers.length > 4) {
    randomNumbers = [];
    generateRandomNumbers()
  }
}

generateRandomNumbers();


guessedNumbers.forEach((button, index) => {
  button.addEventListener('click', () => changeNumber(index))
})


function checkNumber(number) {
  if (number > 9) return 0;

  return number;
}


function changeNumber(index) {
  const updatedNumber = checkNumber(Number(event.target.textContent) + 1)
  event.target.textContent = updatedNumber;

  if (!selectedNumbers.includes(updatedNumber)) selectedNumbers[index] = updatedNumber;

}

function startGame() {

  randomNumbers.forEach((number, index) => {

    if (number === selectedNumbers[index]) {
      score.bulls += 1;
    } else if (selectedNumbers.includes(number)) {

      score.cows += 1;
    }
  })

  cowsHeading.textContent =  `Cows: ${score.cows}`;
  bullsHeading.textContent = `Bulls: ${score.bulls}`;

  console.log(randomNumbers, 'randomNumbers')
  console.log(selectedNumbers, 'selectedNumbers')
  console.log(score);
}

startBtn.addEventListener('click', startGame);