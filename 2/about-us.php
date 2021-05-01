<?php
require_once('functions.php');
$file = __DIR__.'/templates/page-about-us.php';

$data = array(
    'title' => 'About Us',
    'post' => array(
        'post_title' => 'Lorem Ipsum',
        'post_content' => 'post content about us'
    ) 
);

$output = '';

$output .= template($file, $data);

print $output;