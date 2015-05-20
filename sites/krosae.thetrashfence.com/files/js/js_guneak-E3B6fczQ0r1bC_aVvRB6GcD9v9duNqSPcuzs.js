(function ($) {

Drupal.behaviors.pathFieldsetSummaries = {
  attach: function (context) {
    $('fieldset.path-form', context).drupalSetSummary(function (context) {
      var path = $('.form-item-path-alias input').val();
      var automatic = $('.form-item-path-pathauto input').attr('checked');

      if (automatic) {
        return Drupal.t('Automatic alias');
      }
      if (path) {
        return Drupal.t('Alias: @alias', { '@alias': path });
      }
      else {
        return Drupal.t('No alias');
      }
    });
  }
};

})(jQuery);
;
(function ($) {

Drupal.behaviors.fileFieldsetSummaries = {
  attach: function (context) {
    $('fieldset.file-form-destination', context).drupalSetSummary(function (context) {
      var scheme = $('.form-item-scheme input:checked', context).parent().text();
      return Drupal.t('Destination: @scheme', { '@scheme': scheme });
    });
    $('fieldset.file-form-user', context).drupalSetSummary(function (context) {
      var name = $('.form-item-name input', context).val() || Drupal.settings.anonymous;
      return Drupal.t('Associated with @name', { '@name': name });
    });
  }
};

})(jQuery);
;
