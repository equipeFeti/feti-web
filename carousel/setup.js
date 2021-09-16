$('.owl-carousel').owlCarousel({
  loop: false,
  margin: 0,
  nav: true,
  autoWidth: true,
  dotsContainer: '#carousel-custom-dots',
  
  responsive:{
      0:{
          items:0,
      },

      320: {
        items: 1,
        margin: 100
      },
      540:{
          items: 1,
          margin: 100
          
         
      },
      992:{
          items: 8,
          margin: 100,
        },

      1380: {
        items: 6,
        margin: 75,
        autoWidth: true
      },
      }
  }
)

