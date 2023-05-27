/* 

I built this login form to block the front end of most of my freelance wordpress projects during the development stage. 

This is just the HTML / CSS of it but it uses wordpress's login system. 

Nice and Simple

*/

const btn_login = () => {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    console.log(username);
    console.log(password);

    if (username == "" || username == null || username == undefined) {
        alert("plz enter username");
        return;
    }


    if (password == "" || password == null || password == undefined) {
        alert("plz enter password");
        return;
    }

    if (username.length >= 20) {
        alert("username is not valid");
        return;
    }

    if (password.length > 50 || password.length < 6) {
        alert("password is not valid");
        return;
    }

    //___________________________________
    var formdata = new FormData();
    formdata.append("act", "login");
    formdata.append("username", username);
    formdata.append("password", password);

    var requestOptions = {
        method: 'POST',
        body: formdata,
        redirect: 'follow'
    };

    //______________________________

    fetch("http://localhost/php-Learning-/session5/login/userAuth.php", requestOptions)
        .then(response => response.json())
        .then(result => {
            console.log(result);
            switch (result.act) {
                case "login":
                    document.write("Hello " + username);
                    break;

                case "error":
                    alert(result.message);
                    break;
            }
        })
        .catch(error => {
            console.log('error', error);
            alert("you have a error!!!");
        });
}
