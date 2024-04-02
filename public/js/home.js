let randomNumbers = [];
let randomNumbersSet = new Set();
let generatedNumberCard = $('.generated-number');
let bulls = $('#bulls-score');
let cows = $('#cows-score');
let warning = $('#warning');
let startButton = $('#start');
let playAgainButton = $('#play_again');
let inputNumbers = $('.input-numbers');

warning.hide();
playAgainButton.hide();

const showWarning = (type) => {

    switch (type) {
        case 'empty-duplicate':
            warning.text("All fields should be filled and you can't duplicate numbers");
            break;
        case 'invalid-number':
            warning.text('You may enter numbers from 0 to 9');
            break;
    }

    warning.show();
}

startButton.click(function() {
    let userNumbersSet = new Set();
    let cowsScore = 0;
    let bullsScore = 0;


    warning.hide();

    for (let index = 0; index < inputNumbers.length; index++) {
        const inputNumber = Number(inputNumbers[index].value);
        if (inputNumber > 9) {
            showWarning('invalid-number')
            return;
        } else {
            userNumbersSet.add(inputNumber)
        }
    }

    if (userNumbersSet.size == 1) {
        userNumbersSet.has(0);
        showWarning('empty-duplicate')
        return;
    }

    let generateUniqueNumbers = () => {
        for (let index = 0; index < 4; index++) {
            let number = Math.floor(Math.random() * 9);
            randomNumbersSet.add(number)
        }

        if (randomNumbersSet.size != 4) {
            randomNumbersSet.clear()
            generateUniqueNumbers()
        } else {
            randomNumbers = [...randomNumbersSet]
        }
    }

    generateUniqueNumbers()

    const swapElements = (arr, x, y) => {
        [arr[x], arr[y]] = [arr[y], arr[x]];

        return arr;
    };

    const swapEvenIndex = (number) => {
        let index = randomNumbers.indexOf(number);
        if (index / 2 === 0) {
            swapElements(randomNumbers, 1, index)
        }

    }

    if (randomNumbers.includes(8) && randomNumbers.includes(1)) {
        let indexOfOne = randomNumbers.indexOf(1);
        let indexOfEight = randomNumbers.indexOf(8);
        let moveBy;

        if (indexOfEight === randomNumbers.length - 1) {
            moveBy = indexOfEight - 1;
        } else {
            moveBy = indexOfEight + 1;
        }

        swapElements(randomNumbers, indexOfOne, moveBy)

}


    if (randomNumbers.includes(5) && randomNumbers.includes(4)) {
        let indexOfFive = randomNumbers.indexOf(5)
        let indexOfFour = randomNumbers.indexOf(4)
        let swapIndex;

        if (indexOfFive / 2 === 0 && indexOfFour / 2 === 0) {

            swapElements(randomNumbers, 1, indexOfFive)
            swapElements(randomNumbers, 3, indexOfFour)
        } else if (indexOfFive / 2 === 0 && indexOfFour / 2 != 0) {
            swapIndex = indexOfFour === 1 ? 3 : 1;
            swapElements(randomNumbers, swapIndex, indexOfFive)
        } else {
            swapIndex = indexOfFive === 1 ? 3 : 1;
            swapElements(randomNumbers, swapIndex, indexOfFour)
        }

    } else if (randomNumbers.includes(5)) {
        swapEvenIndex(5)
    } else if (randomNumbers.includes(4)) {
        swapEvenIndex(4)
    }


    for (let index = 0; index < randomNumbers.length; index++) {
        const inputNumber = Number(inputNumbers[index].value);

        if (randomNumbers.includes(Number(inputNumber))) {
            let generatedNumberIndex = randomNumbers.indexOf(Number(inputNumber))

            if (generatedNumberIndex === index) {
                bullsScore += 1;
                bulls.text(bullsScore)
            } else {
                cowsScore += 1;
                cows.text(cowsScore)
            }
        }
    }

    for (let index = 0; index < generatedNumberCard.length; index++) {
        const element = generatedNumberCard[index]
        element.innerHTML = randomNumbers[index]
    }

    let userNumbersArray = [...userNumbersSet]

    const data = {
        'generated_numbers': randomNumbers.toString(),
        'user_numbers': userNumbersArray.toString(),
        'bulls': bullsScore,
        'cows': cowsScore,
        'total_points': bullsScore + cowsScore
    }

    $.ajax({
        url: '/game-score',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: 'POST',
        data,
        success: function(data) {
        }
    })

    startButton.attr("disabled", true);
    playAgainButton.show();
})

playAgainButton.click(function() {
    inputNumbers.val('')
    for (let index = 0; index < generatedNumberCard.length; index++) {
        const element = generatedNumberCard[index]
        element.innerHTML = '?';
    }
    bulls.text(0);
    cows.text(0);
    startButton.attr("disabled", false);
    playAgainButton.hide();
})