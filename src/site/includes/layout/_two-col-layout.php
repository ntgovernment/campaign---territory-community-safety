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
            <div class="container">
                <div class="row gx-lg-7">
                    <div class="col-12 col-lg-6">
                        <div class="page-layout__left">
                            <div class="page-layout__content">
                                <?php include("includes/global/_breadcrumb.php"); ?>
                                <h1><?php echo $page ?></h1>

                                <div class="pe-lg-5">
                                    <p><strong>If your situation is an emergency call </strong><a href="tel:000"><strong>000</strong></a></p>
                                    <table id="table85819" class="table table-striped">
                                        <thead class="table-light">
                                            <tr>
                                                <th id="table85819r1c1" class="w-50">
                                                    Important numbers
                                                </th>
                                                <th id="table85819r1c2" class="w-50">
                                                    Contact
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-group-divider">
                                            <tr>
                                                <td headers="table85819r1c1">
                                                    Emergencies
                                                </td>
                                                <td headers="table85819r1c2"><a href="tel:000">000</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td headers="table85819r1c1">
                                                    Police assistance
                                                </td>
                                                <td headers="table85819r1c2"><a href="tel:131444">131 444</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td headers="table85819r1c1">
                                                    NT Emergency Services assistance
                                                </td>
                                                <td headers="table85819r1c2"><a href="tel:132500">132 500</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td headers="table85819r1c1">
                                                    Fire assistance
                                                </td>
                                                <td headers="table85819r1c2"><a href="tel:0889993473">08 8999 3473</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td headers="table85819r1c1">
                                                    Crime Stoppers (to report suspicious behaviour)
                                                </td>
                                                <td headers="table85819r1c2"><a href="tel:1800333000">1800 333 000</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td headers="table85819r1c1">
                                                    Victims of Crime NT
                                                </td>
                                                <td headers="table85819r1c2"><a href="tel:1800672242">1800 672 242</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="page-layout__right">
                            <div class="page-layout__content">
                                <form>
                                    <div class="go-back">
                                        <i class="fa-sharp fa-solid fa-arrow-left" aria-hidden="true"></i>
                                        <input type="submit" name="form_email_1188816_previous_page" value="Go back" class="sq-form-submit" id="form_email_1188816_previous_page">
                                    </div>

                                    <div class="mt-5">
                                        <?php echo $content ?>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <section class="ntg-footer-banner">
                <div class="container">
                    <div class="ntg-footer-banner__wrapper">
                        <div class="ntg-footer-banner__main">
                            <img class="img-fluid" src="assets/images/icon-lock.svg" alt="" role="presentation" width="111" height="121">
                            <div class="ntg-footer-banner__text">
                                <h2>If you see something, say something.</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                            </div>
                        </div>
                        <a href="#" class="btn btn-primary btn-arrow-right">Find out more</a>
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