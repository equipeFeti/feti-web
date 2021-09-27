var feed = new Instafeed({
  accessToken:
    "IGQVJWNTFRaTVJUk9adUxSWmJwSGRheHdfOVJHV3FvOGVWSFFLRjctYS1ZAeUw4S2RxUUVVbEZAqdl8ta2NMOURIMk80akxiZA2VfUFJNSWhub0pqdHRqRXFoaHUxbEdxU3VQc0p2ZATNoUUZAlaUtJUmtFSAZDZD",
  template:
    '<div class="instagram-image"><a target="blank" href="{{link}}"><img title="{{caption}}" src="{{image}}" /></a> </div>',
  after: function () {
    $(document).ready(function () {
      $(".owl-carousel").owlCarousel({
        loop: false,
        margin: 20,
        nav: true,
        mouseDrag: true,
        dotsContainer: "#carousel-custom-dots",
        
        responsive: {
          0: {
            items: 1
          },

          600: {
            items: 3
          }
        }

      });
    });
  },
});
feed.run();