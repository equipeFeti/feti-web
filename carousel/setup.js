$('.owl-carousel').owlCarousel({
  loop:true,
  margin: 0,
  nav:false,
  responsive:{
      0:{
          items:3,
      },

      320: {
        items: 3
      },
      540:{
          items: 5,
         
      },
      992:{
          items: 8,
        },

      1380: {
        items: 12
      }
      }
  }
)