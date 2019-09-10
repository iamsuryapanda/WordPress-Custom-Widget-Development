<?php
class Custom_widget extends WP_Widget{
   public function __construct() {
        /* Widget settings. */
        $widget_settings = array('classname' => 'image-widget', 'description' => __('Latest Post', 'textdomain'));

        /* Widget control settings. */
        $control_settings = array('id_base' => 'image_widget');
        /* Create Widget */
        parent::__construct('image_widget', __('Test: Custom Widget', 'textdomain'), $widget_settings, $control_settings);
        
    }

    function form($instance) {
        $defaults = array(
            'title'=>'',
            'image_uri'=>'',
            'title2'=>'',
            'des'=>'',
            'image_sig'=>'',
            
        );

        $instance = wp_parse_args((array) $instance, $defaults);

        $form_html ='<p><label for="' . $this->get_field_id('title') . '">Title:</label>
			<input class="widefat" id="' . $this->get_field_id('title') . '" name="' . $this->get_field_name('title') . '" value="' . $instance['title'] . '" />
        </p>
        <p> <label for="'.$this->get_field_id('image_uri').'">Image:</label><br/>
            <img class="'.$this->get_field_id('image_uri').'_img" src="'.$instance['image_uri'].'" style="margin:0;padding:0;max-width:100px;float:left;display:inline-block;" />
            <input type="text" class="widefat'.$this->get_field_id('image_uri').'_url" name="'.$this->get_field_name('image_uri').'" id="'.$this->get_field_id('image_uri').'" value="'.$instance['image_uri'].'" style="margin-top:5px;"/>
            <input type="button"  value="Upload image" class="js_custom_upload_mediaa" id="'.$this->get_field_id('image_uri').'" style="margin-top:5px;"/>
         </p>
         <p><label for="' . $this->get_field_id('title2') . '">Main Title:</label>
			<input class="widefat" id="' . $this->get_field_id('title2') . '" name="' . $this->get_field_name('title2') . '" value="' . $instance['title2'] . '" />
        </p>
        <p><label for="' . $this->get_field_id('des') . '">Description:</label>
			<input class="widefat" id="' . $this->get_field_id('des') . '" name="' . $this->get_field_name('des') . '" value="' . $instance['des'] . '" />
        </p>
        <p> <label for="'.$this->get_field_id('image_sig').'">Signature:</label><br/>
            <img class="'.$this->get_field_id('image_sig').'_img" src="'.$instance['image_sig'].'" style="margin:0;padding:0;max-width:100px;float:left;display:inline-block;" />
            <input type="text" class="widefat'.$this->get_field_id('image_sig').'_url" name="'.$this->get_field_name('image_sig').'" id="'.$this->get_field_id('image_sig').'" value="'.$instance['image_sig'].'" style="margin-top:5px;"/>
            <input type="button"  value="Upload image" class="js_custom_upload_media2" id="'.$this->get_field_id('image_sig').'" style="margin-top:5px;"/>
         </p>';


        print $form_html;
    }

    function update($new_instance, $old_instance) {
        $instance = $old_instance;
        $instance['title'] = strip_tags($new_instance['title']);
        $instance['image_uri'] = strip_tags($new_instance['image_uri']);
        $instance['title2'] = strip_tags($new_instance['title2']);
        $instance['des'] = strip_tags($new_instance['des']);
        $instance['image_sig'] = strip_tags($new_instance['image_sig']);
       
        return $instance;
    }

    function widget($args, $instance) {
        extract($args);

        $title = apply_filters('widget_title', $instance['title']);
        $image_uri = $instance['image_uri'];
        $title2 = apply_filters('widget_title', $instance['title2']);
        $des = apply_filters('widget_title', $instance['des']);
        $image_sig = $instance['image_sig'];

        print $before_widget;
        ob_start();        
        ?>

           //Paste HTML here
        
        <?php
        ob_end_flush();
        print $after_widget;
    }
}
