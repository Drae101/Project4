$(document).mouseup(function (e){
    var container = $(".login");

    if (!container.is(e.target) && container.has(e.target).length === 0) 
    {
        container.hide();
        $('#loginform').removeClass('#5E5B5B');
    }
});

