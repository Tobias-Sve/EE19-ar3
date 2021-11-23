
function myFunction() {
    //Color Konstanter
    const Blue = document.querySelector("#Blue");
    const Pink = document.querySelector("#Pink");
    //Hobby Konstanter
    const figures = document.querySelector("#Figures");
    const dolls = document.querySelector("#Dolls");
    //Cook Konstanter
    const coYes = document.querySelector("#coYes");
    const coNo = document.querySelector("#coNo");
    //Weight Konstanter
    const wYes = document.querySelector("#wYes");
    const wNo = document.querySelector("#wNo");
    //Clean Konstanter
    const clYes = document.querySelector("#clYes");
    const clNo = document.querySelector("#clNo");

    //Vilka värden har variablarna

    var boy = 0;
    var girl = 0;
    var special = 0;


    //Color input
    if (Blue.checked == true) {
        boy = boy + 1;
    } else if (Pink.checked == true) {
        girl = girl + 1;
    } else {
        special = special + 1;
    }
    //Hobby input
    if (figures.checked == true) {
        boy = boy + 1;
    } else if (dolls.checked == true) {
        girl = girl + 1;
    } else {
        special = special + 1;
    }
    //Cook input
    if (coYes.checked == true) {
        girl = girl + 1;
    } else if (coNo.checked == true) {
        boy = boy + 1;
    } else {
        special = special + 1;
    }
    //Weight input
    if (wYes.checked == true) {
        girl = girl + 1;
    } else if (wNo.checked == true) {
        boy = boy + 1;
    } else {
        special = special + 1;
    }
    //Clean input
    if (clYes.checked == true) {
        girl = girl + 1;
    } else if (clNo.checked == true) {
        boy = boy + 1;
    } else {
        special = special + 1;
    }

    console.log("Boy points", boy, ". Girl Points", girl, ". Special points", special);
    
}