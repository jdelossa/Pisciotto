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
    $("a.tab-contact").attr("href", "http://wuhwebsites.winthrop.org/advanced_ortho_wordpress");
  };
});

$(document).ready(function(){
  $(".rockville-centre" ).click(function() {
    $("a.tab-staff").attr("href", "#medical-staff-rc");
    $("a.tab-contact").attr("href", "#contact-rc");
  });
  $( ".garden-city" ).click(function() {
    $("a.tab-staff").attr("href", "#medical-staff-gc");
    $("a.tab-contact").attr("href", "#contact-gc");
  });
});

