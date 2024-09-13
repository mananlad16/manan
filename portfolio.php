<?php
include 'header.php';
?>
<div class="bodyContent">
<div class="pageCointainer">
<section class="comonSection portfolioSection">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12">
<h2 class="sectionTitle">Latest Projects</h2>
</div>
</div>
<div class="row">
	<div class="col-lg-12">
		<ul class="filterUL">
			<li class="active filter" data-filter="all">All</li>
			<li class="filter" data-filter="soft-dev">Software Development</li>
			<li class="filter" data-filter="web-app">Web Appliation</li>
		</ul>
	</div>
</div>
<div class="row" id="Grid">
	<div class="col-lg-4 folio_effect mix web-app mix_all" style="display: inline-block;  opacity: 1;">
		<div class="folio_item">
			<a href="web-application.php" class="folio_item_thumbs">
			<div class="folio_stack">
				<div class="folio_decoration" style="opacity: 0; transform: translateY(0px) rotate(0deg) scale(1);"></div>
				<div class="folio_decoration" style="opacity: 0; transform: translateY(0px) rotate(0deg) scale(1);"></div>
				<div class="folio_decoration" style="opacity: 0; transform: translateY(0px) rotate(0deg) scale(1);"></div>
				<div class="folio_decoration" style="opacity: 0; transform: translateY(0px) rotate(0deg) scale(1);"></div>
				<div class="folio_img_holder" style="opacity: 1; transform: translateY(0px) rotate(0deg) scale(1);">
				<img class="folio_img" src="assets/images/folio/web-app.jpg" alt="Image" style="transform: scale(1);">
				</div>
			</div>
			</a>
			<div class="folio_content">
			<h3 class="folio_title"><a href="web-application.php">Web Application</a></h3>
			<p class="folio_cat"><a href="web-application.php">Development</a></p>
			</div>
		</div>
	</div>
	<div class="col-lg-4 folio_effect mix soft-dev mix_all" style="display: inline-block;  opacity: 1;">
		<div class="folio_item">
			<a href="single_software.php" class="folio_item_thumbs">
			<div class="folio_stack">
				<div class="folio_decoration" style="opacity: 0; transform: translateY(0px) rotate(0deg) scale(1);"></div>
				<div class="folio_decoration" style="opacity: 0; transform: translateY(0px) rotate(0deg) scale(1);"></div>
				<div class="folio_decoration" style="opacity: 0; transform: translateY(0px) rotate(0deg) scale(1);"></div>
				<div class="folio_decoration" style="opacity: 0; transform: translateY(0px) rotate(0deg) scale(1);"></div>
				<div class="folio_img_holder" style="opacity: 1; transform: translateY(0px) rotate(0deg) scale(1);">
				<img class="folio_img" src="assets/images/folio/software-development.jpg" alt="Image" style="transform: scale(1);">
				</div>
			</div>
			</a>
			<div class="folio_content">
				<h3 class="folio_title"><a href="single_software.php">Software</a></h3>
				<p class="folio_cat"><a href="single_software.php">Development</a></p>
			</div>
		</div>
	</div>
</div>

</div>
</section>

</div>
</div>
<?php
include 'footer.php';
?>