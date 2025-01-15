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

            <?php include("includes/global/_breadcrumb.php"); ?>

            <section class="ntg-library-search bg-primary">
                <div class="container">
                    <form action="#">
                        <fieldset class="sq-form-section">
                            <legend class="sq-form-section-title">Let us help you find the right resources for you
                            </legend>
                            <div class="row">
                                <div class="col-auto">
                                    <div class="sq-form-question">
                                        <div class="sq-form-question-answer">
                                            <select class="sq-form-field" name="selectOne" id="selectOne">
                                                <option value="1">Option 1</option>
                                                <option value="2">Option 2</option>
                                                <option value="3">Option 3</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="sq-form-question">
                                        <div class="sq-form-question-answer">
                                            <select class="sq-form-field" name="selectTwo" id="selectTwo">
                                                <option value="1">Option 1</option>
                                                <option value="2">Option 2</option>
                                                <option value="3">Option 3</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="sq-form-control">
                                        <input class="sq-form-submit" type="submit" name="submit" id="submit" value="Search">
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                    <p>Or <a href="#">Search our A-Z library</a></p>
                </div>
            </section>

            <?php include("includes/global/_banner.php"); ?>

            <div class="container">
                <div class="row mt-3 mt-sm-5">
                    <div class="col-12 col-lg-8 order-2 order-lg-1">

                        <?php include("includes/global/_in-page-nav.php"); ?>

                        <?php echo $content ?>

                        <section class="ntg-side-misc ntg-side-misc--footer">
                            <?php
                            include("includes/global/_side-docs.php");
                            include("includes/global/_side-socials.php");
                            ?>
                        </section>

                        <?php include("includes/global/_content-footer.php"); ?>

                    </div>
                    <div class="col-12 col-lg-3 offset-lg-1 order-1 order-lg-2">

                        <?php include("includes/global/_side-nav.php"); ?>

                        <aside class="ntg-side-misc">
                            <?php
                            include("includes/global/_side-docs.php");
                            include("includes/global/_side-socials.php");
                            ?>
                        </aside>

                    </div>
                </div>
            </div>

            <section class="ntg-related-pages bg-light">
                <div class="container">
                    <h2>Find out more</h2>
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 gy-4">
                        <div class="col">
                            <div class="card card--border">
                                <div class="card-body">
                                    <h3 class="card-title">Neighborhood Watch Programs</h3>
                                    <p class="card-text">
                                        This is a short description of what this highlight card is
                                        highlighting. It should be two sentences maximum.
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <a class="stretched-link" href="#"><i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card card--border">
                                <div class="card-body">
                                    <h3 class="card-title">Burglary Prevention Tips</h3>
                                    <p class="card-text">
                                        This is a short description of what this highlight card is
                                        highlighting. It should be two sentences maximum.
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <a class="stretched-link" href="#"><i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card card--border">
                                <div class="card-body">
                                    <h3 class="card-title">Crime Hotspot Identification</h3>
                                    <p class="card-text">
                                        This is a short description of what this highlight card is
                                        highlighting. It should be two sentences maximum.
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <a class="stretched-link" href="#"><i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
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