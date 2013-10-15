<html>
	<head>
		<!-- common settings -->
		<?php include_once('head.html'); ?>
		<!-- page specific settings -->
		<title>Este Frauen | Bildergalerie</title>								<!-- TODO: keine Formulare für buttons -->
		<meta name="description" content="
			Die Bildergalerie der Frauen des SV Este 06/70.
		">
		<link rel="stylesheet" type="text/css" href="css/galery.css"/>
		<script type="text/javascript" src="js/galery.js"></script>
		<script type="text/javascript" src="js/display.js"></script>
		<script rel="text/javascript" src="js/common.js"></script>
	</head>
	<body>
		<!---------------------- header ------------------------------->
		<?php include_once('header.html'); ?>
		
		
		<!-------------------- content der Seite ---------------------->
		<!-- Fullview -->
		<div id="galery-preview--full" class="hidden"> <!-- onclick="hideElement( this.id );" -->
			<div class="button-prev" onclick=""></div>
			<!-- extra div um close button am Bild auszurichten -->
			<div class="galery-preview-img-full-wrapper">
				<div class="button-close" onclick="hideElement('galery-preview--full');"></div>
				<img src="http://miriadna.com/desctopwalls/images/max/Fairy-forest.jpg" class="galery-img--full" id="galery-preview-full-img">
			</div>
			<div class="button-next" onclick=""></div>
		</div>
		
		
		<div class="content">
			<div class="chronic">
				<ul>
					<li onclick="toggleDisplay('galery-preview--all');toggleDisplay('galery-preview--multiple');toggleDisplay('galery-preview--medium');">Alle Bilder</li>
					<li onclick="toggleDisplay('galery-preview--all');toggleDisplay('galery-preview--multiple');toggleDisplay('galery-preview--medium');">Galerie</li>
					<li onclick="showElement('galery-preview--full');">Full View</li>
				</ul>
			</div>
			<div class="galery-preview">
				
				
				<!-- show all pictures -->
				<div id="galery-preview--all" class="hidden">
					<h6 style="color: black">Überschrift</h6>
					<div class="galery-preview--all-images">
						<img src="http://miriadna.com/desctopwalls/images/max/Fairy-forest.jpg" class="galery-img--small"
							onclick="fullView( this.src );"
						>
						<img src="http://miriadna.com/desctopwalls/images/max/Fairy-forest.jpg" class="galery-img--small"
							onclick="fullView( this.src );"
						>
						<img src="http://miriadna.com/desctopwalls/images/max/Fairy-forest.jpg" class="galery-img--small"
							onclick="fullView( this.src );"
						>
						<img src="http://miriadna.com/desctopwalls/images/max/Fairy-forest.jpg" class="galery-img--small"
							onclick="fullView( this.src );"
						>
						<img src="http://miriadna.com/desctopwalls/images/max/Fairy-forest.jpg" class="galery-img--small"
							onclick="fullView( this.src );"
						>
						<img src="http://miriadna.com/desctopwalls/images/max/Fairy-forest.jpg" class="galery-img--small"
							onclick="fullView( this.src );"
						>
						<img src="http://miriadna.com/desctopwalls/images/max/Fairy-forest.jpg" class="galery-img--small"
							onclick="fullView( this.src );"
						>
						<img src="http://miriadna.com/desctopwalls/images/max/Fairy-forest.jpg" class="galery-img--small"
							onclick="fullView( this.src );"
						>
						<img src="http://miriadna.com/desctopwalls/images/max/Fairy-forest.jpg" class="galery-img--small"
							onclick="fullView( this.src );"
						>
						<img src="http://miriadna.com/desctopwalls/images/max/Fairy-forest.jpg" class="galery-img--small"
							onclick="fullView( this.src );"
						>
						<img src="http://miriadna.com/desctopwalls/images/max/Fairy-forest.jpg" class="galery-img--small"
							onclick="fullView( this.src );"
						>
						<img src="http://miriadna.com/desctopwalls/images/max/Fairy-forest.jpg" class="galery-img--small"
							onclick="fullView( this.src );"
						>
						<img src="http://miriadna.com/desctopwalls/images/max/Fairy-forest.jpg" class="galery-img--small"
							onclick="fullView( this.src );"
						>
						<img src="http://miriadna.com/desctopwalls/images/max/Fairy-forest.jpg" class="galery-img--small"
							onclick="fullView( this.src );"
						>
						<img src="http://miriadna.com/desctopwalls/images/max/Fairy-forest.jpg" class="galery-img--small"
							onclick="fullView( this.src );"
						>
						<img src="http://miriadna.com/desctopwalls/images/max/Fairy-forest.jpg" class="galery-img--small"
							onclick="fullView( this.src );"
						>
						<img src="http://miriadna.com/desctopwalls/images/max/Fairy-forest.jpg" class="galery-img--small"
							onclick="fullView( this.src );"
						>
						<img src="http://miriadna.com/desctopwalls/images/max/Fairy-forest.jpg" class="galery-img--small"
							onclick="fullView( this.src );"
						>
						<img src="http://miriadna.com/desctopwalls/images/max/Fairy-forest.jpg" class="galery-img--small"
							onclick="fullView( this.src );"
						>
						<img src="http://miriadna.com/desctopwalls/images/max/Fairy-forest.jpg" class="galery-img--small"
							onclick="fullView( this.src );"
						>
						<img src="http://miriadna.com/desctopwalls/images/max/Fairy-forest.jpg" class="galery-img--small"
							onclick="fullView( this.src );"
						>
					</div>
				</div>
				
				
				<!-- medium view -->
				<div id="galery-preview--multiple" class="round-corners" >
					<div class="button-prev" onclick=""></div>
					<img src="http://miriadna.com/desctopwalls/images/max/Fairy-forest.jpg" class="galery-img--small"
							onclick="fullView( this.src );"
					>
					<img src="http://miriadna.com/desctopwalls/images/max/Fairy-forest.jpg" class="galery-img--small"
							onclick="fullView( this.src );"
					>
					<img src="http://miriadna.com/desctopwalls/images/max/Fairy-forest.jpg" class="galery-img--small"
							onclick="fullView( this.src );"
					>
					<img src="http://miriadna.com/desctopwalls/images/max/Fairy-forest.jpg" class="galery-img--small"
							onclick="fullView( this.src );"
					>
					<div class="button-next" onclick=""></div>
				</div>
				<div class="round-corners" id="galery-preview--medium">
					<div class="button-prev" onclick=""></div>
					<img src="http://miriadna.com/desctopwalls/images/max/Fairy-forest.jpg" class="galery-img--big"
							onclick="fullView( this.src );"
					>
					<div class="button-next" onclick=""></div>
				</div>
				
			</div>
		</div>
		<!-- footer -->
		<?php include_once('footer.html'); ?>
	</body>
</html>
