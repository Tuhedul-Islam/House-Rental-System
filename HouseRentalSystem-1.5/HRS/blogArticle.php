<?php

function housePrint( $hDeatails ){
	?>
	<article class="card mb-5">
	  <div class="card-body p-5">
		<small class="d-block-2"><?php echo $hDeatails['date'] ;?></small>
		<h2 class="h5">
		  <a href="#"><?php echo $hDeatails["houseName"] ;?></a>
		</h2>
		<p class="mb-0"><?php echo $hDeatails["description"] ;?></p>
	  </div>
	  <div class="card-footer bg-gray-100 py-4 px-5">
		<div class="media">
		  <img class="u-sm-avatar rounded-circle mr-3" src="assets/img/img2.jpg" alt="Image">
		  <div class="media-body">
			<h3 class="d-inline-block mb-0">
			  <a class="d-block font-size-13" href="#"><?php echo $hDeatails["houseOwner"] ;?></a>
			</h3>
		  </div>
		</div>
	  </div>
	</article>
	<?php
}


	
?>