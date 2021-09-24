$('.owl-carousel').owlCarousel({
  loop: false,
  margin: 0,
  nav: true,
  autoWidth: true,
  mouseDrag: true,
  dotsContainer: '#carousel-custom-dots',
  
  responsive:{
      0:{
          items: 1,
          margin: 20
      },

      540:{
          items: 1,
          margin: 50
      },

      1380: {
        items: 6,
        margin: 75,
        autoWidth: true
      },
      }
  }
)

