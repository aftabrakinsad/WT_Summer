function click()
{
    $(document).ready(function()
    {
        $("#click").click(function()
        {
            $("p").toggle();
        });
    });
}
click();