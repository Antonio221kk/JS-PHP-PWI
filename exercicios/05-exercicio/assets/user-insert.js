// 1. Capturar o formulário
const form = document.querySelector("#form-user-insert");

// 2. Capturar o evento de submit do formulário

form.addEventListener("submit",  (event) => {
    event.preventDefault();
    const url = "api/user-insert.php";
    const options = {
        method: "POST",
        body: new FormData(form)
    }
    fetch(url, options).then((response) => {
        response.json().then((user) => {
            console.log(user);
            if(user.type == "error"){
                document.querySelector("#message").textContent = user.message;
            }
        });
    });
});