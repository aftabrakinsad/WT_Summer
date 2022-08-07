function fnamecheck_adminregistration()
{
    var fname = document.getElementById("fname").value;

    if(!fname)
    {
        document.getElementById("fnameerr").innerHTML = "Enter your firstname";
    }
    else if(!isNaN(fname))
    {
        document.getElementById("fnameerr").innerHTML = "Firstname can't be a number";
        return false;
    }
    else if(fname.length < 5)
    {
        document.getElementById("fnameerr").innerHTML = "Firstname must be atleast lessthan equal to 5";
        return false;
    }
    else
    {
        document.getElementById("fnameerr").innerHTML = "Firstname is correct";
        return true;
    }
}

function lnamecheck_adminregistration()
{
    var lname = document.getElementById("lname").value;

    if(!lname)
    {
        document.getElementById("lnameerr").innerHTML = "Enter your lastname";
        return false;
    }
    else if(!isNaN(lname))
    {
        document.getElementById("lnameerr").innerHTML = "Lastname can't be a number";
        return false;
    }
    else if(lname.length <  5)
    {
        document.getElementById("lnameerr").innerHTML = "Lastname must be atleast lessthan equal to 5";
        return false;
    }
    else
    {
        document.getElementById("lnameerr").innerHTML = 
        "Lastname is correct";
        return true;
    }
}

function email_adminregistration()
{
    var emailpattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var email = document.getElementById("email").value;

    if(!email)
    {
        document.getElementById("emailerr").innerHTML = "Enter your email";
        return false;
    }
    else if(email.match(emailpattern))
    {
        document.getElementById("emailerr").innerHTML = "Email Pattern Valid";
        return true;
    }
    else
    {
        document.getElementById("emailerr").innerHTML = "Email Pattern invalid";
        return false;
    }
}

function nid_adminregistration()
{
    var nid = document.getElementById("nid").value;

    if(!nid)
    {
        document.getElementById("niderr").innerHTML = "Enter your nid";
        return false;
    }
    else if(nid.length == 8 && !isNaN(nid))
    {
        document.getElementById("niderr").innerHTML = "NID is valid";
        return true;
    }
    else
    {
        document.getElementById("niderr").innerHTML = "NID must contain 8 numaric value";
        return false;
    }
}

function phone_adminregistration()
{
    var phone = document.getElementById("phone").value;

    if(!phone)
    {
        document.getElementById("phoneerr").innerHTML = "Enter your phone number";
        return false;
    }
    if(phone.length == 11 && !isNaN(phone))
    {
        document.getElementById("phoneerr").innerHTML = "Phone number is valid";
        return true;
    }
    else
    {
        document.getElementById("phoneerr").innerHTML = "Phone number must be 11 digit numeric value";
        return false;
    }
}

function otp_forpasswordchange()
{
    var otp = document.getElementById("otp").value;
    if(!isNaN(otp) && otp.length == 6)
    {
        document.getElementById("otperr").innerHTML = "OTP is valid";
        return true;
    }
    else
    {
        document.getElementById("otperr").innerHTML = "OTP is not valid";
        return false;
    }
}