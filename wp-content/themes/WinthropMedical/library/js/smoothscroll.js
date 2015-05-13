$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      var space = -80;
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top + space
        }, 1000);
        return false;
      }
    }
  });
});
$(document).ready(function(){
  if($("body").hasClass("single")){
    $("a.home").attr("href", "http://localhost:8888/pisciotto_wordpress/#home");
    $("a.about").attr("href", "http://localhost:8888/pisciotto_wordpress/#about");
    $("a.physicians").attr("href", "http://localhost:8888/pisciotto_wordpress/#physicians");
    $("a.insurance").attr("href", "http://localhost:8888/pisciotto_wordpress/#insurance");
    $("a.offices").attr("href", "http://localhost:8888/pisciotto_wordpress/#offices");
  };
});

