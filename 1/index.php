<?php
require_once('functions.php');
$file = __DIR__ . '/templates/row-template.php';

$rows = array(
    array( 'id' => 1, 'name' => 'first row', 'etc' => 'and more...' ),
    array( 'id' => 2, 'name' => 'second row', 'etc' => 'nothing special' ),
);

$output = '';

foreach ( $rows as $row ){
    $output.= template( $file, $row );
}

print $output;