jQuery(function($){

  $(document).ready(function() {

    $('td.block').append('<i class="fa fa-cog fa-lg block-settings"></i>');

    var block_settings = {}

    $('.block-settings').click(function() {
      $('.block-settings.active').removeClass('fa-spin').removeClass('active');
      if($(this).parent('.block-single-setting').length) {
        block_settings['theme'] = $(this).parent().attr('data-theme');
        block_settings['block_id'] = $(this).parent().attr('data-id');
      }
      else {
        block_settings['theme'] = $(this).parent().next().find('input[type="hidden"]').attr('value');
        block_settings['block_id'] = $(this).parent().next().find('input[type="hidden"]').attr('name').replace('blocks[', '').replace('][theme]', '');
      }
      // Open form and load block settings
      $("#block-settings").dialog( "open" );
      // Clear all settings
      $('#block-settings .input-setting').val('');
      // Load block settings to form
      var settings = Drupal.settings.nikadevs_cms.block_settings;
      if(typeof(Drupal.settings.nikadevs_cms.block_settings[block_settings['block_id']]) != 'undefined') {
        for(setting in settings[block_settings['block_id']]) {
          $('#block-settings [name="' + setting + '"]').val(settings[block_settings['block_id']][setting]);
        }
      }
      $(this).addClass('active');
      return false;
    });

    $("#block-settings").dialog({
      autoOpen: false,
      width: 700,
      modal: true,
      buttons: {
        "Save": function() {
          // Save settings from Form to variable
          $('#block-settings .input-setting').each(function() {
            block_settings[$(this).attr('name')] = $(this).val();
          });
          $('.block-settings.active').addClass('fa-spin');
          // Save block settings
          $.getJSON(Drupal.settings.basePath + '?q=nikadevs_cms/block_settings/update', {'block_settings' : block_settings}, function(settings) {
            // Update global settings
            Drupal.settings.nikadevs_cms.block_settings = settings;
            // Show user what's happened
            $('.block-settings.active').removeClass('fa-spin active').after('<span class = "saving-info btn btn-xs btn-success">Saved.</span>');
            // Hide notice message
            setTimeout(function() {
              $('.saving-info').animate({opacity: 0}, 500, function() {
                $(this).remove();
              });
            }, 1000);
          });
          $(this).dialog( "close" );
        },
        Cancel: function() {
          $(this).dialog( "close" );
        }
      },
    });

  }); // end doc ready 

}); // end no conflict
;
(function ($) {

Drupal.toolbar = Drupal.toolbar || {};

/**
 * Attach toggling behavior and notify the overlay of the toolbar.
 */
Drupal.behaviors.toolbar = {
  attach: function(context) {

    // Set the initial state of the toolbar.
    $('#toolbar', context).once('toolbar', Drupal.toolbar.init);

    // Toggling toolbar drawer.
    $('#toolbar a.toggle', context).once('toolbar-toggle').click(function(e) {
      Drupal.toolbar.toggle();
      // Allow resize event handlers to recalculate sizes/positions.
      $(window).triggerHandler('resize');
      return false;
    });
  }
};

/**
 * Retrieve last saved cookie settings and set up the initial toolbar state.
 */
Drupal.toolbar.init = function() {
  // Retrieve the collapsed status from a stored cookie.
  var collapsed = $.cookie('Drupal.toolbar.collapsed');

  // Expand or collapse the toolbar based on the cookie value.
  if (collapsed == 1) {
    Drupal.toolbar.collapse();
  }
  else {
    Drupal.toolbar.expand();
  }
};

/**
 * Collapse the toolbar.
 */
Drupal.toolbar.collapse = function() {
  var toggle_text = Drupal.t('Show shortcuts');
  $('#toolbar div.toolbar-drawer').addClass('collapsed');
  $('#toolbar a.toggle')
    .removeClass('toggle-active')
    .attr('title',  toggle_text)
    .html(toggle_text);
  $('body').removeClass('toolbar-drawer').css('paddingTop', Drupal.toolbar.height());
  $.cookie(
    'Drupal.toolbar.collapsed',
    1,
    {
      path: Drupal.settings.basePath,
      // The cookie should "never" expire.
      expires: 36500
    }
  );
};

/**
 * Expand the toolbar.
 */
Drupal.toolbar.expand = function() {
  var toggle_text = Drupal.t('Hide shortcuts');
  $('#toolbar div.toolbar-drawer').removeClass('collapsed');
  $('#toolbar a.toggle')
    .addClass('toggle-active')
    .attr('title',  toggle_text)
    .html(toggle_text);
  $('body').addClass('toolbar-drawer').css('paddingTop', Drupal.toolbar.height());
  $.cookie(
    'Drupal.toolbar.collapsed',
    0,
    {
      path: Drupal.settings.basePath,
      // The cookie should "never" expire.
      expires: 36500
    }
  );
};

/**
 * Toggle the toolbar.
 */
Drupal.toolbar.toggle = function() {
  if ($('#toolbar div.toolbar-drawer').hasClass('collapsed')) {
    Drupal.toolbar.expand();
  }
  else {
    Drupal.toolbar.collapse();
  }
};

Drupal.toolbar.height = function() {
  var $toolbar = $('#toolbar');
  var height = $toolbar.outerHeight();
  // In modern browsers (including IE9), when box-shadow is defined, use the
  // normal height.
  var cssBoxShadowValue = $toolbar.css('box-shadow');
  var boxShadow = (typeof cssBoxShadowValue !== 'undefined' && cssBoxShadowValue !== 'none');
  // In IE8 and below, we use the shadow filter to apply box-shadow styles to
  // the toolbar. It adds some extra height that we need to remove.
  if (!boxShadow && /DXImageTransform\.Microsoft\.Shadow/.test($toolbar.css('filter'))) {
    height -= $toolbar[0].filters.item("DXImageTransform.Microsoft.Shadow").strength;
  }
  return height;
};

})(jQuery);
;
