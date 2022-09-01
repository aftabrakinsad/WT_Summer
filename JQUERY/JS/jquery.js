function click()
{
    $(document).ready(function()
    {
        //After Clicking, Show and Hide the Div
        $("#click").click(function()
        {
            $("#p").toggle();
        });

        //After 1000 mili second, the Div will be fade out
        $("#click").click(function()
        {
            $("#p").delay(1000).fadeOut();
        });
    });
}
click();

function animation()
{
    //After page refrashing, the Div animation
    $("#animation").animate({left: '500px'}, "slow");
}
animation();

function after_click_animation()
{
    //After Clicking, the Div animation
    $(document).ready(function()
    {
        $("#btn").click(function()
        {
            $("#btnclick").animate({left: '500px'}, "slow");
        });
    });
}
after_click_animation();