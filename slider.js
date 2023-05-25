$(document).ready(function(){
    $(".hamburger-menu").click(function(){
        $(".menu").slideToggle();
        $(".bar").toggleClass("change");
    });
});