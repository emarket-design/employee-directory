<?php
if ( ! defined( 'ABSPATH' ) ) {
        exit; // Exit if accessed directly
}

get_header('emdplugins'); 
emd_get_template_part('empd-com', 'no-access');
get_footer('emdplugins');
