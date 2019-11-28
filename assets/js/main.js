$('.owl-carousel').owlCarousel({
    rtl: true,
    loop: true,
    margin: 10,
    items: 1,
    responsiveClass: true,
    nav: true,
    dots:false,
    autoplay: true,
    autoplayHoverPause: true,
    responsive: {
        320: {
            items:1 
        },
        481: {
            items: 1
        },
        991: {
            items: 3
        },
        1025: {
            items: 4
        }
    }
});
$(document).ready(function(){
    var scrollTop =0;
    $(window).scroll(function(){
        scrollTop = $(window).scrollTop();
        if (scrollTop > 200){
            $('.navbar').addClass ('scrollNavbar');
			$('.backTop').addClass ('visible');
			
        }else if (scrollTop < 100){
            $('.navbar').removeClass('scrollNavbar');
			$('.backTop').removeClass ('visible');
        };
    });
	$('.backTop').click (function(){
		$('body , html').animate({
			scrollTop:0
		},800);
	});
});
