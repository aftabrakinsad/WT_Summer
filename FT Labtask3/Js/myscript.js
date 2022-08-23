
function checkname()
{
    var namevalue = document.getElementById("name").value;

    if(!namevalue)
    {
        document.getElementById("nameerror").innerHTML="Name Can't be empty";
        return false;
    }
    if(!isNaN(namevalue) && (namevalue.length <5))
    {
        document.getElementById("nameerror").innerHTML="Name can't be a number";
        return false;
    }
    if(namevalue.length <5)
    {
        document.getElementById("nameerror").innerHTML="Name is not correct";
        return false;
    }
    else
    {
        document.getElementById("nameerror").innerHTML="Name is correct";
        return true;
    }
}

function checklname()
{
    var namevalue = document.getElementById("lname").value;
    if(!isNaN(namevalue) && (namevalue.length <5))
    {
        document.getElementById("lnameerror").innerHTML="Name can't be a number";
        return false;
    }
    if(namevalue.length<5)
    {
        document.getElementById("lnameerror").innerHTML="Name is not correct";
        return false;
    }
    else
    {
        document.getElementById("lnameerror").innerHTML="Name is correct";
        return true;
    }
}

function getradiovalue()
{
    if(document.getElementById("juniorprogrammer").checked==true)
    {
        document.getElementById("radiovalue").innerHTML="Junior Programmer Has been checked";
        return true;
    }
    else if(document.getElementById("seniorprogrammer").checked==true)
    {
        document.getElementById("radiovalue").innerHTML="Senior Programmer Has been checked";
        return true;
    }
    else if(document.getElementById("projectlead").checked==true)
    {
        document.getElementById("radiovalue").innerHTML="Porject Lead Has been checked";
        return true;
    }
    else
    {
        document.getElementById("radiovalue").innerHTML="Please select a radio button";
       
        return false;

    }
}

function checkboxvalue()
{
    if(document.getElementById("Java").checked==true)
    {  var designation = document.getElementById("Java").value;
        document.getElementById("checkvalue").innerHTML=designation+" Has been checked";
        return true;
    }
    else if(document.getElementById("PHP").checked==true)
    {  var designation = document.getElementById("PHP").value;
        document.getElementById("checkvalue").innerHTML=designation+" Has been checked";
        return true;
    }
    else if(document.getElementById("C++").checked==true)
    {  var designation = document.getElementById("C++").value;
        document.getElementById("checkvalue").innerHTML=designation+" Has been checked";
        return true;
    }
    else
    {
        document.getElementById("checkvalue").innerHTML="Please Check a checkbox";
       
        return false;
    }
}

function validateemail()
{
    var emailpattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var email =document.getElementById("email").value;
    if(email.match(emailpattern))
    {
        document.getElementById("emailvalue").innerHTML="Email Pattern Valid";
        return true;
    }
    else
    {
        document.getElementById("emailvalue").innerHTML="Email Pattern invalid";
        return false;
    }
}

function agecheck()
{
    var agevalue = document.getElementById("age").value;
    if(isNaN(agevalue))
    {
        document.getElementById("ageerror").innerHTML="Age can't be a Alpahbet";
        return false;
    }
    else
    {
        document.getElementById("ageerror").innerHTML="Age is correct";
        return true;
    }
}

function passcheck()
{
    var pvalue =document.getElementById("pass").value;
    if( pvalue.lengh > 8)
    {
        document.getElementById('passvalue').innerHTML="Pass is invalid";
        return true;
    }
    else if(pvalue.search(/[a-z]/i) < 0 )
    {
        document.getElementById('passvalue').innerHTML="Pass is invalid";
        return false;
    }
    else if(pvalue.search(/[0-9]/) < 0 )
    {
        document.getElementById('passvalue').innerHTML="Pass is invalid";
        return false;
    }
    else
    {
        document.getElementById('passvalue').innerHTML="Pass is valid";
        return true;
    }
}

function formcheck()
{
    if(checkname() == true && checklname() == true && getradiovalue() == true && checkboxvalue() == true&& agecheck() == true && validateemail() == true && passcheck() == true)
    {
        return true;
    }
    else
    {
        return false;
    }
}