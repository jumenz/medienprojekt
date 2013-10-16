<html>
	<head>
		<!-- common settings -->
		<?php include_once('head.html'); ?>
		<!-- page specific settings -->
		<title>Este Frauen | Bildergalerie</title>								<!-- TODO: keine Formulare für buttons -->
		<meta name="description" content="
			Die Bildergalerie der Frauen des SV Este 06/70.
		">
		<link rel="stylesheet" type="text/css" href="../../css/galery.css"/>
		<script type="text/javascript" src="../../js/galery.js"></script>
		<script type="text/javascript" src="../../js/display.js"></script>
		<script rel="text/javascript" src="../../js/common.js"></script>
	</head>
	<body>
		<!---------------------- header ------------------------------->
		<?php include_once('header.html'); ?>
		
		<!-- Fullview -->
		<div id="galery_preview--full" class="hidden"> <!-- onclick="hideElement( this.id );" -->
			<div class="button_prev" onclick=""></div>
			<!-- extra div um close button am Bild auszurichten -->
			<div class="galery_preview_img_full_wrapper">
				<div class="button_close" onclick="hideElement('galery_preview--full');"></div>
				<img src="http://miriadna.com/desctopwalls/images/max/Fairy-forest.jpg" class="galery_img--full" id="galery_preview_full_img">
			</div>
			<div class="button_next" onclick=""></div>
		</div>
		
		<div class="main-container">
			<!------------------------- Content ----------------------->
			<div class="container">
				<div class="main">
					<div class="main-inner">
						<!-- Sidebar -->
						<div id="sidebar" class="content-layout-cell sidebar">
							<div class="outer">
								<div class="inner">
									<div class="content-list dark-bg">
										<h2 class="sidebar-title display-desktop">Menü</h2>
										<div id="menu-div" class="menublock-sidebar hidden-desktop">
											<h2 class="menu-title link" id="menu-sidebar" >Menü</h2>
										</div>
										<!-- Sidebar Menu -->
										<div id="box-menu-sidebar" class="menublock-sidebar menu-sidebar light-bg">
											<ul class="menu">
												<li onclick="toggleDisplay('galery_preview--all');toggleDisplay('galery_preview--multiple');toggleDisplay('galery_preview--medium');">
													<span>Alle Bilder</span>
													<div class="forward-raquo menu-link right"></div>
												</li>
												<li onclick="toggleDisplay('galery_preview--all');toggleDisplay('galery_preview--multiple');toggleDisplay('galery_preview--medium');">
													<span>Galerie</span>
													<div class="forward-raquo menu-link right"></div>
												</li>
												<li onclick="showElement('galery_preview--full')">
													<span>Vollbild</span>
													<div class="forward-raquo menu-link right"></div>
												</li>
											</ul>
										</div>
										<script type="text/javascript">
											var menuVisible = 0;
											$(function() {
												$('#menu-sidebar').click(function(e){
													e.preventDefault();
													if (menuVisible === 0) {
														// Box is currently hidden, show it:
														$('#box-menu-sidebar').slideDown(200);
														menuVisible = 1;
													} else {
														// Box is currently shown, hide it:
														$('#box-menu-sidebar').slideUp(200);
														menuVisible = 0;
													}
												});
											});
										</script>
										<!-- end Sidebar Menu -->
										<!-- Timer -->
										<div class="menublock-sidebar timer">
											<div class="timer-inner">
												<ul class="timer-menu display-desktop">
													<li>
														<a href="#" class="back">
															<div class="back-raquo menu-link left"></div>
														</a>
													</li>
													<li class="center">
														<span>2013</span>
													</li>
													<li>
														<a href="#" class="forward">
															<div class="forward-raquo menu-link right"></div>
														</a>
													</li>
												</ul>
												<ul class="timer-content">
													<li class="hidden-desktop double-width">
														<a href="#" class="timer-link">
															<div class="list-item bg double-width">
																<span>2012</span>
															</div>
														</a>
													</li>
													<?php for($i=1; $i<=12; $i++) : ?>
														<li>
															<a href="#" id="item-<?php echo $i ?>" class="timer-link">
																<div class="list-item bg">
																	<span><?php echo $i ?></span>
																</div>
															</a>
														</li>
													<?php endfor ?>
													<li class="hidden-desktop double-width">
														<a href="#" class="timer-link">
															<div class="list-item bg double-width">
																<span>2014</span>
															</div>
														</a>
													</li>
												</ul>
											</div>
										</div>
										<!-- end Timer -->
										<!-- ABC -->
										<div class="menublock-sidebar timer">
											<div class="timer-inner">
												<ul class="timer-content">
													
												</ul>
											</div>
										</div>
										<!-- end ABC -->
									</div>
								</div>
							</div>
						</div>

						<!-- main Content small-->
						<div id="main-content-small" class="content-layout-cell main-content main-content-small">
							<div class="outer">
								<div class="inner">

									<div class="content-list">
										<!--Contentbox One-Col -->
										<ul>
											<li class="one-col">
												<div class="main-content-box box-borders bg clearfix">
													<div class="box-body">
														<!-- show all pictures -->
														<div id="galery_preview--all" class="hidden">
															<div class="galery_preview--all_images">
																<?php for($i=1; $i<=50; $i++) : ?>
																<img src="http://miriadna.com/desctopwalls/images/max/Fairy-forest.jpg" class="galery_img--small"
																	onclick="fullView( this.src );"
																>
																<?php endfor ?>
															</div>
														</div>
														
														
														<!-- medium view -->
														<div id="galery_preview--multiple" class="round_corners" >
															<div class="button_prev" onclick=""></div>
															<?php for($i=1; $i<=4; $i++) : ?>
															<img src="http://miriadna.com/desctopwalls/images/max/Fairy-forest.jpg" class="galery_img--small"
																onclick="fullView( this.src );"
															>
															<?php endfor ?>
															<div class="button_next" onclick=""></div>
														</div>
														<div class="round_corners" id="galery_preview--medium">
															<div class="button_prev" onclick=""></div>
															<img src="http://miriadna.com/desctopwalls/images/max/Fairy-forest.jpg" class="galery_img--big"
																	onclick="fullView( this.src );"
															>
															<div class="button_next" onclick=""></div>
														</div>
													</div>
													<h2 class="box-title">Box Überschrift</h2>
												</div>
											</li>
										</ul>
										<!-- end Contentbox One-Col -->

									</div>
								</div>
							</div>
						</div>
						<!-- end main Content small-->

					</div>
				</div>
			</div>
			<!-- end Content -->
		</div>

		<!-- footer -->
		<?php include_once('footer.html'); ?>
	</body>
</html>
