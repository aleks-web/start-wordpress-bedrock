<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

define('Carbon_Fields\URL', home_url('/vendor/htmlburger/carbon-fields'));
\Carbon_Fields\Carbon_Fields::boot();

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
    Container::make( 'theme_options', __( 'Theme Options', 'crb' ) )
        ->add_fields( array(
            Field::make( 'text', 'crb_text', 'Text Field' ),
        ) );
}