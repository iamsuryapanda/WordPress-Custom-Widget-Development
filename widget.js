jQuery(document).ready(function () {

      //console.log("hellooo");
    
    jQuery('.js_custom_upload_mediaa').live("click", function(event){ event.stopPropagation();
      event.stopImmediatePropagation();
      var _custom_media = true;
      var  _orig_send_attachment = wp.media.editor.send.attachment;  
      //  alert("hello");
      var button_id = jQuery(this).attr('id');
      wp.media.editor.send.attachment = function (props, attachment) {
        if (_custom_media) {
          console.log('id'+button_id);
          jQuery('.' + button_id + '_img').attr('src', attachment.url);
          jQuery('.widefatwidget-creative_image_widget-4-image_uri_url').val(attachment.url).trigger('change');
          
        } else {
          return _orig_send_attachment.apply(jQuery('#' + button_id), [props, attachment]);
        }
      }
      wp.media.editor.open(jQuery('#' + button_id));
      return false;
    });
    jQuery('.js_custom_upload_media2').live("click", function(event){ event.stopPropagation();
      event.stopImmediatePropagation();
      var _custom_media = true;
      var  _orig_send_attachment = wp.media.editor.send.attachment;  
      //  alert("hello");
      var button_id = jQuery(this).attr('id');
      wp.media.editor.send.attachment = function (props, attachment) {
        if (_custom_media) {
          console.log('id'+button_id);
          jQuery('.' + button_id + '_img').attr('src', attachment.url);
          jQuery('.widefatwidget-creative_image_widget-4-image_sig_url').val(attachment.url).trigger('change');
          
        } else {
          return _orig_send_attachment.apply(jQuery('#' + button_id), [props, attachment]);
        }
      }
      wp.media.editor.open(jQuery('#' + button_id));
      return false;
    });  
});
