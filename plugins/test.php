<?php

/*
Plugin Name: Test Plugin
Description: Test
Author: Cristi N
Version: 0.1
*/

// This just echoes the chosen line, we'll position it later.
function test() {
    printf(
        '<p id="test"><span class="screen-reader-text">%s </span><span dir="ltr"%s>%s</span></p>',
        __( 'Test' ),
        'en',
        'hello world'
    );
}

// Now we set that function up to execute when the admin_notices action is called.
add_action( 'admin_notices', 'test' );
