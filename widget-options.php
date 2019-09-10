<?php
class Custom_theme_widget {
    public function __construct() {
        require_once $this->path().'/custom/Custom_widget.php';
        register_widget('Custom_widget');        
    }
    private function path() {
        $dir = trailingslashit(dirname(__FILE__));
        return $dir;
    }  
    public function reg_sidebar_widget(){
            register_sidebar(array(
                'name' => __('Widget Name', 'textdomain'),
                'id' => 'widget-id',
                'description' => __('Widget Description', 'textdomain'),
                'before_widget' => '',
                'after_widget' => '',
                'before_title' => '',
                'after_title' => '',
            ));
    }
}
