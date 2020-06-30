<!DOCTYPE html>
<html lang="en">

<?php include 'inc/header.tpl'; ?>

<body class="body">

	<!-- page 404 -->
	<div class="page-404 section--bg" data-bg="img/section/section.jpg">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="page-404__wrap">
						<div class="page-404__content">
							<h1 class="page-404__title"><?php echo $data['errorCode']; ?></h1>
							<p class="page-404__text"><?php echo $data['msg']; ?></p>
							<a href="../../" class="page-404__btn"><?php echo GO_BACK; ?></a>
						</div>
					</div>
				</div>
			</div>
		</div>

		
		
	</div>


	
</body>



	<!-- JS -->
	<script src="<?php echo TEMPLATE_ASSETS; ?>js/jquery-3.3.1.min.js"></script>
	<script src="<?php echo TEMPLATE_ASSETS; ?>js/bootstrap.bundle.min.js"></script>
	<script src="<?php echo TEMPLATE_ASSETS; ?>js/owl.carousel.min.js"></script>
	<script src="<?php echo TEMPLATE_ASSETS; ?>js/jquery.mousewheel.min.js"></script>
	<script src="<?php echo TEMPLATE_ASSETS; ?>js/jquery.mCustomScrollbar.min.js"></script>
	<script src="<?php echo TEMPLATE_ASSETS; ?>js/wNumb.js"></script>
	<script src="<?php echo TEMPLATE_ASSETS; ?>js/nouislider.min.js"></script>
	<script src="<?php echo TEMPLATE_ASSETS; ?>js/plyr.min.js"></script>
	<script src="<?php echo TEMPLATE_ASSETS; ?>js/jquery.morelines.min.js"></script>
	<script src="<?php echo TEMPLATE_ASSETS; ?>js/photoswipe.min.js"></script>
	<script src="<?php echo TEMPLATE_ASSETS; ?>js/photoswipe-ui-default.min.js"></script>
	<script src="<?php echo TEMPLATE_ASSETS; ?>js/main.js"></script>

</html>