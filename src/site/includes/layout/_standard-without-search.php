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
            include("includes/global/_banner-button.php");
            ?>

            <div class="container">
                <div class="row mt-3 mt-sm-5">
                    <div class="col-12 col-lg-8 order-2 order-lg-1">

                        <?php
                        if (!isset($disable_in_page_nav)) {
                            include("includes/global/_in-page-nav.php");
                        }
                        ?>

                        <?php echo $content ?>

                        <?php include("includes/global/_content-footer.php"); ?>

                    </div>
                    <div class="col-12 col-lg-3 offset-lg-1 order-1 order-lg-2">

                        <?php include("includes/global/_side-nav.php"); ?>

                    </div>
                </div>
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