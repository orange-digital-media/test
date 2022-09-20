<?php include 'header.php'; ?>
<section class="rrSlideDetails">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-12">
				<div class="card cardFormRegisterDett">
					<div class="card-body">

						<h1 class="card-title">Total Enviroment </h1>
						<h2 class="card-title">At Hennur Road , Bangalore</h1>

							<h3 class="card-title">14 Acres (Approx.)</h3>
							<h4 class="card-title">560 Apartments & 70 Villas</h4>
							<h4 class="card-title">Towers : 9 towers</h4>
							<h4 class="card-title">2 BHK, 3 BHK & 4 BHK</h4>
							<h1 class="card-title">STARTING FROM</h1>

							<h1 class="card-title">₹ 1.33Cr. Onwards</h1>

							</form>


							<button type="submit" data-toggle="modal" data-target="#uploadModal" class="btn btnBtwReg">Enquire Now</button>
							</form>
							<h6 class="rerNo">RERA NO. PRM/KA/RERA/1251/446/PR/060722/005044</h6>

					</div>
				</div>
			</div>
			<div class="col-md-6 col-12">
				<div class="card cardFormRegisterDet1">
					<div class="card-body">
						<h1 class="card-title">BOOK A SITE VISIT</h1>
						<form method="post" action="<?= base_url('sendMail') ?>">
							<div class="form-group">
								<input type="text" name="name" placeholder="Name" required="">
							</div>
							<div class="form-group">
								<input type="text" id="mobile" class="phone-field mobile" name="mobile" placeholder="10 Digits Mobile Number" required="" pattern="[1-9]{1}[0-9]{9}">
							</div>
							<div class="radioLeft1">
								<b>Whatsapp Number</b><br>
								<input name="whatsapp_option" id="whatsapp_option" class="whatsapp_option" value="same_as_above" type="radio" required="" checked=""><label>&nbsp;Same as Above&nbsp;&nbsp;&nbsp;</label>
								<input name="whatsapp_option" id="whatsapp_option" class="whatsapp_option" value="different_number" type="radio"><label>&nbsp;Different Number</label> <br>
							</div>
							<div class="form-group" id="whatsapp_mobile_div" class="whatsapp_mobile_div" style="display: none">
								<input type="text" id="whatsapp_mobile" class="phone-field whatsapp_mobile" name="whatsapp_mobile" placeholder="10 Digits Whatsapp Number">
							</div>

							<div class="form-group">
								<input type="text" name="current_city" placeholder="Enter Your City" required="">
							</div>
							<div class="form-group">
								<input type="email" name="email" placeholder="Email" required="">
							</div>
							<div style="display:none;">
								<input type="text" value="" class="utm_source" name="utm_source" />
								<input type="text" value="" class="utm_medium" name="utm_medium" />
								<input type="text" value="" class="utm_term" name="utm_term" />
								<input type="text" value="" class="utm_campaign" name="utm_campaign" />
								<input type="text" value="" class="utm_content" name="utm_content" />

								<input type="text" value="" class="utm_site" name="utm_site" />
								<input type="text" value="" class="utm_url" name="utm_url" />
								<input type="text" value="" class="utm_title" name="utm_title" />
								<input type="text" value="" class="utm_timestamp" name="utm_timestamp" />
								<input type="text" value="" class="utm_itemID" name="utm_itemID" />
							</div>
							<button type="submit" class="btn btnBtwReg1">Enquire Now</button>
						</form>
						<h3 class=""><a class="phone_a_tag" href="tel:+917669098314">Call Us 24/7 @ +91 6360690190</a></h3>

					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="royaloverview anchor mt-3" id="royaloverview">
	<div class="container">
		<h1>OVERVIEW</h1>
		<div class="row">
			<div class="col-lg-6">
				<h1 class="rajGreenDescript">
					Total Enviroment At Hennur Road , Bangalore
				</h1>
				<h6 class="text-center rajGreenDescript">RERA NO. PRM/KA/RERA/1251/446/PR/060722/005044<h6>
						<p class="royal">Total Environment In That Quiet Earth sits off Hennur Main Road, in the fast developing North Bangalore area which has not only emerged as an economic hub, but also as a front-runner among self-contained suburbs that are great places to live and work. The presence of good schools, hospitals, malls, hotels and restaurants in the area and easy access to the airport enhances its desirability.</p>
						<div class="text-center">
							<button type="subit" class="btn btnRequest" data-toggle="modal" data-target="#uploadModal">Download Brochure</button>
						</div>
			</div>
			<div class="col-lg-6">

				<img src="<?= base_url('images/overview_img.jpg') ?>">
			</div>
		</div>
	</div>
</section>









<section class="Amenities  anchor mt-3" id="Amenities">
	<div class="container">
		<h1 class="text-center pt-3 mb-4">Amenities</h1>
		<div class="row justify-content-center pl-md-4">
			<div class="col-md-2 col-6 imgAmmmedites">
				<img src="<?= base_url('images/basketball-player.png') ?>">
				<h4>BasketBall Court</h4>
			</div>
			<div class="col-md-2 col-6 imgAmmmedites">
				<img src="<?= base_url('images/grass.png') ?>">
				<h4>Lawn Terraces</h4>
			</div>
			<div class="col-md-2 col-6 imgAmmmedites">
				<img src="<?= base_url('images/weightlifter.png') ?>">
				<h4>Weightlifter</h4>
			</div>
			<div class="col-md-2 col-6 imgAmmmedites">
				<img src="<?= base_url('images/playground.png') ?>">
				<h4 class="gymDet">Kids Play Area</h4>
			</div>
			<div class="col-md-2 col-6 imgAmmmedites">
				<img src="<?= base_url('images/swimming.png') ?>">
				<h4>Swimming Pool</h4>
			</div>
			<div class="col-md-2 col-6 imgAmmmedites">
				<img src="<?= base_url('images/run.png') ?>">
				<h4>Jogging Track</h4>
			</div>
			<div class="col-md-2 col-6 imgAmmmedites">
				<img src="<?= base_url('images/ice-skates.png') ?>">
				<h4>Skating Rink</h4>
			</div>
			<div class="col-md-2 col-6 imgAmmmedites">
				<img src="<?= base_url('images/signage.png') ?>">
				<h4>Surface Car Park</h4>
			</div>
			<div class="col-md-2 col-6 imgAmmmedites">
				<img src="<?= base_url('images/director-chair.png') ?>">
				<h4>Multipurpose Lawn</h4>
			</div>
			<div class="col-md-2 col-6 imgAmmmedites">
				<img src="<?= base_url('images/amphitheatre.png') ?>">
				<h4>Amphitheatre</h4>
			</div>
			<div class="col-md-2 col-6 imgAmmmedites">
				<img src="<?= base_url('images/tennis-equipment.png') ?>">
				<h4>Tennis Court</h4>
			</div>
			<div class="col-md-2 col-6 imgAmmmedites">
				<img src="<?= base_url('images/snooker.png') ?>">
				<h4>Party Lawn</h4>
			</div>
		</div>
	</div>
	</div>
</section>


<section class="anchor" id="price">
	<div class="container">
		<h1 class="text-center pricehe pt-4 mb-3 ">Pricing</h1>
		<div class="row">
			<div class="col-lg-4 m-auto">
				<div class="card cardBhkApartment mt-3">
					<div class="card-body ">
						<h1>2 BHK(U10)</h1>
					</div>
				</div>

				<div class="card cardUnitArea">
					<img class="card-img-top" src="<?= base_url('images/home.png') ?>">
					<div class="card-body">
						<p class="text-center"><i class="fa fa-check" aria-hidden="true"></i> Area: 1431 Sq.Ft.</p>
						<p class="text-center"><i class="fa fa-check" aria-hidden="true"></i> ₹ 1.33 Cr* Onwards</p>
						<div class="nowButtonDet">
							<button type="submit" class="btn priceDetButton" data-toggle="modal" data-target="#uploadModal">Price</button>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 m-auto">
				<div class="card cardBhkApartment mt-3">
					<div class="card-body">
						<h1>3 BHK(H20)</h1>
					</div>
				</div>

				<div class="card cardUnitArea">
					<img class="card-img-top" src="<?= base_url('images/home.png') ?>">
					<div class="card-body">
						<p class="text-center"><i class="fa fa-check" aria-hidden="true"></i> Area: 2305 - 2409 Sq.Ft.</p>
						<p class="text-center"><i class="fa fa-check" aria-hidden="true"></i> ₹ 2.25 Cr* Onwards</p>
						<div class="nowButtonDet">
							<button type="submit" class="btn priceDetButton" data-toggle="modal" data-target="#uploadModal">Price</button>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 m-auto">
				<div class="card cardBhkApartment mt-3">
					<div class="card-body">
						<h1>4 BHK(U20)</h1>
					</div>
				</div>

				<div class="card cardUnitArea">
					<img class="card-img-top" src="<?= base_url('images/home.png') ?>">
					<div class="card-body">
						<p class="text-center"><i class="fa fa-check" aria-hidden="true"></i> Area: 2890 Sq.Ft.</p>
						<p class="text-center"><i class="fa fa-check" aria-hidden="true"></i> ₹ 2.85 Cr* Onwards</p>
						<div class="nowButtonDet">
							<button type="submit" class="btn priceDetButton" data-toggle="modal" data-target="#uploadModal">Price</button>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="row mt-5">
			<div class="col-lg-4 m-auto">
				<div class="card cardBhkApartment mt-3">
					<div class="card-body ">
						<h1>3 BHK(L21v1)</h1>
					</div>
				</div>

				<div class="card cardUnitArea">
					<img class="card-img-top" src="<?= base_url('images/home.png') ?>">
					<div class="card-body">
						<p class="text-center"><i class="fa fa-check" aria-hidden="true"></i> Area: 2628 Sq.Ft.</p>
						<p class="text-center"><i class="fa fa-check" aria-hidden="true"></i> ₹ 2.54Cr Cr* Onwards</p>
						<div class="nowButtonDet">
							<button type="submit" class="btn priceDetButton" data-toggle="modal" data-target="#uploadModal">Price</button>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 m-auto">
				<div class="card cardBhkApartment mt-3">
					<div class="card-body">
						<h1>3 BHK(H20)</h1>
					</div>
				</div>

				<div class="card cardUnitArea">
					<img class="card-img-top" src="<?= base_url('images/home.png') ?>">
					<div class="card-body">
						<p class="text-center"><i class="fa fa-check" aria-hidden="true"></i> Area: 3430 Sq.Ft.</p>
						<p class="text-center"><i class="fa fa-check" aria-hidden="true"></i> ₹ 4.56 Cr* Onwards</p>
						<div class="nowButtonDet">
							<button type="submit" class="btn priceDetButton" data-toggle="modal" data-target="#uploadModal">Price</button>
						</div>
					</div>
				</div>
			</div>
		
		</div>
</section>

<section class="specificationDet mt-4 anchor" id="highlights">
	<h1 class="text-center mb-4 text-white">Project Highlights</h1>
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="card project_lines">
					<div class="card-body">
						<ul class="text-black project_li ">
							<li><i class="fa fa-dot-circle-o" aria-hidden="true"></i>Introductory discount of INR 13 Lakhs*</li>
							<li><i class="fa fa-dot-circle-o" aria-hidden="true"></i>Three Year Complimentary maintenance.</li>
							<li><i class="fa fa-dot-circle-o" aria-hidden="true"></i>50 Gm Gold Coin for the first 30 Bookings.</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="card project_lines">
					<div class="card-body">
						<ul class="text-black project_li ">
							<li><i class="fa fa-dot-circle-o" aria-hidden="true"></i>Dedicated design manager.</li>

							<li><i class="fa fa-dot-circle-o" aria-hidden="true"></i> 30:20:50 Payment Plan</li>
							<li><i class="fa fa-dot-circle-o" aria-hidden="true"></i>Complete Interior Design of home with over 9.2 million options.</li>

							<!--<li><i class="fa fa-dot-circle-o" aria-hidden="true"></i> NATURALLY VENTILATED WASHROOMS & KITCHEN</li> -->
						</ul>
					</div>
				</div>
			</div>
			
		</div>
		<div class="requestCallBack mt-4">
			<button type="subit" class="btn btnRequest" data-toggle="modal" data-target="#uploadModal">Download Brochure</button>
		</div>
	</div>
</section>







<h1 class="text-center pricehe pt-3 mb-4">Walkthrough Video</h1>
<div class="container">
	<div class="row">
		<div class="col-md-12 m-auto">
			<!-- <div class="card"> -->
			<img width="100%" height="100%" data-toggle="modal" data-target="#uploadModal" src="<?= base_url('images/virtual_tour.jpg') ?>">

			<!-- <iframe width="100%" height="800" class="youtubevideo_1" src="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
			<!-- 	<div class="card-body">
				</div> -->
		</div>
	</div>
</div>
</div>
</section>

<section id="masterplan">
	<div class="container">
		<div class="row">
			<div class="masterplan_wrapper">
				<img src="<?= base_url('images/master_plan'); ?>" alt="">
			</div>
		</div>
	</div>
</section>
<section class="mt-4 map_section">
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31093.888070187877!2d77.6775606!3d13.0524685!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae11b23abf19e5%3A0x55f8e558d2abfad6!2sIn%20That%20Quiet%20Earth%20-%20Total%20environment!5e0!3m2!1sen!2sin!4v1661512013848!5m2!1sen!2sin" width="100%" height="315" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

</section>








<?php include 'footer.php'; ?>