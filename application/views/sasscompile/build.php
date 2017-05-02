<?php
require 'application/views/sasscompile/scss.inc.php';
$formatterName = 'scss_formatter_compressed';
$scss = new scssc();
$scss->setFormatter($formatterName);
$scss->addImportPath(function($path) {
    if (!file_exists('application/views/sass/'.$path)) return null;
    return 'application/views/sass/'.$path;
});
$css = $scss->compile('@import "style.scss"');
file_put_contents('application/views/assets/css/styles.css', $css);
?>
