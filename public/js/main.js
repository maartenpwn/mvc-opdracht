$('.rotate-button').on('click', function(e) {
  e.preventDefault;

if($('#filter').hasClass('show-front')){
  console.log("if");
    $('#filter').removeClass('show-front').addClass('show-back');
  }

  else {
    console.log("else");
    $('#filter').removeClass('show-back').addClass('show-front');
  }
});
