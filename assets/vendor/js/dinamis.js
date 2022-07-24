$(document).ready(function(){

  // untuk meghilangkan menu navbar collapse
  $('.navbar-nav > li:not(.dropdown) > a').on('click', function() {
    $('.navbar-collapse').collapse('hide');
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

  // untuk menambah form-input kategori
  $('#form-input').css("display", "none");
  $('.detail').click(function () {
    if ($("input[name='inpkategori']:checked").val() == "bisnis") {
      $('#form-input').slideDown("fast");
    } else {
      $('#form-input').slideUp("fast");
    }
  });

  // untuk menambah form-input pembayaran
  $('#form-input1').css("display", "none");
  $('#form-input2').css("display", "none");
  $('.detail').click(function () {
    if ($("input[name='inppembayaran']:checked").val() == "bank") {
      $('#form-input1').slideDown("fast");
    } else {
      $('#form-input1').slideUp("fast");
    }
  });
  $('.detail').click(function () {
    if ($("input[name='inppembayaran']:checked").val() == "cod") {
      $('#form-input2').slideDown("fast");
    } else {
      $('#form-input2').slideUp("fast");
    }
  });

});
