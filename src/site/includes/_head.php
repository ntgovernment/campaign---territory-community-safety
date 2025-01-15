<?php $page = ucfirst(str_ireplace(array('-', '.php'), array(' ', ''), basename($_SERVER['PHP_SELF']))); ?>

<head>
    <meta charset="UTF-8" />
    <title><?php echo $page == 'Index' ? 'Home' : $page; ?> | Territory Community Safety Centre</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- styles -->
    <link rel="stylesheet" href="css/plugins.css" />
    <link rel="stylesheet" href="css/main.css" />
</head>