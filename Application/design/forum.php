<html>
	<head>
		<!-- common settings -->
		<?php include_once('head.html'); ?>
		<!-- page specific settings -->
		<title>Este Frauen | Spielberichte</title>
		<meta name="description" content="
			Forum der Damen des Este 06/70.
		">
		<link rel="stylesheet" type="text/css" href="../../css/forum.css"/>
	</head>
	<body>
		<!------------------------ header ----------------------------->
		<?php include_once('header.html'); ?>
		
		<!------------------ content der Seite ------------------------>
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
					<h2 class="sidebar-title display-desktop">Forum</h2>
					<div id="menu-div" class="menublock-sidebar hidden-desktop">
						<h2 class="menu-title link" id="menu-sidebar" >Forum</h2>
					</div>
					<!-- Sidebar Menu -->
					<div id="box-menu-sidebar" class="menublock-sidebar menu-sidebar light-bg">
						<ul class="menu">
							<li>
								<a href="#">
									<span>Erster Punkt</span>
									<div class="forward-raquo menu-link right"></div>
								</a>

							</li>
							<li>
								<a href="#">
									<span>Zweiter Punkt</span>
									<div class="forward-raquo menu-link right"></div>
								</a>
							</li>
							<li>
								<a href="#">
									<span>Dritter Punkt</span>
									<div class="forward-raquo menu-link right"></div>
								</a>
							</li>
							<li>
								<a href="#">
									<span>Vierter Punkt</span>
									<div class="forward-raquo menu-link right"></div>
								</a>
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
					<ul>
						<?php for($i=1; $i<=12; $i++) : ?>					<!-- TODO anders befÃ¼llen -->
						<li class="one-col">
							<!-- reports -->
							<div  class="main-content-box box-borders-top bg clearfix toggle-item">
								<h2 class="box-title link toggle" id="address-name" >Box Ãœberschrift</h2>
								<div <?php echo ("id=\"submit-$i\"")?> class="box-link down-raquo toggle-link right toggle">
								</div>
								<div class="toggle-content" style="display: none">
									<div class="box-info clearfix light-bg">
										Beschreibung des Themas
									</div>
									<div class="box-body">
										<p>Zweiter Absatz mit ein wenig mehr Text und Informationen fÃ¼r alle. Und noch viel mehr! Zweiter Absatz mit ein wenig mehr Text und Informationen fÃ¼r alle. Und noch viel mehr!Zweiter Absatz mit ein wenig mehr Text und Informationen fÃ¼r alle. Und noch viel mehr!Zweiter Absatz mit ein wenig mehr Text und Informationen fÃ¼r alle. Und noch viel mehr! Zweiter Absatz mit ein wenig mehr Text und Informationen fÃ¼r alle. Und noch viel mehr! Zweiter Absatz mit ein wenig mehr Text und Informationen fÃ¼r alle. Und noch viel mehr!Zweiter Absatz mit ein wenig mehr Text und Informationen fÃ¼r alle. Und noch viel mehr!Zweiter Absatz mit ein wenig mehr Text und Informationen fÃ¼r alle. Und noch viel mehr!</p>
									</div>
									<!-- Contentbox Comments -->
									<div>
										<div  class="comment-content-box box-borders-top bg clearfix further-toggle-item">
											<h2 class="box-title link further-toggle" id="address-name" >Kommentare: X</h2>
											<div class="box-link down-raquo toggle-link further-toggle right">
											</div>
											<div class="further-toggle-content" style="display: none">
													<div class="box-body box-borders-bottom">
														<div class="comments">
															<div class="comment">
																<p class="comment-name">Name</p>
																<p class="comment-content">Ein Kommentar zu diesem Thema.</p>
																<div class="button-delete online-only"></div>
															</div>
															<div class="comment">
																<p class="comment-name">Name</p>
																<p class="comment-content">Ein Kommentar zu diesem Thema. Ein Kommentar zu diesem Thema.Ein Kommentar zu diesem Thema.Ein Kommentar zu diesem Thema.Ein Kommentar zu diesem Thema.Ein Kommentar zu diesem Thema.Ein Kommentar zu diesem Thema.</p>
																<div class="button-delete online-only"></div>
															</div>
														</div>
													</div>
												</div>
										</div>
									<div>
									<!-- end Comment Box -->
								</div>
							</div>
							<!-- reports -->
						</li>
						<?php endfor ?>
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

		<!--------------------------- footer -------------------------->
		<?php include_once('footer.html'); ?>
	</body>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.toggle-item').each(function(idx, itm) {
                $(itm).find('.toggle').on('click', function() {
                    $(itm).find('.toggle-content').toggle(200);
                });
            });
        });
        $(document).ready(function() {
            $('.further-toggle-item').each(function(idx, itm) {
                $(itm).find('.further-toggle').on('click', function() {
                    $(itm).find('.further-toggle-content').toggle(200);
                });
            });
        });
    </script>
</html>
