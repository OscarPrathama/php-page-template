<?php
require_once('functions.php');
$file = __DIR__.'/templates/page-frontpage.php';

$data = array(
    'title' => 'Frontpage',
    'post' => array(
        'post_title' => 'Dolor askimet',
        'post_content' => 'content frontpage'
    ) 
);

$output = '';

$output .= template($file, $data);

print $output;