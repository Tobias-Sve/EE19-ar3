//Hämta variablar
const clickerSpan = document.querySelector('.clickcount');
const clickerButton = document.querySelector('.clicker');
const upgradeSpan = document.querySelector('.currentupgrade');
const addOne = document.querySelector('.upgrade1');
const addTwo = document.querySelector('.upgrade2');
let clicked = 0;
let upgrade = 1

addOne.addEventListener("click", function () {
    upgrade++;
    upgradeSpan.textContent = upgrade;
})
addTwo.addEventListener("click", function () {
    upgrade += 2;
    upgradeSpan.textContent = upgrade;
})

//Känn av när clicker knappen trycks in
clickerButton.addEventListener("click", function () {
    clicked = clicked + upgrade;
    clickerSpan.textContent = clicked;
})