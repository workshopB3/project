
  $('#fullpage').fullpage({
    anchors: ['firstPage', 'secondPage', 'thirdPage', 'fourthPage', 'fifthPage', 'sixthPage', 'seventhPage', 'eighthPage', 'ninthPage'],
    afterSlideLoad: function( anchorLink, index, slideAnchor, slideIndex){
     $('nav li.active').removeClass('active');
     $('nav li').eq(slideIndex).addClass('active');
   }
  });
