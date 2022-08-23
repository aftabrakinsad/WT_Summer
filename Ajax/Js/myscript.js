function ajax()
{
    var uname = document.getElementById("uname").value;

    var myhttp = new XMLHttpRequest();
    myhttp.onreadystatechange = function()
    {
        if(this.readyState == 4 && this.status == 200)
        {
            document.getElementById("ajaxresponce").innerHTML = this.responseText;
        }
    };

    myhttp.open("POST", "http://localhost/WT_Summer/Ajax/Control/ajax.process.php", true);
    myhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    myhttp.send("uname="+uname);
}

function ajax_formcheck()
{
    if(ajax() == true)
    {
        return true;
    }
    else
    {
        return false;
    }
}