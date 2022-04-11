<?php 
$title = "About | Fat Hippo Restaurant";
$description = "";
$keywords = "";
$class = "innerpages";
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
            <h3>About Us</h3>
            <p>Delivering to Plaistow and surrounding areas</p>
            <a href="#">Our Menu</a>
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
                    <div class="contentText">
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
				<h1 style="text-decoration:none">Order From Our Menu Today</h1>
            </div>
    </div>
</div>
<?php include ('inc/b_footer.php');?>
    