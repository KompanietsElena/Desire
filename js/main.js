//Открытие и закрытие скрытого меню
$(function () {
    $('.header__btn').on('click',function(){
        $('.rightside-menu').removeClass('rightside-menu--close');
    });
    $('.rightside-menu__close').on('click',function(){
        $('.rightside-menu').addClass('rightside-menu--close');
    });
//слайдер для стартовой страницы
    $('.top__slider').slick({
        dots:true,
        arrows: false,
        fade:true,
        autoplay: true
    });
//слайдер для страницы контакты
    $('.contact-slider').slick({
        dots:true,
        arrows: false,
        slidesToShow: 10,
        slidesToScroll: 10
        
    });
//оживляющий эфект для гаерии по нажатию на кнопку
    var mixer = mixitup('.gallery__inner',{
    load:{
        filter:'.living'
    }
});
})
