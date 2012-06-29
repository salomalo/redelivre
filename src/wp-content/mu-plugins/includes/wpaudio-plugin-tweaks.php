<?php

add_action('Campaign-created', function($data) {
    
    if (isset($data->blog_id))
    update_blog_option($data->blog_id, 'wpaudio_options', 'a:15:{s:11:"wpa_version";s:3:"3.1";s:17:"wpa_pref_link_mp3";i:1;s:13:"wpa_tag_audio";i:0;s:19:"wpa_track_permalink";i:0;s:19:"wpa_style_text_font";s:10:"Sans-serif";s:19:"wpa_style_text_size";s:4:"18px";s:21:"wpa_style_text_weight";s:6:"normal";s:29:"wpa_style_text_letter_spacing";s:6:"normal";s:20:"wpa_style_text_color";s:7:"inherit";s:20:"wpa_style_link_color";s:4:"#24f";s:26:"wpa_style_link_hover_color";s:4:"#02f";s:21:"wpa_style_bar_base_bg";s:4:"#eee";s:21:"wpa_style_bar_load_bg";s:4:"#ccc";s:25:"wpa_style_bar_position_bg";s:4:"#46f";s:19:"wpa_style_sub_color";s:4:"#aaa";}');
    
});

add_action('admin_menu', function() {

    remove_submenu_page('options-general.php','wpaudio-mp3-player/wpaudio.php');
    
}, 20);

?>