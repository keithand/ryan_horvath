jQuery(document).ready(function($){
      var stickyNavTop = $('.main-navigation').offset().top;

      $(window).scroll(function(){
            var scrollTop = $(window).scrollTop();

            if (scrollTop > stickyNavTop){
                  $('.main-navigation').addClass('sticky-header');
                  $('.site-header').addClass('shifted');
            } else {
                  $('.main-navigation').removeClass('sticky-header');
                  $('.site-header').removeClass('shifted');
            }
      });
});
