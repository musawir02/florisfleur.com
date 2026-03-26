<?php
ob_start();
session_start();
$prtsavcont = "";
$tempcont = "";

$pgenme = "gallery";
$pgenmestr = "Gallery - Floris Fleur Flowers Trading LLC ";

include("header.php");
?>

<style>
    /* Force consistent grid aspect ratio for all product images */
    .grd-portfolio-shortcode .portfolio-item .content-item .entry-header .entry-thumbnail img {
        height: 350px !important;
        object-fit: cover !important;
        width: 100% !important;
    }
    
    /* Ensure the WhatsApp button is styled consistently */
    .btn-whatsapp-custom {
        display: inline-block;
        background-color: #25d366;
        color: #fff !important;
        padding: 8px 15px;
        border-radius: 4px;
        margin-top: 10px;
        font-weight: 600;
        text-transform: uppercase;
        font-size: 12px;
    }
    .btn-whatsapp-custom:hover {
        background-color: #128c7e;
    }
</style>

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
                for ($i = 1; $i <= 98; $i++) {
                    $siV = ($i < 10) ? "0" . $i : $i;
                    $waLink = "https://wa.me/971523641716?text=Hi%20I%27m%20interested%20in%20Bouquet%20" . $siV;
                ?>
                <div class="portfolio-item col-sm-6 col-xs-12 col-md-3 vwbouquets">
                    <div class="content-item">
                        <div class="entry-header">
                            <div class="entry-thumbnail">
                                <a href="#"><img alt="Bouquets <?= $siV ?>" src="images/products/bouquets/bouquets_<?= $siV ?>.jpg"></a>
                            </div>
                            <div class="entry-title">
                                <h3 class="title">BOUQUETS <?= $siV ?></h3>
                            </div>
                        </div>

                        <div class="entry-content">
                            <div class="entry-title">
                                <h3 class="title">BOUQUETS <?= $siV ?></h3>
                                <div class="entry-meta">
                                    <a class="category" href="#">Fresh Flowers</a>
                                </div>
                            </div>
                            <div class="entry-read-more">
                                <a href="<?= $waLink ?>" target="_blank" class="read-more"><i class="fa fa-whatsapp"></i> WhatsApp</a>
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
                    <div class="content-item">
                        <div class="entry-header">
                            <div class="entry-thumbnail">
                                <a href="#"><img alt="Baskets <?= $siV ?>" src="images/products/baskets/baskets_<?= $siV ?>.jpg"></a>
                            </div>
                            <div class="entry-title">
                                <h3 class="title">BASKETS <?= $siV ?></h3>
                            </div>
                        </div>

                        <div class="entry-content">
                            <div class="entry-title">
                                <h3 class="title">BASKETS <?= $siV ?></h3>
                                <div class="entry-meta">
                                    <a class="category" href="#">Fresh Flowers</a>
                                </div>
                            </div>
                            <div class="entry-read-more">
                                <a href="<?= $waLink ?>" target="_blank" class="read-more"><i class="fa fa-whatsapp"></i> WhatsApp</a>
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
                    <div class="content-item">
                        <div class="entry-header">
                            <div class="entry-thumbnail">
                                <a href="#"><img alt="Box Flowers <?= $siV ?>" src="images/products/boxflowers/boxflowers_<?= $siV ?>.jpg"></a>
                            </div>
                            <div class="entry-title">
                                <h3 class="title">BOX FLOWERS <?= $siV ?></h3>
                            </div>
                        </div>

                        <div class="entry-content">
                            <div class="entry-title">
                                <h3 class="title">BOX FLOWERS <?= $siV ?></h3>
                                <div class="entry-meta">
                                    <a class="category" href="#">Fresh Flowers</a>
                                </div>
                            </div>
                            <div class="entry-read-more">
                                <a href="<?= $waLink ?>" target="_blank" class="read-more"><i class="fa fa-whatsapp"></i> WhatsApp</a>
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