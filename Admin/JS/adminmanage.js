function checkusername()
{
    var username = document.getElementById("username").value;
    if(!username)
    {
        document.getElementById("usernameerr").style.color = "red";
        document.getElementById("usernameerr").innerHTML = "Enter username to search";
        return false;
    }
    else if(username.length < 5)
    {
        document.getElementById("usernameerr").style.color = "red";
        document.getElementById("usernameerr").innerHTML = "Username must be more than 5 characters!";
        return false;
    }
    else
    {
        document.getElementById("usernameerr").style.color = "green";
        document.getElementById("usernameerr").innerHTML = "Username OK";
        return true;
    }
}

