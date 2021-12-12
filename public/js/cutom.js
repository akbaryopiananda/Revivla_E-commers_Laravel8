window.onload = function() {
    if ( /Android|webOS|iPhone|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
      var slider = document.getElementById('slider');
      if (slider.classList) {
        slider.classList.add('swipe');
        slider.getElementsByTagName('div')[0].classList.add('swipe-wrap');
      } else {
        slider.className += 'swipe';
        slider.getElementsByTagName('div')[0].className += 'swipe-wrap';
      }
      window.mySwipe = Swipe(document.getElementById('slider'));
    }
  }


 $('.minus-btn').on('click', function(e) {
  e.preventDefault();
  var $this = $(this);
  var $input = $this.closest('div').find('input');
  var value = parseInt($input.val());

  if (value > 1) {
    value = value - 1;
  } else {
    value = 0;
  }

  $input.val(value);

});

$('.plus-btn').on('click', function(e) {
  e.preventDefault();
  var $this = $(this);
  var $input = $this.closest('div').find('input');
  var value = parseInt($input.val());

  if (value < 100) {
    value = value + 1;
  } else {
    value =100;
  }

  $input.val(value);
});
