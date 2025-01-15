<?php
ob_start();
include('includes/content/_event-item.php');
$content = ob_get_clean();

ob_start();
include('includes/layout/_events-inner.php');
$full_html = ob_get_clean();

echo $full_html;