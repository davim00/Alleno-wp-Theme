// Bootstrap specific functions and styling
jQuery(document).ready(function() {
    jQuery('.comment-reply-link, .comment-edit-link, a.post-edit-link').addClass('button button-sm button-default');
    jQuery('#submit, button[type=submit], html input[type=button], input[type=reset], input[type=submit]').addClass('button button-default');
    jQuery('#commentform input[type=submit]').removeClass('button-default').addClass('button-standard');
    jQuery('.comment-form-comment').addClass('form-group');
    jQuery('.comment-form-comment > textarea').addClass('form-control');
    jQuery('input[type=submit].wpcf7-submit').removeClass('button-default').addClass('button-standard');
    jQuery('.widget_rss ul').addClass('media-list');
    jQuery('.postform').addClass('form-control');
    jQuery('table').addClass('table');
    jQuery('table#wp-calendar').addClass('table table-striped');
    jQuery('#submit, .tagcloud, button[type=submit], .comment-reply-link, .widget_rss ul, .postform, table#wp-calendar').show("fast");
});
