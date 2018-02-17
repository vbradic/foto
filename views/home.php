


<div class="row home-info" id="home-info">
	<div class="col-xs-12 text-center">
		<h1>NASLOV FOTO</h1>
		<h3>MALI NASLOV TRTE MRTE</h3>
		<p>Center aligned text on all viewport sizes.</p>
	</div>
</div>

<div class="container gallery-container">
	<div class="tz-gallery">

		<div class="row">

<?php foreach($gallery_info_list as $gallery_info) { ?>

			<div class="col-sm-6 col-md-4 img-holder-home">
				<a class="lightbox image" href=""> <img
					src="<?php echo $gallery_info->head_image_path; ?>">


					<div class="middle gallery_home_info">
						<div class="text">

							<h3><?php echo $gallery_info->name; ?></h3>

						</div>
					</div>
				</a>
			</div>
<?php }?>

			<!--  
			<div class="col-sm-12 col-md-4">
				<a class="lightbox"
					href="app/imgs/darko/jovana_i_filip_kablar/J&F-38.jpg"> <img
					src="app/imgs/darko/jovana_i_filip_kablar/J&F-41.jpg" alt="Bridge">
				</a>
			</div>





			<div class="col-sm-6 col-md-4">
				<a class="lightbox"
					href="app/imgs/darko/dragana_i_ivica_kopaonik/D&I-10.jpg"> <img
					src="app/imgs/darko/dragana_i_ivica_kopaonik/D&I-10.jpg" alt="Park">
				</a>
			</div>





			<div class="col-sm-6 col-md-4">
				<a class="lightbox" href=""> <img
					src="app/imgs/darko/jovana_i_filip_kablar/J&F-20.jpg" alt="Tunnel">
				</a>
			</div>





			<div class="col-sm-12 col-md-4">
				<a class="lightbox" href=""> <img
					src="app/imgs/darko/dragana_i_ivica_kopaonik/D&I-57.jpg"
					alt="Traffic">
				</a>
			</div>





			<div class="col-sm-6 col-md-4">
				<a class="lightbox" href=""> <img
					src="app/imgs/darko/jovana_i_filip_kablar/J&F-13.jpg" alt="Coast">
				</a>
			</div>




			<div class="col-sm-6 col-md-4 img-holder-home">
				<a class="lightbox image" href=""> <img
					src="app/imgs/darko/dragana_i_ivica_kopaonik/D&I-3.jpg" alt="Rails">
				

				<div class="middle gallery_home_info">
					<div class="text">
					
					<h3>John Doe</h3>
					<p>Blala trte mrte bla
						truc jeste jeste.</p>
					
					
					</div>
				</div>
				</a>
			</div>




-->
		</div>

	</div>
</div>
<script
	src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>