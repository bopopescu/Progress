(function($) {
  $('.line').css('opacity', '0');
  $(window).scroll(function() {
    $('.line').each(function() {
      var linePos = $(this).offset().top;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if (scroll > linePos - windowHeight + windowHeight / 5) {
        $(this).css({
          opacity: '1',
          width: '100px',
        });
      } else {
        $(this).css({
          width: '2px',
        });
      }
    });

    // $('.slider').slick({
    //   accessibility: true,
    //   autoplay: true,
    //   autoplaySpeed: 3000,
    //   speed: 400,
    // });
  });
  // スライダーアニメーション
  // 画面サイズによる条件分岐　要
  if ($(window).width() > 480) {
    var setElm = $('.slide');
    console.log('aaaa');
  } else {
    var setElm = $('.slide-sp');
    console.log('hhhgh');
  }
  slideSpeed = 3000;

  setElm.each(function() {
    var self = $(this),
      selfWidth = self.innerWidth(),
      findUl = self.find('ul'),
      findLi = findUl.find('li'),
      listWidth = findLi.outerWidth(),
      listCount = findLi.length,
      loopWidth = listWidth * listCount;

    findUl.wrapAll('<div class="loopSliderWrap" />');
    var selfWrap = self.find('.loopSliderWrap');

    if (loopWidth > selfWidth) {
      findUl
        .css({width: loopWidth})
        .clone()
        .appendTo(selfWrap);

      selfWrap.css({width: loopWidth * 2});

      function loopMove() {
        selfWrap.animate(
          {left: '-' + loopWidth + 'px'},
          slideSpeed * listCount,
          'linear',
          function() {
            selfWrap.css({left: '0'});
            loopMove();
          }
        );
      }
      loopMove();
    }
  });
})(jQuery);
