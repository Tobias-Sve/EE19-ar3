//Gör en variabel med 0 som värde
var värde = 0;

//När du trycker på knappen, lägg till 1 på p taggens räknare
function bajs() {
    värde++;
    document.querySelector("p").innerHTML = "Du har tryckt på knappen " + värde + " gånger";
    

}