(function toggleButton($) {
  $('.menu-trigger').click(function() {
    $(this).toggleClass('active');
    $('.menu-contents').slideToggle('normal');
  });
})(jQuery);
