


<div class="row home-info" id="home-info">
	<div class="col-xs-12 text-center">
		<h1>DOBRODOŠLI</h1>
		<h3>Mi smo Studio 85</h3>
		<p>............................................................................</p>
		
		
		<p>Foto i video tim.</p>
<p><i>Fotografišemo I snimamo proslave, dešavanja i sve što se od nas traži.</i></p>
<p><i>Naš tim je sačinjen od nekliko mladih posvećenih ljudi .</i></p>
<br>
<h3>VOLIMO NAŠ POSAO!</h3>
<p>Emocija i energija su stvari koje jurimo i pokušavamo da “zamrznemo” zauvek.</p>
<p>Volimo da putujemo, tako da, vodite nas negde!</p>
		
		
	</div>
</div>

<div class="container gallery-container">
	<div class="tz-gallery">

		<div class="row">

<?php foreach($gallery_info_list as $gallery_info) { ?>

			<div class="col-sm-6 col-md-4 img-holder-home">
				<a class="lightbox image" href="http://localhost/foto/index.php?controller=gallery&action=gallery&gallery_name=<?php echo $gallery_info->name;?>"> <img
					src="<?php echo $gallery_info->head_image_path; ?>">


					<div class="middle gallery_home_info">
						<div class="text">

							<?php echo $gallery_info->description_header; ?>

						</div>
					</div>
				</a>
			</div>
<?php }?>

		</div>

	</div>
</div>
