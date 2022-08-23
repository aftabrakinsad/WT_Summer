function checkname()
{
    var namevalue = document.getElementById("name").value;
    if(namevalue.length<3)
    {
        document.getElementById("nameerror").innerHTML = "name is not correct";
    }
    else
    {
        document.getElementById("nameerror").innerHTML = "name is correct";
    }
}

function getrediovalue()
{
    if(document.getElementById("male").checked == true)
    {
        document.getElementById("rediovalue").innerHTML = "Fmale is checked";
    }
    else
    {
        document.getElementById("rediovalue").innerHTML = "Male is checked";
    }
}