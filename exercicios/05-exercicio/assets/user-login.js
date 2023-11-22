// capturar o form

const form = document.querySelector('#form-user-login');

form.addEventListener('submit', function (event) {
    event.preventDefault();
    const url = 'api/user-login.php';
    const options = {
        method: 'POST',
        body: new FormData(form)
    };

    fetch(url, options).then((response) => {
        response.json().then((data) => {
            console.log(data);
            //console.log(data.user.name, data.user.email);
        });
    });
});

