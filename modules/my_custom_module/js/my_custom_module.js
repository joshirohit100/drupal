(function ($, Drupal) {
  Drupal.behaviors.myCustomModule = {
    attach: function (context, settings) {
      $('input.my-custom-input', context).once('myCustomModule').each(function () {
        // Add event listener for input change
        $(this).change(function() {
          alert('Input changed!');
        });
      });
    }
  };
})(jQuery, Drupal);
