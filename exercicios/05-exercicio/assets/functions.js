export function showDataSelect (listOptions, selectHtml) {
    listOptions.forEach((items) =>{
        const option = document.createElement("option");
        option.setAttribute("value",items.id);
        option.textContent = items.name ?? items.description;
        selectHtml.appendChild(option);
    });
}
