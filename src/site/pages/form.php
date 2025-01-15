<?php
ob_start();
include('includes/content/_form.php');
$content = ob_get_clean();

ob_start();
$disable_in_page_nav = true;
include('includes/layout/_standard-without-search.php');
$full_html = ob_get_clean();

echo $full_html;
