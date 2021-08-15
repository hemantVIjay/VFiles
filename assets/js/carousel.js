//city carousel
$('#cityCarousel, .owl-carousel').owlCarousel({
  loop:true,
  margin:12,
  autoplay: true,
  autoplayHoverPause: true,
  nav:true,
  dots: false,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:3
      },
      1024: {
        items: 4
      },
  
      1366: {
        items: 4
      }
  }
});

$('#flatCarousel, .owl-carousel').owlCarousel({
  loop:true,
  margin:12,
  autoplay: true,
  autoplayHoverPause: true,
  nav:true,
  dots: false,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:3
      },
      1024: {
        items: 4
      },
  
      1366: {
        items: 4
      }
  }
});

$('#plotCarousel, .owl-carousel').owlCarousel({
  loop:true,
  margin:12,
  autoplay: true,
  autoplayHoverPause: true,
  nav:true,
  dots: false,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:3
      },
      1024: {
        items: 4
      },
  
      1366: {
        items: 4
      }
  }
});

$('#commercialCarousel, .owl-carousel').owlCarousel({
  loop:true,
  margin:12,
  autoplay: true,
  autoplayHoverPause: true,
  nav:true,
  dots: false,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:3
      },
      1024: {
        items: 4
      },
  
      1366: {
        items: 4
      }
  }
});

$('#newsCarousel, .owl-carousel').owlCarousel({
  loop:true,
  margin:12,
  autoplay: 3000,
  autoplayHoverPause: true,
  nav:true,
  dots: false,
  items: 2,
  responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:2,
            nav:false
        },
        1000:{
            items:2,
            nav:true,
            loop:false
        }
  }
});