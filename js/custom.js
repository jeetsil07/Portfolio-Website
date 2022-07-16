$(document).ready(function(){
    $(window).scroll(function(){
        $('nav').toggleClass('navbg',$(this).scrollTop()>20);
        $('nav a').toggleClass('navabg',$(this).scrollTop()>20);
    });
    // ----------------------add post----------------------
    $('#blogform').hide();
        $('#blogbtn').click(function(){
            $('#blogform').show();
            $('#projectform').hide();
        });
        $('#projectbtn').click(function(){
            $('#projectform').show();
            $('#blogform').hide();
        });
    // ----------------AOS-------------
    AOS.init({
        offset: 300,
        delay: 300,
        duration: 600,
    });
    // -------------Skills-----------
    $(function(){
        $('.circlechart').circlechart();

    });
    // ----------------typing----------
    var typed = new Typed('#typing',{
        strings: [
            "Web Developer.",
            "Bloger.",
            "Graphic Designer.",
            "Software Student."
        ],
        typeSpeed: 50,
        backSpeed: 50,
        loop: true
    });
});