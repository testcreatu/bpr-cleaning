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



$('.owl-carousel').owlCarousel({
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