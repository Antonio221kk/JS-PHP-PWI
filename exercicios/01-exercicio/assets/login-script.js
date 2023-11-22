const form = document.querySelector("form");

form.addEventListener("submit",(event)=>{
    event.preventDefault();

    const url = "api/user-login.php";
    const formData = new FormData(form);
    const options = {
        method: "post",
        body: formData
    }
    fetch(url,options).then((response)=>{
        response.text().then((users)=>{
            console.log(users)
        })
    })
});
