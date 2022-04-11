<?php 
$title = "Fat Hippo Restaurant";
$description = "";
$keywords = "The Home of Taste  In West Drayton";
$class = "";
?>

<?php include ('inc/b_header.php');?>
<div class="banner">
    	<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="<?php echo $root; ?>assets/images/banner1.jpg">
        <div class="carousel-caption">
            <h3>Fat Hippo Restaurant</h3>
            <p>The Home of Taste  In West Drayton</p>
      	</div>
      </div>

      <div class="item">
        <img src="<?php echo $root; ?>assets/images/banner2.jpg">
        <div class="carousel-caption">
            <h3>Fat Hippo Restaurant</h3>
            <p>The Home of Taste  In West Drayton</p>
      	</div>
      </div>
    
      <div class="item">
        <img src="<?php echo $root; ?>assets/images/banner3.jpg">
        <div class="carousel-caption">
            <h3>Fat Hippo Restaurant</h3>
            <p>The Home of Taste  In West Drayton</p>
      	</div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <i class="fa fa-chevron-left" aria-hidden="true"></i>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <i class="fa fa-chevron-right" aria-hidden="true"></i>
    </a>
  </div>
    </div>
<div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                	<div class="contentLogo">
                    	<img src="<?php echo $root; ?>assets/images/logo.png">
                    </div>
                    <div class="contentText">
                    	<h1>OUR STORY</h1>
                    	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <a href="#">See Our Menu</a>
                        <a href="#">See Halal Certification</a>
                        <a href="#">Order From Our Menu</a>
                    </div>
                </div>
            </div>
        </div>
</div>
<div class="contentBottom">
	<div class="container">
            <div class="row">
				<h1>GET IN TOUCH TODAY TO TRY OUR FANTASTIC DISHES</h1>
            </div>
    </div>
</div>
<div class="contact">
	<div class="container">
            <div class="row">
				<h2>CONTACT</h2>
                <p><b>Address:</b> Chancerygate Industrial Cent, Horton Close, West Drayton UB7 8EW. United Kingdom</p>
                <p><b>Contact No:</b> <a href="tel:01895447000">01895447000</a></p>
                <p><b>Email:</b> <a href="mailto:mailto:clearbusiness.adrianvenoin@gmail.com">mailto:clearbusiness.adrianvenoin@gmail.com</a></p>
                <hr />
                <div role="form" class="wpcf7" id="wpcf7-f15-p44-o1" lang="en-US" dir="ltr">
					<form id="commentForm" enctype="multipart/form-data" action="<?php echo $root; ?>contact_action.php" method="post">
                                    <p>Name (required)<br />
                                    <input type="text" name="name" class="required" placeholder="Enter Your Name" /></p>
                                    <p>Email (required)<br />
                                    <input type="email" name="email" class="required" placeholder="Enter Your Email" /></p>
                                    <p>Subject (required)<br />
                                    <input type="text" name="subject" class="required"  placeholder="Type of Sebject" /></p>
                                    <p>Comments (required)<br />
                                    <textarea name="message" class="required" placeholder="Type Message" cols="40" rows="10"></textarea></p>
                                    <p><input class="button" type="submit" value="Send" /></p>
                                    
                                    </form>
									<div class="screen-reader-response">
                                    <?php if(isset($_GET['msg']) && $_GET['msg'] != '') { ?>
                                        <?php 
                                        if($_GET['msg'] == "success") {
                                        echo '<p class="success">Thank You. Your contact request was sent successfully.</p>';
                                        } else {
                                        echo '<p class="error">Please insert your correct input fields</p>';
                                        }
                                        ?>
                                    <?php } ?>
                                    </div></div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2483.1905025465985!2d-0.4613399846915471!3d51.50972091835513!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48767208a73b2f31%3A0x178e878c7e25786b!2sChancerygate%20Industrial%20Centre%2C%20Horton%20Cl%2C%20West%20Drayton%20UB7%208EW%2C%20UK!5e0!3m2!1sen!2s!4v1649645745424!5m2!1sen!2s" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
    </div>
</div>



<?php include ('inc/b_footer.php');?>  