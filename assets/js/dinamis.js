$(document).ready(function(){

  // untuk menu sidebar seblah kanan
  $(".sidebarNavigation .navbar-collapse").hide().clone().appendTo("body").removeAttr("class").addClass("sideMenu").show(),
  $("body").append("<div class='overlay'></div>"),$(".sideMenu").addClass($(".sidebarNavigation").attr("data-sidebarClass")),
  $(".navbar-toggle, .navbar-toggler").on("click",function(){
    $(".sideMenu, .overlay").toggleClass("open"),
    $(".overlay").on("click",function(){
      $(this).removeClass("open"),
      $(".sideMenu").removeClass("open")
    })
  }),
  $("body").on("click",".sideMenu.open .nav-item",function(){
    $(this).hasClass("dropdown")||$(".sideMenu, .overlay").toggleClass("open")}),
    $(window).resize(function(){$(".navbar-toggler").is(":hidden")?
    $(".sideMenu, .overlay").hide():
    $(".sideMenu, .overlay").show()
  })

  // untuk menu jika di hamberger
  $(".icon").click(function(e) {
    e.preventDefault();
    $(".icon").toggleClass("active");
  });

  // Smooth scrolling using jQuery easing
  $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, "easeInOutExpo");
        return false;
      }
    }
  });

  // bermain klik untuk scroll
  $('.js-scroll-trigger').click(function() {
    $("#sidebar-wrapper").removeClass("active");
  });

  //#to-top button appears after scrolling
  var fixed = false;
  $(document).scroll(function() {
    if ($(this).scrollTop() > 250) {
      if (!fixed) {
        fixed = true;
        $('#keatas').show("slow", function() {
          $('#keatas').css({
            position: 'fixed',
            display: 'block'
          });
        });
      }
    } else {
      if (fixed) {
        fixed = false;
        $('#keatas').hide("slow", function() {
          $('#keatas').css({
            display: 'none'
          });
        });
      }
    }
  });

});
