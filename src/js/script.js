
(function depoimentoSlide(){
    var slide = document.querySelector('.depoimentos-slide');
    if ( !slide ) return;

    $slide = $(slide);
    $slide.slick({
        autoplay: true,
        autoplaySpeed: 6000,
        adaptiveHeight: true
    });
})();

