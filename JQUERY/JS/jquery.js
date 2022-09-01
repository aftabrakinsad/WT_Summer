function click()
{
    $(document).ready(function()
    {
        //After Clicking, the Div animation
        $("#click").click(function()
        {
            $("p").animate({left: '500px'}, "slow");
        });

        //After Clicking, Show and Hide the Div
        $("#click").click(function()
        {
            $("p").toggle();
        });

        //After 1000 mili second, the Div will be fade out
        $("#click").click(function()
        {
            $("p").delay(1000).fadeOut();
        });
    });
}
click();