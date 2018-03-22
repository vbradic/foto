<link rel="stylesheet"
	href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="app/css/manage.css">

<hr>

<div class="container manageContainer">

	<div class="row">
		<div class="col-md-4 col-md-offset-4 text-center">
			<h2>Slide Images</h2>
		</div>

	</div>

	<br> <br>

	<form>
		<h3>Home slide images</h3>

		<div class="row"> 
  <?php foreach($slide_images_home as $slide) { ?>
  	<div class="col-xs-4 col-sm-3 col-md-3 nopad text-center">
				<label class="image-checkbox"> <img class="img-responsive"
					src="<?php echo $slide->img_path; ?>" /> <input type="checkbox"
					name="image[]" value="<?php echo $slide->id; ?>" /> <i
					class="fa fa-check hidden"></i>
				</label>	
			
			<?php if($slide->active) {?>
			<label><i>Active</i></label>
			 <?php }?>		
		</div>  
  <?php }?>
    
 </div>

		<br>

		<div class="row">
			<div class="col-md-4 col-md-offset-4 text-center">
				<div class="btn-group ">
					<button type="submit" name="homeSlideActivate"
						class="btn btn-default">Activate</button>
					<button type="submit" name="homeSlideDectivate"
						class="btn btn-default">Deactivate</button>
				</div>
			</div>
		</div>

	</form>

	<hr>

	<form>
		<h3>Gallery slide images</h3>

		<div class="row"> 
  <?php foreach($slide_images_gallery as $slide) { ?>
  	<div class="col-xs-4 col-sm-3 col-md-3 nopad text-center">
				<label class="image-checkbox"> <img class="img-responsive"
					src="<?php echo $slide->img_path; ?>" /> <input type="checkbox"
					name="image[]" value="<?php echo $slide->id; ?>" /> <i
					class="fa fa-check hidden"></i>
				</label>
			
			<?php if($slide->active) {?>
			<label><i>Active</i></label>
			 <?php }?>
	</div>  
  <?php }?>
</div>

		<div class="row">
			<div class="col-md-4 col-md-offset-4 text-center">
				<div class="btn-group ">
					<button type="submit" name="gallerySlideActivate"
						class="btn btn-default">Activate</button>
					<button type="submit" name="gallerySlideDeactivate"
						class="btn btn-default">Deactivate</button>
				</div>
			</div>
		</div>
	</form>

	<hr>

	<form>
		<h3>Video slide images</h3>
		<div class="row"> 
  <?php foreach($slide_images_video as $slide) { ?>
  	<div class="col-xs-4 col-sm-3 col-md-3 nopad text-center">
				<label class="image-checkbox"> <img class="img-responsive"
					src="<?php echo $slide->img_path; ?>" /> <input type="checkbox"
					name="image[]" value="<?php echo $slide->id; ?>" /> <i
					class="fa fa-check hidden"></i>
				</label>
			
			<?php if($slide->active) {?>
			<label><i>Active</i></label>
			 <?php }?>
			 
		</div>  
  <?php }?>
 </div>

		<div class="row">
			<div class="col-md-4 col-md-offset-4 text-center">
				<div class="btn-group ">
					<button type="submit" name="videoSlideActivate"
						class="btn btn-default">Activate</button>
					<button type="submit" name="videoSlideDeactivate"
						class="btn btn-default">Deactivate</button>
				</div>
			</div>
		</div>

	</form>

	<hr>

	<br> <br>

	<div class="row">
		<div class="col-md-4 col-md-offset-4 text-center">
			<h2>Gallery Head Images</h2>
		</div>
	</div>

	<br> <br>

	<div class="row"> 
  <?php foreach($gallery_info_list as $gallery_info) { ?>
  	<div class="col-xs-4 col-sm-3 col-md-3 nopad text-center">
			<label class="image-checkbox"> <img class="img-responsive"
				src="<?php echo $gallery_info->head_image_path; ?>" /> <input
				type="checkbox" name="image[]" value="<?php echo $slide->id; ?>" />
				<i class="fa fa-check hidden"></i>
			</label>
			
			<?php if($slide->active) {?>
			<label><i>Active</i></label>
			 <?php }?>
	</div>  
  <?php }?>
</div>
	<br> <br>
	<div class="row">
		<div class="col-md-4 col-md-offset-4 text-center">
			<div class="btn-group ">
				<button type="button" class="btn btn-default">Activate</button>
				<button type="button" class="btn btn-default">Deactivate</button>
			</div>
		</div>
	</div>



	<hr>

	<br> <br>

	<div class="row">
		<div class="col-md-4 col-md-offset-4 text-center">
			<h2>Gallery Drop</h2>
		</div>
	</div>

	<br> <br>

	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<form class="form-inline">
				<label class="my-1 mr-2" for="galleryNameDropList">Gallery
					Name</label> <select class="form-control"
					id="galleryNameDropList">

					<option selected>Choose...</option>

<?php foreach($gallery_info_list as $gallery_info) { ?>				
					<option value="<?php echo $gallery_info->id?>"><?php echo $gallery_info->name;?></option>					
<?php }?>
				</select>


				<button type="submit" class="btn btn-default">Drop</button>
			</form>

		</div>

	</div>

	<hr>

	<br> <br>


	<div class="row">
		<div class="col-md-4 col-md-offset-4 text-center">
			<h2>Video</h2>
		</div>
	</div
	
	
	<br> <br>
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<form class="form-inline">
				<label class="my-1 mr-2" for="inlineFormCustomSelectPref">Video
					links</label> <select class="form-control"
					id="inlineFormCustomSelectPref">

					<option selected>Choose...</option>

<?php foreach($video_links as $video) { ?>				
					<option value="<?php echo $video->id?>"><?php echo $video->video_path;?></option>					
<?php }?>
				</select>


				<button type="submit" class="btn btn-default">Drop</button>
			</form>

		</div>

	</div>

</div>




<hr>
<script src="app/scripts/manage.js"></script>