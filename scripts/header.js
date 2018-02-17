$(document).ready(function()
{
    $('#show-case>.img:gt(0)').hide();
    setInterval(function() {
        $(".img:first-child").fadeOut(3000).next(".img").fadeIn(3000).end().appendTo("#show-case")
}, 4000);
       
});