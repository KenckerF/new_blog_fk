jQuery(document).ready(function($) {

    // upload function
    $('body').on( 'click', '.custom-upload-button', function(e){
        e.preventDefault();
        var upload_button = $(this),
            custom_media_uploader = wp.media({
                title: 'Insert image',
                library : {
                    type : 'image'
                },
                button: {
                    text: 'Use this image'
                },
                multiple: false
            }).on('select', function() {
                var attachment = custom_media_uploader.state().get('selection').first().toJSON();
                upload_button.html('<img src="' + attachment.url + '" width="100%">');
                $('.custom-upload-remove').show().next().val(attachment.url);
            }).open();

    });

    // remove function
    $('body').on('click', '.custom-upload-remove', function(e){
        e.preventDefault();
        var upload_button = $(this);
        upload_button.next().val('');
        upload_button.hide().prev().html('Upload image');
    });

});