const getCategories = async () => {
    const urlCategories = "api/categories-list.php";
    const optionsCategories = {
        method : "get"
    };
    const selectCategories = document.querySelector("#productCategory");
    const response = await fetch(urlCategories, optionsCategories);
    const categories = await response.json();
    categories.forEach((category) => {
        const option = document.createElement("option");
        option.textContent = category.name;
        option.setAttribute("value", category.id);
        selectCategories.appendChild(option);
    });
};
getCategories();

const form = document.querySelector("#product-form");

form.addEventListener("submit", async (event) => {
    event.preventDefault();
    const formData = new FormData(form);
    const url = "api/product-insert.php";
    const options = {
        method: 'post',
        body: formData
    };
    const response = await fetch(url,options);
    const product = await response.json();
    console.log(product);

});
