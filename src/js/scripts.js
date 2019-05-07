(function( root, $, undefined ) {
    var btt = $('#btt');

btt.css('display','block');

$(window).scroll(function() {
  if ($(window).scrollTop() > 300) {
    btt.addClass('show');
  } else {
    btt.removeClass('show');
  }
});

btt.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '300');
});


// Animations for the Top Slideout Nav
    var overlay = document.getElementById('overlay'),
    oNav = document.getElementById('oNav');

    var menu = new TimelineMax({paused:true, reversed: true});
    TweenMax.set(oNav, {xPercent: 100});
    menu
    .to('#nav-icon',.0, {className:"+=open"})
    .to(overlay,.5,{autoAlpha: 1, ease: Power4.easeIn})
    .to(oNav, .5, {xPercent: 50});
// Menu Toggle
function menuToggle() {
  menu.reversed() ? menu.play() : menu.reverse();

}

  // MENU NAVIMAGATION
  var navBtn = $("#nav-icon");

  navBtn.on('click', function() {
   menuToggle();
 });

  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      if (!this.hash.includes("tab")) {
        // Store hash
        var hash = this.hash;

        // Using jQuery's animate() method to add smooth page scroll
        // The optional number () specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 950, function(){

          if ($('#nav-icon').hasClass('open')) {
            menu.reverse();
          }

          window.location.hash = hash;

        });
      }

    } // End if

  });


  $(window).scroll(function() {
    var scroll = $(window).scrollTop();
      $("header").removeClass("header-show");
      $('.t-nav-links a').css('color','#fff');

     //>=, not <=
    if (scroll >= 20) {
        //clearHeader, not clearheader - caps H
        $("header").addClass("header-show");
        $('.t-nav-links a').css('color','#000');
    }
});


// Typewriter Plugin
var typeDisplay = document.getElementById('typewriter');

if ($('#typewriter').length) {
var typewriter = new Typewriter(typeDisplay, {
    autoStart: true,
    loop: true,
    cursor: '_'
});
    var img1 = $('#section-1 #img-1');
    var img2 = $('#section-1 #img-2');
    // var img3 = $('#section-1 #img-3');
    typewriter
        .typeString('BLITS Blockchain ITSM Solution')
        .pauseFor(2000)
        .deleteChars(30)
        // .callFunction(function() {
        //    TweenMax.to(img1,1.5,{autoAlpha: 0});
        //    TweenMax.to(img2,2.5,{autoAlpha: 1});
        // })
        .typeString('Manblock Blockchain Platform')
        .pauseFor(2000)
        .deleteChars(27)
        // .callFunction(function() {
        //    TweenMax.to(img2,1.5,{autoAlpha: 0});
        //    TweenMax.to(img1,2.5,{autoAlpha: 1});
        // })
        // .typeString('IT Services and Solutions')
        // .pauseFor(2500)
        // .deleteChars(23)
        // .callFunction(function() {
        //   TweenMax.to(img3,1.5,{autoAlpha: 0});
        //   TweenMax.to(img1,2.5,{autoAlpha: 1});
        // })
        .start();

}


// Bootstrap Select
var formModal = document.getElementById('formModal');
TweenMax.set(formModal, {xPercent: '100','z-index': 10, 'display': 'none'});

$('#requestSelect').selectpicker({
  'hideDisabled':true,
  'noneSelectedText': 'Choose Your Option',
  'style': 'select'

})
.on('show.bs.select', function() {

    var droption = document.querySelectorAll('.dropdown-menu li');
    TweenMax.set(droption, {autoAlpha: 0});
    var tl = new TimelineMax();
    $(droption).each(function() {
        tl.staggerTo(droption, 2, {autoAlpha: 1});
    });

})
.on('loaded.bs.select', function() {
  var underline = document.createElement('span');
  underline.setAttribute('class','underline');
  document.querySelector('.dropdown').appendChild(underline);
})
.on('hide.bs.select', function() {
  if ('changed.bs.select' != true) {
  }
  $(this).next().addClass('changed');
    var select = document.getElementById('requestSelect');

    if (select.options[select.selectedIndex].value) {
            var selectText = select.options[select.selectedIndex].value;
            $('#formModal').find('#mce-MMERGE5').val(selectText);
            // $('#formModal').modal('show');
            TweenMax.to(formModal, 1, {display:'block',xPercent: 0, ease: Power2.easeOut});
            $('body').css('background','0,0,0 .75');
            setTimeout(function() {
              document.getElementById('mce-EMAIL').focus();
            },1000);
    }
});

$('.close').on('click', function() {
  TweenMax.to(formModal, 1, {xPercent: '100',display: 'none', ease: Power4.easeOut});
});

$(document).click(function (e) {
    if($('#formModal').is(':visible')&&!$(e.target).closest('#formModal').length){
       TweenMax.to(formModal, 1, {xPercent: '100',display: 'none', ease: Power4.easeOut});
    }
});


} ( this, jQuery ));
