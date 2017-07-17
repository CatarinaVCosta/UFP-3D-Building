$(document.getElementById('slider-range')).slider({
  range: 'min',
  min: 480,
  max: 1380,
  step: 15,
  value: 810,
  animate: 'fast',
  slide: function(e, ui) {

    var hours1 = Math.floor(ui.value / 60);
    var minutes1 = ui.value - (hours1 * 60);

    if (hours1.length == 1) hours1 = '0' + hours1;
    if (minutes1.length == 1) minutes1 = '0' + minutes1;
    if (minutes1 == 0) minutes1 = '00';
    if (hours1 >= 12) {
      if (hours1 == 12) {
        hours1 = hours1;
        minutes1 = minutes1 + ' PM';
      } else {
        hours1 = hours1 - 12;
        minutes1 = minutes1 + ' PM';
      }
    } else {
      hours1 = hours1;
      minutes1 = minutes1 + ' AM';
    }
    if (hours1 == 0) {
      hours1 = 12;
      minutes1 = minutes1;
    }

    $('.slider-time').html(hours1 + ':' + minutes1);
  }

});
