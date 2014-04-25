jQuery(document).ready(function() {
    jQuery(".frame-top").each(function(key, value) {
        jQuery(this).height(jQuery(this).children().first().height());
    });
})