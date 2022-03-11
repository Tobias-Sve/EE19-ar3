//Hitta element
const form = document.querySelector('form');
const resultBox = document.querySelector('.resultBox');
const resultBoxHeading = document.querySelector('.resultBox h2');
const resultBoxParagraph = document.querySelector('.resultBox p');
const resultBoxButton = document.querySelector('.resultBox button');

form.addEventListener('submit', function (event) {
    let totalPoints = 0;
    event.preventDefault();
    let answers = document.querySelectorAll('input');
    answers.forEach((answer) => {
        if (answer.checked) {
            totalPoints += Number.parseInt(answer.getAttribute("data-points"));
        }
    });
    console.log(totalPoints);

    resultBox.classList.toggle("hidden");
    form.classList.toggle("hidden");

    if (totalPoints === 4) {
        resultBoxHeading.innerHTML = "Perfect!"
    } else if (totalPoints === 3) {
        resultBoxHeading.innerHTML = "So close!"
    } else if (totalPoints === 2) {
        resultBoxHeading.innerHTML = "Halfway there!"
    } else if (totalPoints === 1) {
        resultBoxHeading.innerHTML = "Sorry"
    } else {
        resultBoxHeading.innerHTML = "Yikes"
    }
    resultBoxParagraph.innerHTML = "You got " + totalPoints + "/4 questions correct!"
})

resultBoxButton.addEventListener('click', function () {
    resultBox.classList.toggle("hidden");
    form.classList.toggle("hidden");
})