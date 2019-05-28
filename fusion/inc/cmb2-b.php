<?php
//Service section start

function service() {

$prefix = 'service';
$cmb = new_cmb2_box( array(
'id' => $prefix . 'service_info',
'title' => __( 'Service_ Info', 'fusion' ),
'object_types' => array( 'service' ),
'context' => 'normal',
'priority' => 'default',
) );


$cmb->add_field( array(
'name' => __( 'Icon', 'fusion' ),
'id' => 'icon',
'type' => 'text',
) );
}
add_action( 'cmb2_init', 'service' );
//Service section End

//Team section start

function team_membar() {

$prefix = 'team_membar';
    $cmb = new_cmb2_box( array(
    'id' => $prefix . 'team_info',
    'title' => __( 'Team Info', 'fusion' ),
    'object_types' => array( 'team_membar' ),
    'context' => 'normal',
    'priority' => 'default',
    ) );
    
    $cmb->add_field( array(
		'name' => esc_html__( 'Team Member Photo ', 'fusion' ),
		'desc' => esc_html__( 'Upload an image or enter a URL.', 'fusion' ),
		'id'   => 'image',
		'type' => 'file',
	) );
    
    $cmb->add_field( array(
    'name' => __( 'Designation', 'fusion' ),
    'id' => 'Designation_name',
    'type' => 'text',
    ) );


    $cmb->add_field( array(
        'name' => __( 'Facebook URL', 'fusion' ),
        'id'   => 'wiki_test_facebookurl',
        'type' => 'text_url',
        // 'protocols' => array( 'http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet' ), // Array of allowed protocols
    ) );

    $cmb->add_field( array(
        'name' => __( 'Twitter URL', 'fusion' ),
        'id'   => 'wiki_test_twitterurl',
        'type' => 'text_url',
        // 'protocols' => array( 'http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet' ), // Array of allowed protocols
    ) );

    $cmb->add_field( array(
        'name' => __( 'Instagram URL', 'fusion' ),
        'id'   => 'wiki_test_instagramurl',
        'type' => 'text_url',
        // 'protocols' => array( 'http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet' ), // Array of allowed protocols
    ) );
}
add_action( 'cmb2_init', 'team_membar' );
//Team section End

//Pricing Section Start

function pricing() {

$prefix = 'pricing';
    $cmb = new_cmb2_box( array(
    'id' => $prefix . 'pricing_info',
    'title' => __( 'pricing Info', 'fusion' ),
    'object_types' => array( 'pricing' ),
    'context' => 'normal',
    'priority' => 'default',
    ) );
    
    $cmb->add_field( array(
    'name' => __( 'Icon', 'fusion' ),
    'id' => 'icon',
    'type' => 'text',
    ) );
   
    $cmb->add_field( array(
    'name' => __( 'Amount', 'fusion' ),
    'id' => 'amount',
    'type' => 'text',
    ) );
    
    $cmb->add_field( array(
    'name' => __( 'Day/Month/Year', 'fusion' ),
    'id' => 'year',
    'type' => 'text',
    ) );
    
    $cmb->add_field( array(
    'name' => __( 'Button Name', 'fusion' ),
    'id' => 'Button_name',
    'type' => 'text',
    ) );
    $cmb->add_field( array(
    'name' => __( 'Button Url', 'fusion' ),
    'id' => 'Button_url',
    'type' => 'text_url',
    ) );
}
add_action( 'cmb2_init', 'pricing' );
//Pricing Section End



//Testimonial Section Start
function testimonial() {

$prefix = 'testimonial';
    $cmb = new_cmb2_box( array(
    'id' => $prefix . 'testimonial_info',
    'title' => __( 'Testimonial Info', 'fusion' ),
    'object_types' => array( 'testimonial' ),
    'context' => 'normal',
    'priority' => 'default',
    ) );
    
    
    $cmb->add_field( array(
		'name' => esc_html__( 'Client Photo ', 'fusion' ),
		'desc' => esc_html__( 'Upload an image or enter a URL.', 'fusion' ),
		'id'   => 'image',
		'type' => 'file',
	) );
    
    $cmb->add_field( array(
    'name' => __( 'Client Designation', 'fusion' ),
    'id' => 'client_designation',
    'type' => 'text',
    ) );


}
add_action( 'cmb2_init', 'testimonial' );
//Testimonial Section End
