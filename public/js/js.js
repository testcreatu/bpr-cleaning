var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  var currentScrollpos = window.pageYOffset;
  if(prevScrollpos > currentScrollpos) {
    document.getElementById("navbar").style.top = "0px";
} else {
    document.getElementById("navbar").style.top = "-180px";
}
prevScrollpos = currentScrollpos;
}



$(document).ready(function () {
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      $('.scroll-top').fadeIn();
    } else {
      $('.scroll-top').fadeOut();
    }
  });

  $('.scroll-top').click(function () {
    $("html, body").animate({
      scrollTop: 0
    }, 100);
      return false;
  });

});



$('.testimonial-carousel').owlCarousel({
    loop:false,
    rewind:true,
    nav:false,
    dots:true,
    autoplay:false,
    responsiveClass:true,
    responsive:{
         0:{
            items:1,
            nav:true
        },
        480:{
            items:1,
            nav:true
        },
        768:{
            items:1,
            nav:true
        },
        1024:{
            items:1,
            nav:true
        },
        1380:{
            items:1,
            nav:true
        },
        1580:{
            items:1,
            nav:true
        }
    }
})

$(document).ready(function(){
    // Check Radio-box
    $(".rating input:radio").attr("checked", false);

    $('.rating input').click(function () {
        $(".rating span").removeClass('checked');
        $(this).parent().addClass('checked');
    });

    $('input:radio').change(
      function(){
        var userRating = this.value;
        alert(userRating);
    }); 
});




function sticky_relocate() {
    var window_top = $(window).scrollTop() ;
    var footer_top = $(".none-sticky").offset().top -30;
    var div_top = $('#sticky-anchor').offset().top;
    var div_height = $(".sidebar").height();
    var leftHeight = $('.left-container').height(); 

    if (window_top + div_height > footer_top){
        $('.sidebar').removeClass('stick');
        $('.sidebar').addClass('abs');
            $('.right-conatainer').css('min-height', leftHeight + 'px');
        }
    else if (window_top > div_top) {
        $('.sidebar').addClass('stick');
        $('.sidebar').removeClass('abs');
    } else {
        $('.sidebar').removeClass('stick');
        $('.sidebar').removeClass('abs');
    }
}

$(function () {
    $(window).scroll(sticky_relocate);
    sticky_relocate();
});




$('.our-work-carousel').owlCarousel({
    loop:false,
    rewind:true,
    nav:true,
    dots:false,
    autoplay:false,
    responsiveClass:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
})

$('.related-story-carousel').owlCarousel({
    loop:false,
    rewind:true,
    nav:true,
    dots:false,
    autoplay:false,
    responsiveClass:true,
    responsive:{
         0:{
            items:1,
            nav:true
        },
        480:{
            items:1,
            nav:true
        },
        768:{
            items:2,
            nav:true
        },
        1024:{
            items:2,
            nav:true
        },
        1380:{
            items:2,
            nav:true
        },
        1580:{
            items:2,
            nav:true
        }
    }
})




$('.more-cases-carousel').owlCarousel({
    loop:false,
    rewind:true,
    nav:true,
    dots:false,
    autoplay:false,
    responsiveClass:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:3
        }
    }
})