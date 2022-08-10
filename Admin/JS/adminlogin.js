function usernamecheck_admin()
{
    var uname = document.getElementById("uname").value;

    if(!uname)
    {
        document.getElementById("nameerr").style.color = "red";
        document.getElementById("nameerr").innerHTML = "Enter your username";
        return false;
    }
    else if(!isNaN(uname))
    {
        document.getElementById("nameerr").style.color = "red";
        document.getElementById("nameerr").innerHTML = "username can't be a number";
        return false;
    }
    else if(uname.length < 5)
    {
        document.getElementById("nameerr").style.color = "red";
        document.getElementById("nameerr").innerHTML = "username must be atleast lessthan equal to 5";
        return false;
    }
    else
    {
        document.getElementById("nameerr").style.color = "green";
        document.getElementById("nameerr").innerHTML = "username's formet ok";
        return true;
    }
}

function passwordcheck_admin()
{
    var pass = document.getElementById("pass").value;

    if(!pass)
    {
        document.getElementById("passerr").style.color = "red";
        document.getElementById("passerr").innerHTML = "password can't be empty";
        return false;
    }
    else
    {
        document.getElementById("passerr").style.color = "green";
        document.getElementById("passerr").innerHTML = "password's formet ok";
        return true;
    }
}

function form_check_admin()
{
    if(usernamecheck_admin() == true && passwordcheck_admin() == true)
    {
        return true;
    }
    else
    {
        return false;
    }
}