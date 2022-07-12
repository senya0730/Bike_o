$(function(){
    //クリックで動く
    $('.nav-open').click(function(){
        if($(this).hasClass('active')){
            $(this).toggleClass('active');
            $(this).next('nav').fadeIn();

        } else {
            $(this).toggleClass('active');
            $(this).next('nav').fadeOut();    }
    });
    //ホバーで動く
    // $('.nav-open').hover(function(){
    //     $(this).toggleClass('active');
    //     $(this).next('nav').fadeIn();
    // },
    // function() {
    //     $(this).toggleClass('active');
    //     $(this).next('nav').fadeOut();
    // });
});
