<!DOCTYPE html>
<html lang="en">

<?php include("includes/_head.php"); ?>

<body>
    <div id="wrapper">

        <?php
        include("includes/global/_skip-link.php");
        include("includes/global/_mmenu.php");
        include("includes/global/_search-global.php");
        include("includes/global/_header.php");
        ?>

        <main id="content">
            <?php
            include("includes/global/_breadcrumb.php");
            include("includes/global/_banner-alt.php");
            ?>

            <div class="mt-3 mt-sm-5">
                <?php echo $content ?>
            </div>

            <div class="container">
                <?php include("includes/global/_content-footer.php"); ?>
            </div>
        </main>

        <?php
        include("includes/global/_back-to-top.php");
        include("includes/global/_footer.php");
        ?>

    </div>
</body>

<?php include("includes/_script.php"); ?>

</html>