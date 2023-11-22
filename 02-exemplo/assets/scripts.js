const url = 'api/hello-world.php';
/*const hello = async () => {
    const data = await fetch(url);
    console.log(await data.text());
};
hello();*/
fetch(url).then(response => {
    response.text().then(data => {
        console.log(data)
        document.querySelector("div").innerHTML = data;
    })
});
