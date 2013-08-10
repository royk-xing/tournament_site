// Login Form

$(function() {
    var button = $('#joinButton');
    var box = $('#loginBox');
    var form = $('#loginForm');
    button.removeAttr('href');
    button.mouseup(function(login) {
        box.toggle();
        button.toggleClass('active');
    });
    form.mouseup(function() { 
        return false;
    });
    $(this).mouseup(function(login) {
        if(!($(login.target).parent('#joinButton').length > 0)) {
            button.removeClass('active');
            box.hide();
        }
    });
});
