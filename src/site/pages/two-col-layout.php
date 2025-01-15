<?php

ob_start();
include('includes/content/_two-col-layout.php');
$content = ob_get_clean();

ob_start();
include('includes/layout/_two-col-layout.php');
$full_html = ob_get_clean();

echo $full_html;