<?php
ob_start();
session_start();
$prtsavcont = "";
$tempcont = "";

$pgenme = "gallery";
$pgenmestr = "Gallery - Floris Fleur Flowers Trading LLC ";

include("header.php");
?>

<div class="gallery-fullwidth pagepadding">
    <div class="container">
        <div class="grd-portfolio-shortcode grd-full-width clearfix">

            <div class="nav-section">
                <ul class="nav-filter">
                    <li><a href="#" data-filter="*">View All</a></li>
                    <li><a href="#" class="active" data-filter=".vwbouquets">BOUQUETS</a></li>
                    <li><a href="#" data-filter=".vwbaskets">BASKETS</a></li>
                    <li><a href="#" data-filter=".vwboxflowers">BOX FLOWERS</a></li>
                </ul>
            </div>

            <div class="grd_portfolio_grid filterlist row">

                <!-- BOUQUETS -->
                <?php
                for ($i = 1; $i <= 37; $i++) {
                    $siV = ($i < 10) ? "0" . $i : $i;
                    $waLink = "https://wa.me/971523641716?text=Hi%20I%27m%20interested%20in%20Bouquet%20" . $siV;
                ?>
                <div class="portfolio-item col-sm-6 col-xs-12 col-md-3 vwbouquets">
                    <div class="content-item flower-card">
                        <div class="entry-header">
                            <div class="entry-thumbnail flower-image-wrap">
                                <img alt="Bouquets <?= $siV ?>" src="images/products/bouquets/bouquets_<?= $siV ?>.jpg">


                            </div>
                        </div>

                        <div class="entry-content">
                            <div class="entry-title text-center">
                                <h3 class="title">BASKETS <?= $siV ?></h3>
                                <div class="entry-meta">
                                    <span class="category">Baskets</span>
                                </div>
                                <div style="margin-top: 5px;">
                                    <a href="<?= $waLink ?>" target="_blank" class="btn-whatsapp"><i class="fa fa-whatsapp"></i> WhatsApp</a>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <?php } ?>

                <!-- BASKETS -->
                <?php
                for ($i = 1; $i <= 17; $i++) {
                    $siV = ($i < 10) ? "0" . $i : $i;
                    $waLink = "https://wa.me/971523641716?text=Hi%20I%27m%20interested%20in%20Basket%20" . $siV;
                ?>
                <div class="portfolio-item col-sm-6 col-xs-12 col-md-3 vwbaskets">
                    <div class="content-item flower-card">
                        <div class="entry-header">
                            <div class="entry-thumbnail flower-image-wrap">
                                <img alt="Baskets <?= $siV ?>" src="images/products/baskets/baskets_<?= $siV ?>.jpg">


                            </div>
                        </div>

                        <div class="entry-content">
                            <div class="entry-title text-center">
                                <h3 class="title">BASKETS <?= $siV ?></h3>
                                <div class="entry-meta">
                                    <span class="category">Baskets</span>
                                </div>
                                <div style="margin-top: 5px;">
                                    <a href="<?= $waLink ?>" target="_blank" class="btn-whatsapp"><i class="fa fa-whatsapp"></i> WhatsApp</a>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <?php } ?>

                <!-- BOX FLOWERS -->
                <?php
                for ($i = 1; $i <= 12; $i++) {
                    $siV = ($i < 10) ? "0" . $i : $i;
                    $waLink = "https://wa.me/971523641716?text=Hi%20I%27m%20interested%20in%20Box%20Flower%20" . $siV;
                ?>
                <div class="portfolio-item col-sm-6 col-xs-12 col-md-3 vwboxflowers">
                    <div class="content-item flower-card">
                        <div class="entry-header">
                            <div class="entry-thumbnail flower-image-wrap">
                                <img alt="Box Flowers <?= $siV ?>" src="images/products/boxflowers/boxflowers_<?= $siV ?>.jpg">


                            </div>
                        </div>

                        <div class="entry-content">
                            <div class="entry-title text-center">
                                <h3 class="title">BOX FLOWERS <?= $siV ?></h3>
                                <div class="entry-meta">
                                    <span class="category">Box Flowers</span>
                                </div>
                                <div style="margin-top: 5px;">
                                    <a href="<?= $waLink ?>" target="_blank" class="btn-whatsapp"><i class="fa fa-whatsapp"></i> WhatsApp</a>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <?php } ?>

            </div>
        </div>
    </div>
</div>

<?php
include("footer.php");
?><?php
ob_start();
session_start();
$prtsavcont = "";
$tempcont = "";

$pgenme = "gallery";
$pgenmestr = "Gallery - Floris Fleur Flowers Trading LLC ";

include("header.php");
?>

<div class="gallery-fullwidth pagepadding">
    <div class="container">
        <div class="grd-portfolio-shortcode grd-full-width clearfix">

            <div class="nav-section">
                <ul class="nav-filter">
                    <li><a href="#" data-filter="*">View All</a></li>
                    <li><a href="#" class="active" data-filter=".vwbouquets">BOUQUETS</a></li>
                    <li><a href="#" data-filter=".vwbaskets">BASKETS</a></li>
                    <li><a href="#" data-filter=".vwboxflowers">BOX FLOWERS</a></li>
                </ul>
            </div>

            <div class="grd_portfolio_grid filterlist row">

                <!-- BOUQUETS -->
                <?php
                for ($i = 1; $i <= 37; $i++) {
                    $siV = ($i < 10) ? "0" . $i : $i;
                    $waLink = "https://wa.me/971523641716?text=Hi%20I%27m%20interested%20in%20Bouquet%20" . $siV;
                ?>
                <div class="portfolio-item col-sm-6 col-xs-12 col-md-3 vwbouquets">
                    <div class="content-item flower-card">
                        <div class="entry-header">
                            <div class="entry-thumbnail flower-image-wrap">
                                <img alt="Bouquets <?= $siV ?>" src="images/products/bouquets/bouquets_<?= $siV ?>.jpg">


                            </div>
                        </div>

                        <div class="entry-content">
                            <div class="entry-title text-center">
                                <h3 class="title">BOX FLOWERS <?= $siV ?></h3>
                                <div class="entry-meta">
                                    <span class="category">Box Flowers</span>
                                </div>
                                <div style="margin-top: 5px;">
                                    <a href="<?= $waLink ?>" target="_blank" class="btn-whatsapp"><i class="fa fa-whatsapp"></i> WhatsApp</a>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <?php } ?>

                <!-- BASKETS -->
                <?php
                for ($i = 1; $i <= 17; $i++) {
                    $siV = ($i < 10) ? "0" . $i : $i;
                    $waLink = "https://wa.me/971523641716?text=Hi%20I%27m%20interested%20in%20Basket%20" . $siV;
                ?>
                <div class="portfolio-item col-sm-6 col-xs-12 col-md-3 vwbaskets">
                    <div class="content-item flower-card">
                        <div class="entry-header">
                            <div class="entry-thumbnail flower-image-wrap">
                                <img alt="Baskets <?= $siV ?>" src="images/products/baskets/baskets_<?= $siV ?>.jpg">


                            </div>
                        </div>

                        <div class="entry-content">
                            <div class="entry-title text-center">
                                <h3 class="title">BASKETS <?= $siV ?></h3>
                                <div class="entry-meta">
                                    <span class="category">Baskets</span>
                                </div>
                                <div style="margin-top: 5px;">
                                    <a href="<?= $waLink ?>" target="_blank" class="btn-whatsapp"><i class="fa fa-whatsapp"></i> WhatsApp</a>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <?php } ?>

                <!-- BOX FLOWERS -->
                <?php
                for ($i = 1; $i <= 12; $i++) {
                    $siV = ($i < 10) ? "0" . $i : $i;
                    $waLink = "https://wa.me/971523641716?text=Hi%20I%27m%20interested%20in%20Box%20Flower%20" . $siV;
                ?>
                <div class="portfolio-item col-sm-6 col-xs-12 col-md-3 vwboxflowers">
                    <div class="content-item flower-card">
                        <div class="entry-header">
                            <div class="entry-thumbnail flower-image-wrap">
                                <img alt="Box Flowers <?= $siV ?>" src="images/products/boxflowers/boxflowers_<?= $siV ?>.jpg">


                            </div>
                        </div>

                        <div class="entry-content">
                            <div class="entry-title text-center">
                                <h3 class="title">BOX FLOWERS <?= $siV ?></h3>
                                <div class="entry-meta">
                                    <span class="category">Box Flowers</span>
                                </div>
                                <div style="margin-top: 5px;">
                                    <a href="<?= $waLink ?>" target="_blank" class="btn-whatsapp"><i class="fa fa-whatsapp"></i> WhatsApp</a>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <?php } ?>

            </div>
        </div>
    </div>
</div>

<?php
include("footer.php");
?>