<?php include 'header.php';?>
<div class="container">
<div class="row">
<div class="col-md-12">
	<h1 class="text-center readyDownload">Now your brochure is ready to download</h1>
	<div class="anchorDownloadBrochure">
    <a href="<?=base_url('images/brochure/Total_Evironment_Brochure.pdf')?>" class="btn btn-primary" download="Total_Evironment_Brochure.pdf" onclick="myFunction()"><i class="fa fa-arrow-down" aria-hidden="true"></i>&nbsp;Download Now</a>
   </div>
</div>
</div>
</div>

<script>
function myFunction() {
  location.replace("<?=base_url('thankyou')?>")
}
</script>

