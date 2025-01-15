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
            $banner_alt_metadata = true;
            include("includes/global/_banner-alt.php");
            ?>

            <div class="container">
                <div class="row mt-5 mt-sm-7">
                    <div class="col-12 col-lg-8 order-2 order-lg-1">

                        <?php echo $content ?>

                        <?php include("includes/global/_content-footer.php"); ?>

                    </div>
                    <div class="col-12 col-lg-3 offset-lg-1 order-1 order-lg-2">

                        <?php include("includes/global/_event-details.php"); ?>

                    </div>
                </div>
            </div>

            <section class="ntg-related-events bg-light py-5 py-sm-7">
                <div class="container">
                    <div class="section-header">
                        <h2>More events</h2>
                        <a class="link-border" href="#">View all news<i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 gy-4">
                        <div class="col">
                            <div class="card">
                                <img src="assets/images/107399-56.jpg" class="card-img-top" alt="Placeholder image" width="378" height="180">
                                <div class="card-body">
                                    <span class="card-metadata">Crime, Darwin, Safety</span>
                                    <h3 class="card-title">St Johns weeks</h3>
                                    <p class="card-text">
                                        This is a short description of what this highlight card is
                                        highlighting. It should be two sentences maximum.
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <span class="card-metadata">24 January 2024</span>
                                    <a href="#" class="stretched-link"><i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="assets/images/110856-56.jpg" class="card-img-top" alt="Placeholder image" width="378" height="180">
                                <div class="card-body">
                                    <span class="card-metadata">Crime, Darwin, Safety</span>
                                    <h3 class="card-title">St Johns weeks</h3>
                                    <p class="card-text">
                                        This is a short description of what this highlight card is
                                        highlighting. It should be two sentences maximum.
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <span class="card-metadata">24 January 2024</span>
                                    <a href="#" class="stretched-link"><i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="assets/images/110916-56.jpg" class="card-img-top" alt="Placeholder image" width="378" height="180">
                                <div class="card-body">
                                    <span class="card-metadata">Crime, Darwin, Safety</span>
                                    <h3 class="card-title">St Johns weeks</h3>
                                    <p class="card-text">
                                        This is a short description of what this highlight card is
                                        highlighting. It should be two sentences maximum.
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <span class="card-metadata">24 January 2024</span>
                                    <a href="#" class="stretched-link"><i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <?php
        include("includes/global/_back-to-top.php");
        include("includes/global/_footer.php");
        ?>

    </div>
</body>

<?php include("includes/_script.php"); ?>

</html>