<?php
/**
 * Simple templating function
 * @param $file     - Path to PHP file that acts as a template
 * @param $args     - Associative array of variable to pass to the template file
 * @return $string  - Output of the template file, likely HTML
*/

function template($file, $args){

    // ensure file exists
    if (!file_exists($file)) {
        return 'Template doen\'st exists';
    }

    // Make values int the associative array easier to access by extracting them
    if( is_array($args) ){
        extract($args);
    }

    // buffer the output (including the file is "output")
    ob_start();
    require $file;
    return ob_get_clean();

}