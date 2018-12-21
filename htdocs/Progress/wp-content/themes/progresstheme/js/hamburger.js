(function toggleButton($) {
  $('.menu-trigger').click(function() {
    $(this).toggleClass('active');
    $('.menu-contents').slideToggle('normal');
  });

  $('.question-table tr').click(function() {
    $(this)
      .next()
      .slideToggle('normal');
  });
})(jQuery);
