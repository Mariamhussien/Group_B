<?php
function description_meta_box () {
        add_meta_box (
                        'description_meta',
                        __('', ''),
                        'description_meta_fields',
                        'c95-hospital',
                        'side',
                        'core'
                );
    }

    function description_meta_fields(){
    	
    }
add_action ('add_meta_boxes', 'description_meta_box');