
AOS.init();
//Back to stop button
$(document).ready(function(){ 
    $(window).scroll(function(){ 
        if ($(this).scrollTop() > 100) { 
            $('#scroll').fadeIn(); 
        } else { 
            $('#scroll').fadeOut(); 
        } 
    }); 
    $('#scroll').click(function(){ 
        $("html, body").animate({ scrollTop: 0 }, 600); 
        return false; 
    }); 
});

window.onscroll = function()
{
    if(pageOffset >= 1000)
    {
        document.getElementById('backToTop').style.visibility="visible"
    }else
    {
        document.getElementById('backToTop').style.visibility="hidden";
    }
};