 <?php
ob_start();
session_start();
$prtsavcont="";$tempcont ="";

$cidV=1;
$catName="BOUQUETS";
$catbannname="catbanner_bouquets.jpg";
if (isset($_GET['cid'])==true) { $cidV=$_GET['cid']; }     
if ($cidV=="1") {  
  $catName="BOUQUETS"; 
  $catbannname="catbanner_bouquets.jpg";    
  }
elseif ($cidV=="2") {  
  $catName="BASKETS"; 
  $catbannname="catbanner_baskets.jpg";
  }
elseif ($cidV=="3") {  
  $catName="BOX FLOWERS"; 
  $catbannname="catbanner_boxflowers.jpg";
  }
elseif ($cidV=="4") { 
  $catName="GIFT ARRANGEMENTS"; 
  $catbannname="catbanner_giftmanagement.jpg";
 }

$pgenme="products"; 
$pgenmestr="Product Details - Floris Fleur Flowers Trading LLC "; 

include("header.php");
?>
 

   

        <div class="blogpage pagepadding ">
            <div class="container">
                <div class="row">
                   <div class="col-md-9 col-sm-12">

                     <div class="row">     
                                         
                             
                             <?php
                                $siV="";$clsV="";
                                if ($cidV=="1") {
                                    for ($i=1;$i<=37;$i++) {  
                                        if ($i<10) { $siV="0".$i;}
                                        else  { $siV=$i;}
                                        if ($i==1) {$clsV="first";}
                                        elseif (($i>1) && ($i%2==1)) {$clsV="odd";}
                                        elseif (($i>1) && ($i%2==0)) {$clsV="even";}
                                        ?>                                          
                                         <div class="col-xs-12 col-sm-6 col-md-4">
                                            <div class="blog-wrapper">
                                                <div class="entry-thumbnail">
                                                    <a href="#"><img src="images/products/bouquets/bouquets_<?=$siV?>.jpg" alt="Peony Roses Bouquet" title="Peony Roses Bouquet" width="485" height="592" /></a>
                                                </div>
                                                <header class="entry-header">
                                                    <div class="entry-meta">
                                                        <div class="entry-title">Peony Roses Bouquet</div>
                                                        <span class="meta-author">Item Code <a href="#">BQ<?=$siV?></a></span>
                                                    </div> 
                                                </header>
                                            </div>
                                        </div>   
                                    <?php
                                    }
                                }    
                                elseif ($cidV=="2") {
                                    for ($i=1;$i<=17;$i++) {  
                                        if ($i<10) { $siV="0".$i;}
                                        else  { $siV=$i;}
                                        if ($i==1) {$clsV="first";}
                                        elseif (($i>1) && ($i%2==1)) {$clsV="odd";}
                                        elseif (($i>1) && ($i%2==0)) {$clsV="even";}
                                        ?> 
                                         <div class="col-xs-12 col-sm-6 col-md-4">
                                            <div class="blog-wrapper">
                                                <div class="entry-thumbnail">
                                                    <a href="#"><img src="images/products/baskets/baskets_<?=$siV?>.jpg" alt="Blissful Harmony" title="Blissful Harmony"   width="485" height="592" /></a>
                                                </div>
                                                <header class="entry-header">
                                                    <div class="entry-meta">
                                                        <div class="entry-title">Blissful Harmony</div>
                                                        <span class="meta-author">Item Code <a href="#">BK<?=$siV?></a></span>
                                                    </div> 
                                                </header>
                                            </div>
                                        </div>   
                                    <?php
                                    }
                                }    
                                elseif ($cidV=="3") {
                                    for ($i=1;$i<=12;$i++) {  
                                        if ($i<10) { $siV="0".$i;}
                                        else  { $siV=$i;}
                                        if ($i==1) {$clsV="first";}
                                        elseif (($i>1) && ($i%2==1)) {$clsV="odd";}
                                        elseif (($i>1) && ($i%2==0)) {$clsV="even";}
                                        ?> 
                                        <div class="col-xs-12 col-sm-6 col-md-4">
                                            <div class="blog-wrapper">
                                                <div class="entry-thumbnail">
                                                    <a href="#"><img src="images/products/boxflowers/boxflowers_<?=$siV?>.jpg" alt="Box or Vase Arrangements" title="Box or Vase Arrangements"  width="485" height="592" /></a>
                                                </div>
                                                <header class="entry-header">
                                                    <div class="entry-meta">
                                                        <div class="entry-title">Box or Vase Arrangements</div>
                                                        <span class="meta-author">Item Code <a href="#">BV<?=$siV?></a></span>
                                                    </div> 
                                                </header>
                                            </div>
                                        </div>   
                                    <?php
                                    }
                                }    
                                elseif ($cidV=="4") {
                                    for ($i=1;$i<=4;$i++) {  
                                        if ($i<10) { $siV="0".$i;}
                                        else  { $siV=$i;}
                                        if ($i==1) {$clsV="first";}
                                        elseif (($i>1) && ($i%2==1)) {$clsV="odd";}
                                        elseif (($i>1) && ($i%2==0)) {$clsV="even";}
                                        ?> 
                                        <div class="col-xs-12 col-sm-6 col-md-4">
                                            <div class="blog-wrapper">
                                                <div class="entry-thumbnail">
                                                    <a href="#"><img src="images/products/giftarrangements/giftarrangements_<?=$siV?>.jpg" alt="Floral Gifts for Every Occasion" title="Floral Gifts for Every Occasion"   width="485" height="592" /></a>
                                                </div>
                                                <header class="entry-header">
                                                    <div class="entry-meta">
                                                        <div class="entry-title">Floral Gifts for Every Occasion</div>
                                                        <span class="meta-author">Item Code <a href="#">GA<?=$siV?></a></span>
                                                    </div> 
                                                </header>
                                            </div>
                                        </div>   
                                    <?php
                                    }
                                }    
                                ?>

                            
                      
                    </div>
                    </div>        
                    <div class="col-md-3 col-sm-12">
                        <div class="service-sidebar paddleft20">
                                <div class="widget">
                                    <h4 class="widget-title">PRODUCTS</h4>
                                    <div class="brochures clearfix">
                                        <div class="col-md-12">
                                            <div class="pull-left"> <i class="fa fa-spinner fa-spin"></i></div>
                                            <div>
                                                <div class="title"> 
                                                    <a <?php if ($cidV=="1") { echo " class='active' ";}?> href="products_detail.php?cid=1">Bouquets</a>                                                
                                                </div>                                                
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="pull-left"> <i class="fa fa-spinner fa-spin"></i></div>
                                            <div>
                                                <div class="title"> 
                                                      <a <?php if ($cidV=="2") { echo " class='active' ";}?> href="products_detail.php?cid=2">Baskets</a>
                                                </div>                                                 
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="pull-left"> <i class="fa fa-spinner fa-spin"></i></div>
                                            <div>
                                                <div class="title"> 
                                                      <a <?php if ($cidV=="3") { echo " class='active' ";}?> href="products_detail.php?cid=3">Box Flowers</a>
                                                </div>                                                 
                                            </div>
                                        </div>
                                         


                                    </div>
                                </div>
                        </div>       
                    </div>
                </div>



            </div>
        </div>
 


  <?php 
 include("footer.php");
?> 
        
 