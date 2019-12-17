$('#search_box').on('focus', function () {
  $('.search_box').css('border','1px solid blue');
// $(this).addClass('blue_border');
}).on('blur', function () {
  $('.search_box').css('border', '1px solid darkgray');
});

$('.otherlinks').hover(
  function () {
    $(this).css('text-decoration', 'underline')
  },
  function () {
    $(this).css('text-decoration', 'none')
  }
);

$('.brand_search').hover(
  function () {
    $('.list2').show();
  },
  function () {
    $('.list2').hide();
  })

$(".slider").slick({
  autoplay: true,
  autoplaySpeed: 2000,
  dots: true,
  prevArrow: '<i class="fas fa-chevron-left"></i>',
  nextArrow: '<i class="fas fa-chevron-right"></i>'
});





// $('.skirt').hover(
//   function () {
//     $('.skirt_category').show();
//   },
//   function () {
//     $('.skirt_category').hide();
//   }
// )


