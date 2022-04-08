const eModal = document.querySelector("#exampleModal");
const formModal = document.querySelector("form");
const btnModal = document.querySelector("#btnModal");
const btnLogin = document.querySelector("#btnLogin");
const statusModal = document.querySelector("#status");

//Initialisera modal-fönstret
let loginModal = new bootstrap.Modal(
    "#exampleModal",
    {
        //Options here
        backdrop: "static",
    }
);
/* 
btnModal.addEventListener('click', function () {
    loginModal.show();
}) */

//Hantera inloggning
btnLogin.addEventListener("click", function (e) {

    //Prevent refreshing when button is pressed
    e.preventDefault();

    //Läs in data
    const postData = new FormData(formModal);

    console.log(postData);

    //Skicka till login.php
    fetch("./login.php", {
        method: "POST",
        body: postData,
    })
        .then(response => response.text())
        .then(data => {
            loginModal.hide();
            
            switch (data) {
                case "0":
                    statusModal.innerHTML = "Welcome in";
                    statusModal.classList.remove("alert", "alert-danger")
                    statusModal.classList.add("alert", "alert-success");
                    break;

                case "1":
                    statusModal.innerHTML = "Your email or password is wrong. Try again!";
                    statusModal.classList.remove("alert", "alert-success")
                    statusModal.classList.add("alert", "alert-danger");
                    break;

                case "2":
                    statusModal.innerHTML = "You forgot to fill in your email or your password";
                    statusModal.classList.remove("alert", "alert-success")
                    statusModal.classList.add("alert", "alert-danger");
                    break;

                default:
                    statusModal.innerHTML = "Something went wrong, contact support";
                    statusModal.classList.remove("alert", "alert-success")
                    statusModal.classList.add("alert", "alert-danger");
                    break;
            }
            console.log(data);

            //Rinse the form
            formModal.reset();

        })
})