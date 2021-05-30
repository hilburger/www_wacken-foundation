
$(document).ready(function(){
    console.log("UID: " + sliderContentUid);
    $('#' + sliderContentUid + ' .card-group').slick({
        infinite: true,
        autoplay: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        centerMode: true,
        //prevArrow:"<span class='arrow prev'><i class='fas fa-angle-left'></i></span>",
        //nextArrow:"<span class='arrow next'><i class='fas fa-angle-right'></i></span>",
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
});
