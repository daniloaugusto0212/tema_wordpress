$(function(){


    /*MENI RESPONSIVO*/
    var mobile = $('.menu-mobile');
    mobile.click(function(){
        mobile.find('ul').slideToggle();
    })

    /*SLIDERS CLIENTES*/
    $('section.clientes-slider .slider-container').slick({
        dots: true,
        arrows:false,
        infinite: false,
        speed:1000,
        slidesToShow: 4,
        autoplay: true,
        centerMode:false,
        autoplaySpeed: 3000,
        pauseOnHover:false,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2
                }
            }
        ]
    });

     /*SLIDERS DEPOIMENTOS*/
     $('section.depoimentos .depoimentos-box').slick({
        dots: true,
        arrows:false,
        infinite: true,
        speed:1000,
        slidesToShow: 1,
        centerMode:false
    });
    
});