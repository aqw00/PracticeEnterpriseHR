$(document).ready(function()
{
    $("#slideshow > div:gt(0)").hide();

    setInterval(function(){
        $('#slideshow > div:first')
        .fadeOut(2500)
        .next()
        .fadeIn(2500)
        .end()
        .appendTo('#slideshow');
    }, 5000);
});