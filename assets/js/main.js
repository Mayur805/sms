$(document).ready(function() {
    $('.menu-outline').click(function() {
        $(this).css('display', 'none');
        $('.close-outline').css('display', 'block');
    });
    $('.close-outline').click(function() {
        $(this).css('display', 'none');
        $('.menu-outline').css('display', 'block');
    });

    $('.back-top').click(function() {
        window.scrollTo(0, 0);
    });
});