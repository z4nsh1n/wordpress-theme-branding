jQuery(document).ready(function($) {
	$(document).on("click", ".upload_image_button", function() {

		jQuery.data(document.body, 'prevElement', $(this).prev());

		window.send_to_editor = function(html) {
			var imgurl = jQuery(html).attr('src');
			var inputText = jQuery.data(document.body, 'prevElement');

			if(inputText != undefined && inputText != '')
				{
					inputText.val(imgurl);
				}

				tb_remove();
		};

			//tb_show('', 'media-upload.php?type=image&TB_iframe=true');
		var file_frame = wp.media.frames.file_frame = wp.media({
			frame: 'post',
			state: 'insert',
			multiple: false
		});
		file_frame.on('insert', function(e,b){
            /*
            var image_input = $("input").filter(function(){
                return this.id.match(/\d+-image_url/);
            })[0];
            */
            var image_input = $("[id$='image_url']");
            var image_data = file_frame.state().get( 'selection' ).first().toJSON();

            for ( var image_property in image_data ) {
                console.log( image_property + ': ' + image_data[ image_property ] );
                    }
            $(image_input).val(image_data.url);
            $(".icon_preview").attr('src', image_data.url);

        });
		file_frame.open();
});
});
