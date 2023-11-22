import {getCategories} from "./functions.js";

const form = document.querySelector("#product-form");
const selectCategories = document.querySelector("#category");

getCategories(selectCategories);

form.addEventListener("submit", (event) => {
    event.preventDefault();
    const formData = new FormData(form);

    const url = "api/product-insert.php";
    const options = {
        method: "post",
        body: formData
    };

    fetch(url, options).then((response) => {
        response.json().then((product) => {
            console.log(product)
        })
    });


});
