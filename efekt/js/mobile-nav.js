(function($) {
  $('#toggle').toggle(
    function() {
      $('#nav').animate({ left: 0 }, 'slow', function() {
        $('#toggle').html('<a class="hamburger hamburger-close"></a>');
      });
    },
    function() {
      $('#nav').animate({ left: -240 }, 'slow', function() {
        $('#toggle').html('<a class="hamburger"></a>');
      });
    }
  );
})(jQuery);
