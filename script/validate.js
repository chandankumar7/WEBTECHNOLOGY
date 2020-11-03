function validation()
{
    var user = document.getElementById('user').value;
    var pass = document.getElementById('pass').value.trim();

    if (!user == "") {
        document.getElementById('username').innerHTML = "";
    } else {
        document.getElementById('username').innerHTML = "**Please fill the username field";
        return false;
    }


    if ((user.length <= 2) || (user.length > 20)) {
        document.getElementById('username').innerHTML = "**user length must be between 2 and 20";
        return false;
    }

    if (!isNaN(user)) {
        document.getElementById('username').innerHTML = "**only characters are allowed";
        return false;
    }

    if (!pass == "") {
        document.getElementById('username').innerHTML = "";

    } else {
        document.getElementById('password').innerHTML = "**Please fill the password field";
        return false;
    }



    if ((pass.length <= 5) || (pass.length > 20)) {
        document.getElementById('password').innerHTML = "**password  length must be between 5 and 20";
        return false;
    } else {
        alert("Login Successfully")
    }


}
