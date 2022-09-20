<section class="footerDetails" id="contact">
	<div class="container-fluid">
		<div class="row">
		<div class="col-md-4">
        <a class="logoImagesDet" href="<?=base_url('index')?>"><img src="<?=base_url('images/logo.png')?>"></a>
        <p class="estateDet pl-3">We work together as an integrated team - from concept to completion. This high degree of interaction between our design, construction and business development teams ensures that every little detail gets the close attention it deserves.</p>
      </div>
			<div class="col-md-4">
				<h3 class="nearestLocationDet">Nearest location</h3>
				<ul class="footerIconLocation">
        <li><i class="fa fa-dot-circle-o" aria-hidden="true"></i>Phoenix Marketcity mall</li>
          <li><i class="fa fa-dot-circle-o" aria-hidden="true"></i>Namma Metro rail phase 2a</li>
          <li><i class="fa fa-dot-circle-o" aria-hidden="true"></i>T2 Social Hub </li>
          <li><i class="fa fa-dot-circle-o" aria-hidden="true"></i>950 - acre Aerospace park</li>
          
          
				</ul>
			</div>
			<div class="col-md-4">
				<h4>Contact Us</h4>
				<ul class="footerIconLocation">
          <div class="phoneIconDet">
            <i class="fa fa-phone" aria-hidden="true"></i>
            <p>Phone:&nbsp;<a class="phone_a_tag" target="_blank" href="tel:+917669098314">+91 6360690190</a></p>
          </div>
          <div class="addressDetails">
            <i class="fa fa-map-marker" aria-hidden="true"></i>
            <p>At Hennur Road , Bangalore
            </p>
          </div>
					</div>
				</ul>
			</div>
		</div>
	</div>
</section>
 <section class="contactFooter">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4">
        <p class="pl-4"><a target="_blank" href="#">Copyrights 2022. Space and Bricks. All Rights Reserved</a></p>
      </div>
      <div class="col-md-4">
        <p class="text-center pl-4"><a target="_blank" href="https://www.orangedigitalmedia.in/">Digital Marketing Partner – Orange Digital Media</a></p>
      </div>
      <div class="col-md-4">
        <p class="pl-4"><a target="_blank" href="<?=base_url('privacy')?>">Privacy Policy</a><span><a target="_blank" href="<?=base_url('disclaimer')?>"> - Disclaimer</a></span></p>
      </div>
    </div>
  </div>
</section>
<a href="tel:+91 8197967475" class="phoneDetails" target="_blank"><i class="fa fa-phone" aria-hidden="true"></i></a>
<!-- <a href="https://api.whatsapp.com/send?phone=+916360690190&text=Hi%20I%20am%20interested%20in%20The %20Godrej%20Splendour%20Project%20,pls%20call%20back%20and%20share%20the%20project%20details." class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a> -->

<a class="float" target="_blank" data-toggle="modal" data-target="#whatsappModal"><i class="fa fa-whatsapp my-float"></i></a>
<a id="button"></a>

<div class="modal fade" id="uploadModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal body -->
        <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <img class="mx-auto d-block" src="<?=base_url('images/logo.png')?>">
        <form method="post" action="<?=base_url('pview/brouchureGetQUoteInsert')?>" enctype="multipart/form-data">
         <div class="form-group">
              <input type="text" class="form-control" name="name" placeholder="Name" required="">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="mobile" placeholder="Mobile" required="" pattern="[1-9]{1}[0-9]{9}">
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="email" placeholder="Email" required="">
            </div>
        <button type="submit" class="btn btnModel">Register</button>
        </form>
        </div>
        
      </div>
    </div>
</div>
<div class="modal fade" id="uploadBrouchure">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal body -->
        <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <img class="mx-auto d-block" src="<?=base_url('images/logo.png')?>">
        <form method="post" action="<?=base_url('pview/brouchureDownloadInsert')?>" enctype="multipart/form-data">
        <div class="form-group">
              <input type="text" class="form-control" name="name" placeholder="Name" required="">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="mobile" placeholder="Mobile" required="" pattern="[1-9]{1}[0-9]{9}">
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="email" placeholder="Email" required="">
            </div>
        <button type="submit" class="btn btnModel">Register</button>
        </form>
        </div>
        
      </div>
    </div>
</div>
<script src="<?=base_url('assets/js/jquery-3.5.1.slim.min.js')?>"></script>
<script type="text/javascript" src="<?=base_url('assets/js/bootstrap.min.js')?>"></script>
</script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/60044909c31c9117cb6f79ee/1es8bqkaf';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<script type="text/javascript">
var offset = $('overview').offset();
var scrollto = offset.top - 60; // minus fixed header height
$('html, body').animate({scrollTop:scrollto}, 0);
</script>
</body>
</html>