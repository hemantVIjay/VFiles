//city carousel
$('#cityCarousel, .expprty').owlCarousel({
  loop:true,
  margin:8,
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
        items: 6
      }
  }
});

$('#cmmpropCarousel, .expcmprty').owlCarousel({
  loop:true,
  margin:8,
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
        items: 5
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

$('#newsCarousel.owl-carousel').owlCarousel({
  loop:true,
  margin:12,
  autoplay: 3000,
  autoplayHoverPause: true,
  nav:true,
  dots: false,
  items: 2,
  responsive:{
    0:{
        items:1
    },
    600:{
        items:2
    },
    1024: {
      items: 2
    },

    1366: {
      items: 2
    }
  }
});
