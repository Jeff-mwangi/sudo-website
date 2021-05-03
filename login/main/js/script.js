$(document).ready(function(){
    $("#login-button li").submit(function(){
        event.preventDefault();
        $(".card").show();
    })
});