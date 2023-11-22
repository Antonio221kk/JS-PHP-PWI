export const getCategories = async (selectCategories) => {
    const urlCategories = "api/categories-list.php";
    const optionsCategories = {
        method : "get"
    };
    const response = await fetch(urlCategories, optionsCategories);
    //console.log(response);
    const categories = await response.json();
    //console.log(categories);
    categories.forEach((category) => {
        const option = document.createElement("option");
        option.textContent = category.name;
        option.setAttribute("value", category.id);
        selectCategories.appendChild(option);
    });
};
