<section class="ntg-banner ntg-banner--alt">
    <div class="ratio ratio-16x9">
        <div class="ntg-banner__background">
            <img src="assets/images/107399-56.jpg" alt="Placeholder banner">
        </div>
        <div class="ntg-banner__content">
            <div class="container">
                <div class="ntg-banner__text">

                    <?php
                    if (isset($banner_alt_metadata)) {
                        echo '<p class="ntg-banner__metadata">Crime, Darwin, Safety</p>';
                    }
                    ?>

                    <h1><?php echo $page ?></h1>
                </div>
            </div>
        </div>
    </div>
</section>