$sidebar_widget = new Custom_theme_widget();
add_action('widgets_init', array($sidebar_widget, 'reg_sidebar_widget'));

function enqueue_js(){
  wp_enqueue_script('widget-js',get_template_directory_uri().'widget.js', array('jquery'),'1.0', true);
}
add_action('wp_enqueue_scripts', 'enqueue_js');
