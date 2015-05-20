(function(e){Drupal.behaviors.color={attach:function(t,n){function b(){Drupal.color.callback(t,n,u,h,d,v)}function w(e,t,n){e=h.RGBToHSL(h.unpack(e)),e[0]+=n[0]-t[0];if(t[1]==0||n[1]==0)e[1]=n[1];else{var r=t[1]/n[1];r>1?e[1]/=r:e[1]=1-(1-e[1])*r}if(t[2]==0||n[2]==0)e[2]=n[2];else{var r=t[2]/n[2];r>1?e[2]/=r:e[2]=1-(1-e[2])*r}return h.pack(h.HSLToRGB(e))}function E(t,n,s,o){var u;e(t).css({backgroundColor:n,color:h.RGBToHSL(h.unpack(n))[2]>.5?"#000":"#fff"});if(e(t).val()&&e(t).val()!=n){e(t).val(n);if(s){r=t.i;for(i=r+1;;++i){if(!l[i-1]||e(l[i-1]).is(".unlocked"))break;u=w(n,p[t.key],p[a[i].key]),E(a[i],u,!1)}for(i=r-1;;--i){if(!l[i]||e(l[i]).is(".unlocked"))break;u=w(n,p[t.key],p[a[i].key]),E(a[i],u,!1)}b()}o||S()}}function S(){e("#edit-scheme",u).each(function(){this.selectedIndex=this.options.length-1})}function x(){var t=this;c&&e(c).unbind("keyup",h.updateValue).unbind("keyup",b).unbind("keyup",S).parent().removeClass("item-selected"),c=this,h.linkTo(function(e){E(t,e,!0,!1)}),h.setColor(this.value),e(c).keyup(h.updateValue).keyup(b).keyup(S).parent().addClass("item-selected")}var r,i,s,o,u=e("#system-theme-settings .color-form",t).once("color");if(u.length==0)return;var a=[],f=[],l=[],c=null;e(u).prepend('<div id="placeholder"></div>').addClass("color-processed");var h=e.farbtastic("#placeholder"),p=n.color.reference;for(r in p)p[r]=h.RGBToHSL(h.unpack(p[r]));var d=[],v=[];for(r in n.gradients){e("#preview").once("color").append('<div id="gradient-'+r+'"></div>');var m=e("#preview #gradient-"+r);d.push(parseInt(m.css("height"),10)/10),v.push(parseInt(m.css("width"),10)/10);for(i=0;i<(n.gradients[r]["direction"]=="vertical"?d[r]:v[r]);++i)m.append('<div class="gradient-line"></div>')}if(navigator.appVersion.match(/MSIE [0-6]\./)){var g=e("#preview #img")[0],y=g.currentStyle.backgroundImage;g.style.backgroundImage="none",g.style.filter="progid:DXImageTransform.Microsoft.AlphaImageLoader(enabled=true, sizingMethod=crop, src='"+y.substring(5,y.length-2)+"')"}e("#edit-scheme",u).change(function(){var t=n.color.schemes,r=this.options[this.selectedIndex].value;if(r!=""&&t[r]){s=t[r];for(o in s)E(e("#edit-palette-"+o),s[o],!1,!0);b()}}),e("#palette input.form-text",u).each(function(){this.key=this.id.substring(13),h.linkTo(function(){}).setColor("#000").linkTo(this);var t=a.length;if(a.length){var n=e('<div class="lock"></div>').toggle(function(){e(this).addClass("unlocked"),e(f[t-1]).attr("class",l[t-2]&&e(l[t-2]).is(":not(.unlocked)")?"hook up":"hook"),e(f[t]).attr("class",l[t]&&e(l[t]).is(":not(.unlocked)")?"hook down":"hook")},function(){e(this).removeClass("unlocked"),e(f[t-1]).attr("class",l[t-2]&&e(l[t-2]).is(":not(.unlocked)")?"hook both":"hook down"),e(f[t]).attr("class",l[t]&&e(l[t]).is(":not(.unlocked)")?"hook both":"hook up")});e(this).after(n),l.push(n)}var r=e('<div class="hook"></div>');e(this).after(r),f.push(r),e(this).parent().find(".lock").click(),this.i=t,a.push(this)}).focus(x),e("#palette label",u),x.call(a[0]),b()}}})(jQuery);