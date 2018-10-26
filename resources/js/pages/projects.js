$(document).ready(function() {
  $('.JSproject').on('mouseenter', function(e) {
    $(this).addClass('border-dark');
    $(this).find('.JSimage').first().css('opacity', '0.5');
    $(this).find('.JSoverlay').first().removeClass('invisible');
  });
  $('.JSproject').on('mouseleave', function(e) {
    $(this).removeClass('border-dark');
    $(this).find('.JSimage').first().css('opacity', '1');
    $(this).find('.JSoverlay').first().addClass('invisible');
  });
});

