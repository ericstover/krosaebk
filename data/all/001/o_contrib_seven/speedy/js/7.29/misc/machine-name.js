(function(e){Drupal.behaviors.machineName={attach:function(t,n){var r=this;e.each(n.machineName,function(n,i){var s=e(n,t).addClass("machine-name-source"),o=e(i.target,t).addClass("machine-name-target"),u=e(i.suffix,t),a=o.closest(".form-item");if(!s.length||!o.length||!u.length||!a.length)return;if(o.hasClass("error"))return;i.maxlength=o.attr("maxlength"),a.hide();if(o.is(":disabled")||o.val()!="")var f=o.val();else var f=r.transliterate(s.val(),i);var l=e('<span class="machine-name-value">'+i.field_prefix+Drupal.checkPlain(f)+i.field_suffix+"</span>");u.empty(),i.label&&u.append(" ").append('<span class="machine-name-label">'+i.label+":</span>"),u.append(" ").append(l);if(o.is(":disabled"))return;var c=e('<span class="admin-link"><a href="#">'+Drupal.t("Edit")+"</a></span>").click(function(){return a.show(),o.focus(),u.hide(),s.unbind(".machineName"),!1});u.append(" ").append(c),o.val()==""&&(s.bind("keyup.machineName change.machineName input.machineName",function(){f=r.transliterate(e(this).val(),i),f!=""?(f!=i.replace&&(o.val(f),l.html(i.field_prefix+Drupal.checkPlain(f)+i.field_suffix)),u.show()):(u.hide(),o.val(f),l.empty())}),s.keyup())})},transliterate:function(e,t){var n=new RegExp(t.replace_pattern,"g");return e.toLowerCase().replace(n,t.replace).substr(0,t.maxlength)}}})(jQuery);