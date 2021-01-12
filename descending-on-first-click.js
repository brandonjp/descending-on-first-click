(function($) {
  'use strict';

  $(window).load(function() {

    jQuery('th.sortable > a').each(function(i,l){ 
      let $l = jQuery(l);
      let orig = $l.attr('href'); 
      let href = orig.replace('order=asc','order=desc'); 
      $l.attr('href',href); 
      $l.parent('th').removeClass('desc').addClass('asc');
    });

  });
})(jQuery);