const url = "api/person.php";

document.querySelector("button").addEventListener("click", () => {
    fetch(url).then((response) => {
        response.json().then((person) => {
            document.querySelector("div").innerHTML = `
        <div>Nome: ${person.name}</div>
        <div>Idade: ${person.age}</div>
        <div>Profissão: ${person.job}</div>
        `;
        })
    });
});
