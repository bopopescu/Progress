(function toggleButton($) {
  $('.menu-trigger').click(function() {
    $(this).toggleClass('active');
    $('.menu-contents').slideToggle('normal');
  });

  $('.question-table tr').click(function() {
    $(this).addClass('move');
    $('.move .arrow').toggleClass('fa-rotate-180');
    $(this).removeClass('move');
    $(this)
      .next()
      .slideToggle('slow');
  });
})(jQuery);
