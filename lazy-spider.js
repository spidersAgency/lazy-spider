(function($) {
  $.fn.lazyInterchange = function() {
    var selectors = this.each(function() {
      if($(this).attr('data-lazy')){
        $(this).attr('data-interchange',$(this).attr('data-lazy'));
        $(this).removeAttr('data-lazy');
        $(this).foundation('interchange', 'reflow');
      }
    });
    return selectors;
  };

  $('img').lazyInterchange();
}(jQuery));
