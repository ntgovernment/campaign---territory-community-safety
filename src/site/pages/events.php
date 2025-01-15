<?php
ob_start();
include('includes/content/_events.php');
$content = ob_get_clean();

ob_start();
include('includes/layout/_events.php');
$full_html = ob_get_clean();

echo $full_html;