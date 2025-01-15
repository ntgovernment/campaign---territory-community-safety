<?php
ob_start();
include('includes/content/_standard-with-search.php');
$content = ob_get_clean();

ob_start();
include('includes/layout/_standard-with-search.php');
$full_html = ob_get_clean();

echo $full_html;