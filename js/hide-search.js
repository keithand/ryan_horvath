jQuery(document).ready(function($){
      $(".search-toggle").click(function(){
            $("#search-container").slideToggle('slow', function(){
                  $(".search-toggle").toggleClass('active');
                  });
                  return false;
            });
      });
