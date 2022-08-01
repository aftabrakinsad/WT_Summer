function afterclick()
{
    var a = document.getElementById("myinput").value;
    var b = document.getElementById("myprint");

    b.innerHTML = "The " +a+" was this";
}
//a.innerHTML="Hello World";

//document.write("Hello Nigga");

//alert("Hello Nigga");

//console.log("I am a noob");

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