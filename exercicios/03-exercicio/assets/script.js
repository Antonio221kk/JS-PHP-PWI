const getCategories = async () => {
    const urlCategories = "api/categories-list.php";
    const optionsCategories = {
        method : "get"
    };
    const selectCategories = document.querySelector("#category");
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
getCategories();

const category = document.querySelector("#category");
category.addEventListener("change",() => {
    console.log(category.value);
    // api/products-by-category.php?categoryId=2
    const urlProductsByCategory = `api/products-by-category.php?categoryId=${category.value}`;
    //console.log(urlProductsByCategory);
    fetch(urlProductsByCategory, {method : "get"}).then((response) => {
        //console.log(response);
        response.json().then((products) => {
            //console.log(products);
            const productList = document.querySelector("#productList");
            productList.innerHTML = '';
            products.forEach((product) => {
                console.log(product);
                const tr = document.createElement("tr");
                tr.innerHTML = `<td>${product.id}</td><td>${product.name}</td><td>${product.price}</td>`;
                productList.appendChild(tr);
            });
        });
    });
});

const productName = document.querySelector("#productName");
productName.addEventListener("keyup", () => {
    if(productName.value.length < 3){
        return;
    }

    const param = {
        "name" : productName.value
    };
    const query = new URLSearchParams(param);
    const urlProductsByName = `api/products-by-name.php?${query.toString()}`;

    fetch(urlProductsByName, {method : "get"}).then((response) => {
        response.json().then((products) => {
            //console.log(products);
            const productList = document.querySelector("#productList");
            productList.innerHTML = '';
            products.forEach((product) => {
                console.log(product);
                const tr = document.createElement("tr");
                tr.innerHTML = `<td>${product.id}</td><td>${product.name}</td><td>${product.price}</td>`;
                productList.appendChild(tr);
            });
        });
    });
});
