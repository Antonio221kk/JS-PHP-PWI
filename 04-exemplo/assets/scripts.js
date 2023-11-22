

const url = 'https://reqres.in/api/users';

document.querySelector("button").addEventListener("click", () => {
    fetch(url).then((response) => {
        response.json().then((users) => {
            console.log(users);
            const divUsers = document.querySelector("div");
            users.data.forEach((user) => {
                console.log(user.first_name, user.email, user.avatar);
                let divUser = document.createElement("div");
                divUser.innerHTML = `
              ${user.first_name} - {}- <img src="${user.avatar}">
            `;
                divUsers.appendChild(divUser);
            });
        });
    });
});


