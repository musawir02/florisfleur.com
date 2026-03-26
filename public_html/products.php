 <?php
ob_start();
session_start();
$prtsavcont="";$tempcont ="";

$pgenme="products"; 
$pgenmestr="Our Products - Floris Fleur Flowers Trading LLC "; 

include("header.php");
?>

 		 

    
        <div class="pricingpage pagepadding">
            <div class="container">
                <div class="grd-section-title  grd_title-type-2 margbtm20">
                    <h3 class="title  fsize30">OUR PRODUCTS</h3>
                </div>

                
                <div class="dl_prices_1 text-dark ">
                    <div class="title-price form">
                        <div>Product Category</div>
                        <div>Description</div>                         
                    </div>
                    <div class="main_table form">
                        <div class="srvtype">
                            <h3><a href="products_detail.php?cid=1"> Bouquets</a></h3>
                        </div>
                        <div>
                              <P>
                                Our fresh flower bouquet is beautifully hand-arranged using premium, seasonal blooms. Perfect for any occasion, each bouquet is crafted with care to deliver freshness, elegance, and long-lasting beauty.
                                
                              </P>
                        </div> 
                    </div>
                    <div class="main_table form">
                        <div class="srvtype">
                            <h3><a href="products_detail.php?cid=2"> Baskets</a></h3>
                        </div>
                        <div>
                             <p>
                               Our flower arrangements are made with fresh, handpicked flowers and stylish designs, suitable for all occasions with fast delivery available across Dubai.

                             </p>
                        </div>                        
                    </div>
                    <div class="main_table form">
                        <div class="srvtype">
                            <h3><a href="products_detail.php?cid=3"> Box Flowers</a></h3>
                        </div>
                        <div>
                            <p>
                                 
                                Our flower arrangements are made with fresh, handpicked flowers and stylish designs, suitable for all occasions with fast delivery available across Dubai.

                            </p>
                        </div>                        
                    </div>
                     
                </div>

 
            

          



                  </div>
        </div>


 <?php 
 include("footer.php");
?> 
       