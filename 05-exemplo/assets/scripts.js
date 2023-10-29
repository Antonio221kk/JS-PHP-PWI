


const url = "https://api.binance.com/api/v3/ticker/price?symbol=BTCUSDT";

function price () {
    fetch(url).then(response => {
        //console.log(response.json());
        response.json().then(bitcoin => {
            console.log(bitcoin);
        });
    })
}

setInterval(price,3000);
