<?php
ob_start();
session_start();
$prtsavcont="";$tempcont ="";

$pgenme="contact"; 
$pgenmestr="Contact us - Floris Fleur Flowers Trading LLC"; 

$errors ="";
$fullname=""; 
$email=""; $phone="";$subject="";
$message="";$cpta="";
$resStr="";
$alreadysubmitd=true; 
$issubmitd=false;


include("header.php");

 
 
 if ((isset($_SESSION['contsubmtd'])==false) ||  (empty($_SESSION['contsubmtd']))) { $alreadysubmitd=false;}
 
 if (($_POST) && ($alreadysubmitd==false)) { 
	if (isset($_POST['fullname'])==true) { $fullname =  replQts($_POST['fullname']); }     
     if (isset($_POST['email'])==true) { $email =  replQts($_POST['email']); }
     if (isset($_POST['phone'])==true) { $phone =  replQts($_POST['phone']); }    
     if (isset($_POST['message'])==true) { $message =  replQts($_POST['message']); }
     if (isset($_POST['cpta'])==true) { $cpta =  replQts($_POST['cpta']); }
 

 if ($_POST) $post=1; 

 $errors ="";
 if (!$fullname) $errors = 'Please enter your name.<br>';
 if (!$email) $errors = $errors.'Please enter your email.<br>'; 
 if (!$message) $errors =$errors.'Please enter your message.<br>'; 
 if ($cpta){
            if(strcasecmp($_SESSION['captcha'], $cpta) != 0){
                $errors =$errors. "Entered captcha code does not match.";
            }
        }
     else {
         $errors =$errors.'Please enter the captcha code.<br>'; 
  }
  
  if ($errors=="") { 
       
 
 
		$to = 'info@florisfleur.com';	 
		$from = $fullname . ' <' . $to . '>';
		$subject = 'florisfleur.com - Enquiry from ' . $fullname;	
		$message = 'Name: ' . $fullname . '<br/><br/>
				   Email: ' . $email . '<br/><br/>	
                   Phone: ' . $phone . '<br/><br/>		
                   Message: ' . nl2br($message) . '<br/>';
		$result = sendmail($to, $subject, $message, $from);
		if ($_POST) {
			if ($result) { $resStr='Thank you! We have received your message.'; $issubmitd=true;}
			else {$resStr='Sorry, unexpected error. Please try again later'; }		
		  
	       } 
	    
		 $_SESSION['contsubmtd']='yes';
		}
		 
 }
 




 
function sendmail($to, $subject, $message, $from) {
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
	$headers .= 'From: ' . $from . "\r\n";
	
	$result = mail($to,$subject,$message,$headers);
	
	if ($result) return 1;
	else return 0;
}

    
function replQts($strPas) {
	     $strSrc  = array('\'', '"');
         $strRep  = array('&apos;','&quot;');
         return str_replace($strSrc, $strRep, $strPas);
    }
?>

    

        
        <div class="contactpage">
            <div class="container">
                <div class="grd-section-title  grd_title-type-2 margbtm20">
                    <h3 class="title  fsize30">Fill and Submit your inquiry</h3>
                    <div class="desc">
                        <p>Contact us for further enquiry.</p>
                    </div>
                </div>
                <div class="grd-banner grd-banner-style-2">
                    <div class="image"><img class="" src="images/contact_bg01.jpg" alt="Contact-img" width="1170" height="470"></div>
                    <div class="content">
                        <div class="icon-banner"><span class="svg-icon"><i class="flaticon-pin"></i></span></div>
                        <div class="descr"> <h3>Al Barsha 1</h3>
                            <p>Emirates Souq 4,</p>
                            <p>Shop No.9, Dubai, UAE</p>
 

                        </div>
                        <div class="button"><a href="https://maps.app.goo.gl/7vJ8zBDAe6WKAexT9" target="_blank" ><span class="svg-icon"><i class="flaticon-right"></i></span>Find Us On Map</a></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5">
                        <div class="contact-pagebox">
                            <div class="grd-contact-box">
                                <div class="grd-section-title  grd_title-type-2 margbtm20">
                                    <h3 class="title  fsize30">Quick contact</h3>
                                </div>
                                <ul>
                                    <li>
                                        <p class="name">Phone</p>
                                        <p class="value"><a href="tel:+971523641716">+971 52 364 1716</a> | <a href="tel:+97145858645">+971 4 585 8645</a></p>
                                    </li>
                                     <li>
                                        <p class="name">WhatsApp</p>
                                        <p class="value"><a target="_blank" href="https://wa.me/971523641716?text=Hi!%20I'm%20interested%20in%20your%20services%20and%20would%20love%20to%20know%20more%20about%20it.%20Could%20you%20please%20send%20me%20more%20information?%20Thank%20you!">+971 52 364 1716</a></p>
                                    </li>
                                    <li>
                                        <p class="name">Email</p>
                                        <p class="value"><a href="mailto:info@florisfleur.com">info@florisfleur.com</a></p>
                                    </li>
                                    <li>
                                        <p class="name">Working Hours</p>
                                    </li>
                                    <li>
                                        <p class="seasons">Monday to Saturday</p>
                                        <p class="value"><span class="text-green">9.00 to 22.00</span></p>
                                    </li>
                                    <li>
                                        <p class="seasons">Sunday</p>
                                        <p class="value"><span class="text-green">10.00 to 18.00</span></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-7">


                      <?php  
                        
                            if ($resStr!="") {			
                                  ?>	 
                              <div class="contact-form-title mb-30">
                                    <h2 class="heading-1">
                                      Submitted successfully.
                                    </h2>
                                    <p class="mb-0">
                                    <?php 
                                      echo $resStr;
                                      ?>
                                      </p>
                                </div>   
                      <?php
                        } 
                              else 
                              {
                                if ($errors!="") { 
                                      echo '<p align=center><b><font color=#bb0000>';
                                      echo $errors;
                                      echo '</font></b></p>';
                                      } 
                            ?> 

                        <form method="post" action="" class="wpcf7-form" id="contact-form" novalidate="novalidate">
                            <div class="contactpage-form">
                                <p>Feel free to ask any questions over the phone or mail or fill the form below.</p>
                                <div class="row">
                                    <div class="col-md-6 col-xs-12 col-sm-12">
                                        <p>
                                            
                                            <input type="text" id="fullname" name="fullname" title="First Name" placeholder="Your Name" value="<?=$fullname?>" size="40" required="" />

                                        </p>
                                    </div>
                                    <div class="col-md-6 col-xs-12 col-sm-12">
                                        <p> 
                                            <input type="email" id="email" name="email" title="Email" size="40" placeholder="Email Address*"  value="<?=$email?>" required="" />
                                        </p>
                                    </div>
                                    <div class="col-md-12 col-xs-12 col-sm-12">
                                        <p>                                            
                                            <input type="text" name="phone" id="phone" title="Phone" size="40" placeholder="Phone Number" value="<?=$phone?>" required=""  />
                                        </p>
                                    </div>
                                    <div class="col-md-12 col-xs-12 col-sm-12 mf-textarea-field">
                                        <p>                                            
                                            <textarea name="message" id="message" title="message" class="input-text" cols="40" rows="4" placeholder="Enter Your Message"><?=$message?></textarea>
                                        </p>
                                    </div>
                                    <div class="col-md-6 col-xs-12 col-sm-12">
                                        <p>   
                                          Enter Captcha </label><img src="captcha.php?rand=<?php echo rand(); ?>" id="cpta_imge" height="30" width="120" />
						                              (<a href='javascript: rfrsCapta();'><b>Refresh</b></a>) 
                                          </p>
                                    </div>
                                    <div class="col-md-6 col-xs-12 col-sm-12">
                                        <p> 
                                          <input type="text"  name="cpta" placeholder=""  value="" maxlength="6" />                                                                                     
                                        </p>
                                    </div>
                                    <div class="text-center mf-submit col-md-12 col-xs-12 col-sm-12">
                                        <button type="submit" name="submit-form" id="submit-form" title="Submit" class="btn-style-two"> <span> Submit </span> </button>                                    </div>
                                </div>
                            </div>
							              <div class="contact-form-message"></div>
                            <div id="loading" class="form-loader"><img src="images/ajax-loader.png" alt="loading"></div>
                        </form>

                       
                      <?php 
                      } 
                      ?> 		                



                    </div>
                </div>

            </div>

            
            
             
            
            <div class="google-map-area">
             
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3612.702205601391!2d55.187094175965406!3d25.111940035147665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f6b1216dee23f%3A0xdb2a04a3d57052b2!2sFloris%20Fleur%20Flowers%20Trading%20LLC!5e0!3m2!1sen!2sae!4v1767462190860!5m2!1sen!2sae" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                      
            </div>
 
        </div>

               

        

<?php 
include("footer.php");
?> 
<script langugage="javascript">
    function rfrsCapta(){
       var imgCpt = document.images['cpta_imge'];
       imgCpt.src = imgCpt.src.substring(0,imgCpt.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
    }
</script>