<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Diversión Huancayo | lo mejor de la vida nocturna</title>
		<link rel="icon" href="img/logo.svg">
		<!-- CSS FILES -->
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/css/uikit.min.css">
		<link rel="stylesheet" type="text/css" href="css/cards.css">


		<!-- ADD METAS -->
    	<?php 
	        // obteniendo la url de la web
	        $host= $_SERVER["HTTP_HOST"];
	        $url= $_SERVER["REQUEST_URI"];
	     ?>
	    <meta property='og:site_name' content='Diversión Huancayo | lo mejor de la vida nocturna'/>
	    <meta property='og:locale' content='es_PE'/>  <!-- <meta property='og:locale' content='es_PE'/  -->
	    <meta property='og:type' content='website'/>  <!-- (El tipo de contenido. En mi caso es mi web, puedes poner “Article”) -->
	    <meta property="og:title" content="Diversión Huancayo | lo mejor de la vida nocturna" /> <!-- (Aquí es muy personal. Yo puse un llamado a la acción corto, para evitar que se corten mis títulos por su longitud) -->  
	    <meta property="og:description" content="Ganate con los mejores cupones de descuento para poder divertirte con tus amigos en los mejores lugares de huancayo" /> <!-- (Si lo puedes hacer un resumen dentro de 130 – 140 caracteres. Genial) -->
	    <meta property="og:url" content="<?php echo "http://".$host.$url; ?>" /> <!--  -->
	    <meta property="og:image" content="img/6808448_o.jpg" /> <!-- (Debe estar la ruta absoluta. Es decir: http://www.mipagina.com/img/imagen.jpg) -->

	    
	    <script>
	      var requirejs = {
	        onNodeCreated: function(node) {
	          var src = node.getAttribute('src');
	          var shouldIgnore = ['googletagmanager.com', 'google-analytics.com', 'googleadservices.com', 'doubleclick.net', 'connect.facebook.net'].some(function (domain) {
	              return src.indexOf(domain) !== -1;
	          });
	          if (!shouldIgnore) {
	              node.setAttribute('crossorigin', 'anonymous')
	          }
	        }
	      }
	    </script>
	    
	    <script>
	      window.messageBuffer = [];
	      window.messageHandler = function(event) {messageBuffer.push(event)};
	      window.addEventListener('message', window.messageHandler, false);
	    </script>
	    <!-- END ADD METAS -->

		<!--END Metas para cache-->
		<META NAME="GOOGLEBOT" CONTENT="ARCHIVE">
		<meta name="author" content="Junior Yauricasa">
		<link rel="icon" type="image/png" href="images/logo.png" />
		<META NAME="robots" CONTENT="index,follow,ALL"> 

	</head>
	<body data-uk-filter="target: .js-filter" id="style-3">
		
		<!--HEADER-->
		<header id="site-head">
			<div class="uk-container uk-container-expand">
				<div class="uk-grid uk-grid-medium uk-flex uk-flex-middle" data-uk-grid>
					<div class="uk-width-auto">
						<a href="#" class="uk-logo" title=""><img src="img/logo.svg" alt=""></a>
					</div>
					<div class="uk-width-expand">
						<form id="search-form" action="">
							<div class="uk-inline uk-width-1-1">
								<span class="uk-form-icon uk-form-icon-flip" data-uk-icon="icon: search"></span>
								<input class="uk-input uk-width-1-1 search-fld" type="text" placeholder="Que buscas?" autofocus>
								<a href="#" class="search-filter" data-uk-filter-control="[data-tags*='']" hidden>Search</a>
							</div>
						</form>
					</div>
					<div class="uk-width-auto">
						<ul class="uk-subnav" data-uk-margin>
							<li class="uk-visible@s"><a href="#">Inicio</a></li>
							<li class="uk-visible@s"><a href="#">Nosotros</a></li>
							<li class="uk-visible@s">
								<a href="#" data-uk-icon="icon:comments"></a>
								<div class="drop-nav drop-comments uk-dropdown" data-uk-dropdown="mode: click; offset: 20;animation: uk-animation-slide-bottom-small; duration: 150">
									<ul class="uk-child-width-expand" data-uk-tab="animation: uk-animation-fade">
										<li><a href="#">Mensajes</a></li>
										<li><a href="#">Actividad</a></li>
									</ul>
									<ul class="uk-switcher uk-margin">
										<li class="uk-height-small uk-overflow-auto"  id="style-3">
											<div class="message">
												Excepteur sint occaecat cupidatat non
												proident, sunt in culpa qui officia deserunt mollit anim id est laborum...<a href="" class="uk-link">VIEW MESSAGE</a>
											</div>
											<div class="message">
												Excepteur sint occaecat cupidatat non
												proident, sunt in culpa qui officia deserunt mollit anim id est laborum...<a href="" class="uk-link">VIEW MESSAGE</a>
											</div>
											<div class="message">
												Excepteur sint occaecat cupidatat non
												proident, sunt in culpa qui officia deserunt mollit anim id est laborum...<a href="" class="uk-link">VIEW MESSAGE</a>
											</div>
											<div class="message">
												Excepteur sint occaecat cupidatat non
												proident, sunt in culpa qui officia deserunt mollit anim id est laborum...<a href="" class="uk-link">VIEW MESSAGE</a>
											</div>
										</li>
										<li>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
									</ul>
								</div>
							</li>
							<li class="uk-visible@s">
								<a href="#" data-uk-icon="icon:more"></a>
								<div class="drop-nav uk-dropdown" data-uk-dropdown="mode: click; offset: 20;animation: uk-animation-slide-bottom-small; duration: 150">
									<h4 class="uk-margin-small-bottom uk-margin-remove-adjacent">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h4>
									<p class="uk-text-small uk-text-muted">Excepteur sint occaecat cupidatat non
									proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
									<hr>
									<a href="#" class="uk-button uk-button-primary uk-width-1-1">UPDATE YOUR ACCOUNT</a>
									<hr>
									<ul class="uk-nav-default uk-nav-parent-icon" data-uk-nav>
										<li class="uk-nav-header">Header</li>
										<li><a href="#"><span class="uk-margin-small-right" data-uk-icon="icon: table"></span> Item</a></li>
										<li><a href="#"><span class="uk-margin-small-right" data-uk-icon="icon: thumbnails"></span> Item</a></li>
										<li class="uk-nav-divider"></li>
										<li><a href="#"><span class="uk-margin-small-right" data-uk-icon="icon: trash"></span> Item</a></li>
									</ul>
								</div>
							</li>
							<li class="uk-hidden@s"><a data-uk-navbar-toggle-icon data-uk-toggle href="#offcanvas-nav"></a></li>
						</ul>
					</div>
				</div>
			</div>
		</header>
		<!--/HEADER-->
		<div class="spacer"></div>

		<!-- large image -->
		<!-- para cambiar las dimensiones del abnner es modificando al escala -->
		<div class="uk-position-relative uk-visible-toggle uk-light" data-uk-slideshow="ratio: 15:5; animation: push; min-height: 270;">
			<ul class="uk-slideshow-items">
				<li>
					<img data-src="https://pbs.twimg.com/media/DUZmoRoX0AA43rv.jpg" data-uk-img="target: !.uk-slideshow-items" alt="" data-uk-cover>
					<div class="uk-position-bottom uk-position-medium uk-text-center uk-light">
						<h3 class="uk-margin-remove">Sed consequat urna.</h3>
						<p class="uk-margin-remove uk-visible@s">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
					</div>
				</li>
				<li>
					<img data-src="https://flexa-barcelona.es/media/wysiwyg/flexa_es/Juegos/juegos-y-diversion.jpg" data-uk-img="target: !.uk-slideshow-items" alt="" data-uk-cover>
					<div class="uk-position-bottom uk-position-medium uk-text-center uk-light">
						<h3 class="uk-margin-remove">Sed consequat urna.</h3>
						<p class="uk-margin-remove uk-visible@s">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
					</div>
				</li>
				<li>
					<img data-src="https://www.pequeviajes.com/wp-content/uploads/2016/08/water-world-1200x500_c.jpg" data-uk-img="target: !.uk-slideshow-items" alt="" data-uk-cover>
					<div class="uk-position-bottom uk-position-medium uk-text-center uk-light">
						<h3 class="uk-margin-remove">Sed consequat urna.</h3>
						<p class="uk-margin-remove uk-visible@s">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
					</div>
				</li>
			</ul>
			<a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" data-uk-slidenav-previous="ratio: 1.5" data-uk-slideshow-item="previous"></a>
			<a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" data-uk-slidenav-next="ratio: 1.5" data-uk-slideshow-item="next"></a>
		</div>
		<!-- /large image -->


		<!--CARDS WRAPPER-->
		<section class="uk-section uk-section-small uk-section-default uk-padding-remove-bottom">
			<div class="uk-container uk-container-expand uk-margin-large-bottom">
				<ul class="uk-subnav uk-subnav-pill">
					<li class="uk-active" data-uk-filter-control><a href="#">Ver todo</a></li>
					<li data-uk-filter-control=".nature-card"><a href="#">Naturaleza</a></li>
					<li data-uk-filter-control=".music-card"><a href="#">Musica</a></li>
					<li data-uk-filter-control=".photo-card"><a href="#">Fotografia</a></li>
					<li data-uk-filter-control=".design-card"><a href="#">Diseño</a></li>
				</ul>
				<div class="uk-grid uk-grid-medium uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-4@l  uk-child-width-1-5@xl uk-grid-match js-filter" data-uk-grid="masonry: true" data-uk-sortable="handle: .drag-icon">
					
					<!-- card -->
					<div class="nature-card" data-tags="a beautiful landscape - nature outdoor">
						<div class="uk-card uk-card-small uk-card-default">
							<div class="uk-card-header">
								<div class="uk-grid uk-grid-small uk-text-small" data-uk-grid>
									<div class="uk-width-expand">
										<span class="cat-txt">Nature / Outdoor</span>
									</div>
									<div class="uk-width-auto uk-text-right uk-text-muted">
										<span data-uk-icon="icon:clock; ratio: 0.8"></span> 3 min.
									</div>
								</div>
							</div>
							<div class="uk-card-media">
								<div class="uk-inline-clip uk-transition-toggle" tabindex="0">
									<img class="lazy" data-src="https://picsum.photos/400/300/?random=5" data-width="400" data-height="300" data-uk-img alt="" src="img/transp.gif">
									<div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-primary">
										<span data-uk-icon="icon:heart; ratio: 0.8"></span> 12.345 <span data-uk-icon="icon:comment; ratio: 0.8"></span> 12.345
									</div>
								</div>
								
							</div>
							<div class="uk-card-body">
								<h6 class="uk-margin-small-bottom uk-margin-remove-adjacent uk-text-bold">A BEAUTIFUL LANDSCAPE HERE</h6>
								<p class="uk-text-small uk-text-muted">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, cumque. Ut ab vel culpa tempora, similique modi voluptates unde repellat. Maiores cupiditate, laborum temporibus pariatur obcaecati veniam esse saepe repellat!
								</p>
							</div>
							<div class="uk-card-footer">
								<div class="uk-grid uk-grid-small uk-grid-divider uk-flex uk-flex-middle" data-uk-grid>
									<div class="uk-width-expand uk-text-small">
										John Doe
									</div>
									<div class="uk-width-auto uk-text-right">
										<a href="#" data-uk-tooltip="title: Twitter" class="uk-icon-link" data-uk-icon="icon:twitter; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Instagram" class="uk-icon-link" data-uk-icon="icon:instagram; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Behance" class="uk-icon-link" data-uk-icon="icon:behance; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Pinterest" class="uk-icon-link" data-uk-icon="icon:pinterest; ratio: 0.8"></a>
									</div>
									<div class="uk-width-auto uk-text-right">
										<a data-uk-tooltip="title: Drag this card" href="#" class="uk-icon-link drag-icon" data-uk-icon="icon:move; ratio: 1"></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /card -->
					<!-- card -->
					<div class="music-card" data-tags="amazing music band here - music bands">
						<div class="uk-card uk-card-small uk-card-default">
							<div class="uk-card-header">
								<div class="uk-grid uk-grid-small uk-text-small" data-uk-grid>
									<div class="uk-width-expand">
										<span class="cat-txt">MUSIC / BANDS</span>
									</div>
									<div class="uk-width-auto uk-text-right uk-text-muted">
										<span data-uk-icon="icon:clock; ratio: 0.8"></span> 6 min.
									</div>
								</div>
							</div>
							<div class="uk-card-media">
								<div class="uk-inline-clip uk-transition-toggle" tabindex="0">
									<img class="lazy" data-src="https://picsum.photos/400/470/?random=4" data-width="400" data-height="470" data-uk-img alt="" src="img/transp.gif">
									<div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-primary">
										<span data-uk-icon="icon:heart; ratio: 0.8"></span> 12.345 <span data-uk-icon="icon:comment; ratio: 0.8"></span> 12.345
									</div>
								</div>
							</div>
							<div class="uk-card-body">
								<h6 class="uk-margin-small-bottom uk-margin-remove-adjacent uk-text-bold">AMAZING MUSIC BAND HERE</h6>
								<p class="uk-text-small uk-text-muted">Duis aute irure dolor in reprehenderit in voluptate velit</p>
							</div>
							<div class="uk-card-footer">
								<div class="uk-grid uk-grid-small uk-grid-divider uk-flex uk-flex-middle" data-uk-grid>
									<div class="uk-width-expand uk-text-small">
										John Doe
									</div>
									<div class="uk-width-auto uk-text-right">
										<a href="#" data-uk-tooltip="title: Twitter" class="uk-icon-link" data-uk-icon="icon:twitter; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Instagram" class="uk-icon-link" data-uk-icon="icon:instagram; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Behance" class="uk-icon-link" data-uk-icon="icon:behance; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Pinterest" class="uk-icon-link" data-uk-icon="icon:pinterest; ratio: 0.8"></a>
									</div>
									<div class="uk-width-auto uk-text-right">
										<a data-uk-tooltip="title: Drag this card" href="#" class="uk-icon-link drag-icon" data-uk-icon="icon:move; ratio: 1"></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /card -->
					<!-- card -->
					<div class="music-card" data-tags="video music awards pictures - music bands">
						<div class="uk-card uk-card-small uk-card-default">
							<div class="uk-card-header">
								<div class="uk-grid uk-grid-small uk-text-small" data-uk-grid>
									<div class="uk-width-expand">
										<span class="cat-txt">MUSIC / BANDS</span>
									</div>
									<div class="uk-width-auto uk-text-right uk-text-muted">
										<span data-uk-icon="icon:clock; ratio: 0.8"></span> 12 min.
									</div>
								</div>
							</div>
							<div class="uk-card-media">
								<div class="uk-inline-clip uk-transition-toggle" tabindex="0">
									<img class="lazy" data-src="https://picsum.photos/400/400/?random=3" data-width="400" data-height="400" data-uk-img alt="" src="img/transp.gif">
									<div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-primary">
										<span data-uk-icon="icon:heart; ratio: 0.8"></span> 12.345 <span data-uk-icon="icon:comment; ratio: 0.8"></span> 12.345
									</div>
								</div>
							</div>
							<div class="uk-card-body">
								<h6 class="uk-margin-small-bottom uk-margin-remove-adjacent uk-text-bold">VIDEO MUSIC AWARDS PICTURES</h6>
								<p class="uk-text-small uk-text-muted">Duis aute irure dolor in reprehenderit in voluptate velit</p>
							</div>
							<div class="uk-card-footer">
								<div class="uk-grid uk-grid-small uk-grid-divider uk-flex uk-flex-middle" data-uk-grid>
									<div class="uk-width-expand uk-text-small">
										John Doe
									</div>
									<div class="uk-width-auto uk-text-right">
										<a href="#" data-uk-tooltip="title: Twitter" class="uk-icon-link" data-uk-icon="icon:twitter; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Instagram" class="uk-icon-link" data-uk-icon="icon:instagram; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Behance" class="uk-icon-link" data-uk-icon="icon:behance; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Pinterest" class="uk-icon-link" data-uk-icon="icon:pinterest; ratio: 0.8"></a>
									</div>
									<div class="uk-width-auto uk-text-right">
										<a data-uk-tooltip="title: Drag this card" href="#" class="uk-icon-link drag-icon" data-uk-icon="icon:move; ratio: 1"></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /card -->
					<!-- card -->
					<div class="design-card"  data-tags="trends in design world - design">
						<div class="uk-card uk-card-small uk-card-default">
							<div class="uk-card-header">
								<div class="uk-grid uk-grid-small uk-text-small" data-uk-grid>
									<div class="uk-width-expand">
										<span class="cat-txt">DESIGN</span>
									</div>
									<div class="uk-width-auto uk-text-right uk-text-muted">
										<span data-uk-icon="icon:clock; ratio: 0.8"></span> 18 min.
									</div>
								</div>
							</div>
							<div class="uk-card-media">
								<div class="uk-inline-clip uk-transition-toggle" tabindex="0">
									<img class="lazy" data-src="https://picsum.photos/400/460/?random=2" data-width="400" data-height="460" data-uk-img alt="" src="img/transp.gif">
									<div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-primary">
										<span data-uk-icon="icon:heart; ratio: 0.8"></span> 12.345 <span data-uk-icon="icon:comment; ratio: 0.8"></span> 12.345
									</div>
								</div>
							</div>
							<div class="uk-card-body">
								<h6 class="uk-margin-small-bottom uk-margin-remove-adjacent uk-text-bold">TRENDS IN DESIGN WORLD</h6>
								<p class="uk-text-small uk-text-muted">Duis aute irure dolor in reprehenderit in voluptate velit</p>
							</div>
							<div class="uk-card-footer">
								<div class="uk-grid uk-grid-small uk-grid-divider uk-flex uk-flex-middle" data-uk-grid>
									<div class="uk-width-expand uk-text-small">
										John Doe
									</div>
									<div class="uk-width-auto uk-text-right">
										<a href="#" data-uk-tooltip="title: Twitter" class="uk-icon-link" data-uk-icon="icon:twitter; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Instagram" class="uk-icon-link" data-uk-icon="icon:instagram; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Behance" class="uk-icon-link" data-uk-icon="icon:behance; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Pinterest" class="uk-icon-link" data-uk-icon="icon:pinterest; ratio: 0.8"></a>
									</div>
									<div class="uk-width-auto uk-text-right">
										<a data-uk-tooltip="title: Drag this card" href="#" class="uk-icon-link drag-icon" data-uk-icon="icon:move; ratio: 1"></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /card -->
					<!-- card -->
					<div class="photo-card"  data-tags="amazing pictures - photography">
						<div class="uk-card uk-card-small uk-card-default">
							<div class="uk-card-header">
								<div class="uk-grid uk-grid-small uk-text-small" data-uk-grid>
									<div class="uk-width-expand">
										<span class="cat-txt">PHOTOGRAPHY</span>
									</div>
									<div class="uk-width-auto uk-text-right uk-text-muted">
										<span data-uk-icon="icon:clock; ratio: 0.8"></span> 23 min.
									</div>
								</div>
							</div>
							<div class="uk-card-media">
								<div class="uk-inline-clip uk-transition-toggle" tabindex="0">
									<img class="lazy" data-src="https://picsum.photos/400/200/?random=1" data-width="400" data-height="200" data-uk-img alt="" src="img/transp.gif">
									<div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-primary">
										<span data-uk-icon="icon:heart; ratio: 0.8"></span> 12.345 <span data-uk-icon="icon:comment; ratio: 0.8"></span> 12.345
									</div>
								</div>
								
							</div>
							<div class="uk-card-body">
								<h6 class="uk-margin-small-bottom uk-margin-remove-adjacent uk-text-bold">AMAZING PICTURES</h6>
								<p class="uk-text-small uk-text-muted">Duis aute irure dolor in reprehenderit in voluptate velit</p>
							</div>
							<div class="uk-card-footer">
								<div class="uk-grid uk-grid-small uk-grid-divider uk-flex uk-flex-middle" data-uk-grid>
									<div class="uk-width-expand uk-text-small">
										John Doe
									</div>
									<div class="uk-width-auto uk-text-right">
										<a href="#" data-uk-tooltip="title: Twitter" class="uk-icon-link" data-uk-icon="icon:twitter; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Instagram" class="uk-icon-link" data-uk-icon="icon:instagram; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Behance" class="uk-icon-link" data-uk-icon="icon:behance; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Pinterest" class="uk-icon-link" data-uk-icon="icon:pinterest; ratio: 0.8"></a>
									</div>
									<div class="uk-width-auto uk-text-right">
										<a data-uk-tooltip="title: Drag this card" href="#" class="uk-icon-link drag-icon" data-uk-icon="icon:move; ratio: 1"></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /card -->
					<!-- card -->
					<div class="photo-card"  data-tags="amazing nature pictures - photograhy">
						<div class="uk-card uk-card-small uk-card-default">
							<div class="uk-card-header">
								<div class="uk-grid uk-grid-small uk-text-small" data-uk-grid>
									<div class="uk-width-expand">
										<span class="cat-txt">PHOTOGRAPHY</span>
									</div>
									<div class="uk-width-auto uk-text-right uk-text-muted">
										<span data-uk-icon="icon:clock; ratio: 0.8"></span> 46 min.
									</div>
								</div>
							</div>
							<div class="uk-card-media">
								<div class="uk-inline-clip uk-transition-toggle" tabindex="0">
									<img class="lazy" data-src="https://picsum.photos/400/360/?random=9" data-width="400" data-height="360" data-uk-img alt="" src="img/transp.gif">
									<div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-primary">
										<span data-uk-icon="icon:heart; ratio: 0.8"></span> 12.345 <span data-uk-icon="icon:comment; ratio: 0.8"></span> 12.345
									</div>
								</div>
								
							</div>
							<div class="uk-card-body">
								<h6 class="uk-margin-small-bottom uk-margin-remove-adjacent uk-text-bold">AMAZING LANDSCAPE PICTURES</h6>
								<p class="uk-text-small uk-text-muted">Duis aute irure dolor in reprehenderit in voluptate velit</p>
							</div>
							<div class="uk-card-footer">
								<div class="uk-grid uk-grid-small uk-grid-divider uk-flex uk-flex-middle" data-uk-grid>
									<div class="uk-width-expand uk-text-small">
										John Doe
									</div>
									<div class="uk-width-auto uk-text-right">
										<a href="#" data-uk-tooltip="title: Twitter" class="uk-icon-link" data-uk-icon="icon:twitter; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Instagram" class="uk-icon-link" data-uk-icon="icon:instagram; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Behance" class="uk-icon-link" data-uk-icon="icon:behance; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Pinterest" class="uk-icon-link" data-uk-icon="icon:pinterest; ratio: 0.8"></a>
									</div>
									<div class="uk-width-auto uk-text-right">
										<a data-uk-tooltip="title: Drag this card" href="#" class="uk-icon-link drag-icon" data-uk-icon="icon:move; ratio: 1"></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /card -->
					<!-- card -->
					<div class="nature-card"  data-tags="wildlife and nature pictures - nature outdoor">
						<div class="uk-card uk-card-small uk-card-default">
							<div class="uk-card-header">
								<div class="uk-grid uk-grid-small uk-text-small" data-uk-grid>
									<div class="uk-width-expand">
										<span class="cat-txt">Nature / Outdoor</span>
									</div>
									<div class="uk-width-auto uk-text-right uk-text-muted">
										<span data-uk-icon="icon:clock; ratio: 0.8"></span> 1 hr.
									</div>
								</div>
							</div>
							<div class="uk-card-media">
								<div class="uk-inline-clip uk-transition-toggle" tabindex="0">
									<img class="lazy" data-src="https://picsum.photos/400/300/?random=1" data-width="400" data-height="300" data-uk-img alt="" src="img/transp.gif">
									<div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-primary">
										<span data-uk-icon="icon:heart; ratio: 0.8"></span> 12.345 <span data-uk-icon="icon:comment; ratio: 0.8"></span> 12.345
									</div>
								</div>
								
							</div>
							<div class="uk-card-body">
								<h6 class="uk-margin-small-bottom uk-margin-remove-adjacent uk-text-bold">WILDLIFE AND NATURE PICTURES</h6>
								<p class="uk-text-small uk-text-muted">Duis aute irure dolor in reprehenderit in voluptate velit</p>
							</div>
							<div class="uk-card-footer">
								<div class="uk-grid uk-grid-small uk-grid-divider uk-flex uk-flex-middle" data-uk-grid>
									<div class="uk-width-expand uk-text-small">
										John Doe
									</div>
									<div class="uk-width-auto uk-text-right">
										<a href="#" data-uk-tooltip="title: Twitter" class="uk-icon-link" data-uk-icon="icon:twitter; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Instagram" class="uk-icon-link" data-uk-icon="icon:instagram; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Behance" class="uk-icon-link" data-uk-icon="icon:behance; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Pinterest" class="uk-icon-link" data-uk-icon="icon:pinterest; ratio: 0.8"></a>
									</div>
									<div class="uk-width-auto uk-text-right">
										<a data-uk-tooltip="title: Drag this card" href="#" class="uk-icon-link drag-icon" data-uk-icon="icon:move; ratio: 1"></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /card -->
					<!-- card -->
					<div class="music-card"  data-tags="amazing new rock band from england - music bands">
						<div class="uk-card uk-card-small uk-card-default">
							<div class="uk-card-header">
								<div class="uk-grid uk-grid-small uk-text-small" data-uk-grid>
									<div class="uk-width-expand">
										<span class="cat-txt">MUSIC / BANDS</span>
									</div>
									<div class="uk-width-auto uk-text-right uk-text-muted">
										<span data-uk-icon="icon:clock; ratio: 0.8"></span> 1 hr.
									</div>
								</div>
							</div>
							<div class="uk-card-media">
								<div class="uk-inline-clip uk-transition-toggle" tabindex="0">
									<img class="lazy" data-src="https://picsum.photos/400/470/?random=1" data-width="400" data-height="470" data-uk-img alt="" src="img/transp.gif">
									<div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-primary">
										<span data-uk-icon="icon:heart; ratio: 0.8"></span> 12.345 <span data-uk-icon="icon:comment; ratio: 0.8"></span> 12.345
									</div>
								</div>
								
							</div>
							<div class="uk-card-body">
								<h6 class="uk-margin-small-bottom uk-margin-remove-adjacent uk-text-bold">AMAZING NEW ROCK BAND FROM ENGLAND</h6>
								<p class="uk-text-small uk-text-muted">Duis aute irure dolor in reprehenderit in voluptate velit</p>
							</div>
							<div class="uk-card-footer">
								<div class="uk-grid uk-grid-small uk-grid-divider uk-flex uk-flex-middle" data-uk-grid>
									<div class="uk-width-expand uk-text-small">
										John Doe
									</div>
									<div class="uk-width-auto uk-text-right">
										<a href="#" data-uk-tooltip="title: Twitter" class="uk-icon-link" data-uk-icon="icon:twitter; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Instagram" class="uk-icon-link" data-uk-icon="icon:instagram; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Behance" class="uk-icon-link" data-uk-icon="icon:behance; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Pinterest" class="uk-icon-link" data-uk-icon="icon:pinterest; ratio: 0.8"></a>
									</div>
									<div class="uk-width-auto uk-text-right">
										<a data-uk-tooltip="title: Drag this card" href="#" class="uk-icon-link drag-icon" data-uk-icon="icon:move; ratio: 1"></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /card -->
					<!-- card -->
					<div class="music-card"  data-tags="new album release today - music bands">
						<div class="uk-card uk-card-small uk-card-default">
							<div class="uk-card-header">
								<div class="uk-grid uk-grid-small uk-text-small" data-uk-grid>
									<div class="uk-width-expand">
										<span class="cat-txt">MUSIC / BANDS</span>
									</div>
									<div class="uk-width-auto uk-text-right uk-text-muted">
										<span data-uk-icon="icon:clock; ratio: 0.8"></span> 2 hr.
									</div>
								</div>
							</div>
							<div class="uk-card-media">
								<div class="uk-inline-clip uk-transition-toggle" tabindex="0">
									<img class="lazy" data-src="https://picsum.photos/400/400/?random=1" data-width="400" data-height="400" data-uk-img alt="" src="img/transp.gif">
									<div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-primary">
										<span data-uk-icon="icon:heart; ratio: 0.8"></span> 12.345 <span data-uk-icon="icon:comment; ratio: 0.8"></span> 12.345
									</div>
								</div>
								
							</div>
							<div class="uk-card-body">
								<h6 class="uk-margin-small-bottom uk-margin-remove-adjacent uk-text-bold">NEW ALBUM RELEASE TODAY</h6>
								<p class="uk-text-small uk-text-muted">Duis aute irure dolor in reprehenderit in voluptate velit</p>
							</div>
							<div class="uk-card-footer">
								<div class="uk-grid uk-grid-small uk-grid-divider uk-flex uk-flex-middle" data-uk-grid>
									<div class="uk-width-expand uk-text-small">
										John Doe
									</div>
									<div class="uk-width-auto uk-text-right">
										<a href="#" data-uk-tooltip="title: Twitter" class="uk-icon-link" data-uk-icon="icon:twitter; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Instagram" class="uk-icon-link" data-uk-icon="icon:instagram; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Behance" class="uk-icon-link" data-uk-icon="icon:behance; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Pinterest" class="uk-icon-link" data-uk-icon="icon:pinterest; ratio: 0.8"></a>
									</div>
									<div class="uk-width-auto uk-text-right">
										<a data-uk-tooltip="title: Drag this card" href="#" class="uk-icon-link drag-icon" data-uk-icon="icon:move; ratio: 1"></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /card -->
					<!-- card -->
					<div class="photo-card" data-tags="urban picture gallery - photography">
						<div class="uk-card uk-card-small uk-card-default">
							<div class="uk-card-header">
								<div class="uk-grid uk-grid-small uk-text-small" data-uk-grid>
									<div class="uk-width-expand">
										<span class="cat-txt">PHOTOGRAPHY</span>
									</div>
									<div class="uk-width-auto uk-text-right uk-text-muted">
										<span data-uk-icon="icon:clock; ratio: 0.8"></span> 3 hr.
									</div>
								</div>
							</div>
							<div class="uk-card-media">
								<div class="uk-inline-clip uk-transition-toggle" tabindex="0">
									<img class="lazy" data-src="https://picsum.photos/400/330/?random=1" data-width="400" data-height="330" data-uk-img alt="" src="img/transp.gif">
									<div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-primary">
										<span data-uk-icon="icon:heart; ratio: 0.8"></span> 12.345 <span data-uk-icon="icon:comment; ratio: 0.8"></span> 12.345
									</div>
								</div>
								
							</div>
							<div class="uk-card-body">
								<h6 class="uk-margin-small-bottom uk-margin-remove-adjacent uk-text-bold">URBAN PICTURE GALLERY</h6>
								<p class="uk-text-small uk-text-muted">Duis aute irure dolor in reprehenderit in voluptate velit</p>
							</div>
							<div class="uk-card-footer">
								<div class="uk-grid uk-grid-small uk-grid-divider uk-flex uk-flex-middle" data-uk-grid>
									<div class="uk-width-expand uk-text-small">
										John Doe
									</div>
									<div class="uk-width-auto uk-text-right">
										<a href="#" data-uk-tooltip="title: Twitter" class="uk-icon-link" data-uk-icon="icon:twitter; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Instagram" class="uk-icon-link" data-uk-icon="icon:instagram; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Behance" class="uk-icon-link" data-uk-icon="icon:behance; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Pinterest" class="uk-icon-link" data-uk-icon="icon:pinterest; ratio: 0.8"></a>
									</div>
									<div class="uk-width-auto uk-text-right">
										<a data-uk-tooltip="title: Drag this card" href="#" class="uk-icon-link drag-icon" data-uk-icon="icon:move; ratio: 1"></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /card -->
					<!-- card -->
					<div class="photo-card" data-tags="portraits - photograhy">
						<div class="uk-card uk-card-small uk-card-default">
							<div class="uk-card-header">
								<div class="uk-grid uk-grid-small uk-text-small" data-uk-grid>
									<div class="uk-width-expand">
										<span class="cat-txt">PHOTOGRAPHY</span>
									</div>
									<div class="uk-width-auto uk-text-right uk-text-muted">
										<span data-uk-icon="icon:clock; ratio: 0.8"></span> 1 day.
									</div>
								</div>
							</div>
							<div class="uk-card-media">
								<div class="uk-inline-clip uk-transition-toggle" tabindex="0">
									<img class="lazy" data-src="https://picsum.photos/400/350/?random=6" data-width="400" data-height="350" data-uk-img alt="" src="img/transp.gif">
									<div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-primary">
										<span data-uk-icon="icon:heart; ratio: 0.8"></span> 12.345 <span data-uk-icon="icon:comment; ratio: 0.8"></span> 12.345
									</div>
								</div>
								
							</div>
							<div class="uk-card-body">
								<h6 class="uk-margin-small-bottom uk-margin-remove-adjacent uk-text-bold">PORTRAITS</h6>
								<p class="uk-text-small uk-text-muted">Duis aute irure dolor in reprehenderit in voluptate velit</p>
							</div>
							<div class="uk-card-footer">
								<div class="uk-grid uk-grid-small uk-grid-divider uk-flex uk-flex-middle" data-uk-grid>
									<div class="uk-width-expand uk-text-small">
										John Doe
									</div>
									<div class="uk-width-auto uk-text-right">
										<a href="#" data-uk-tooltip="title: Twitter" class="uk-icon-link" data-uk-icon="icon:twitter; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Instagram" class="uk-icon-link" data-uk-icon="icon:instagram; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Behance" class="uk-icon-link" data-uk-icon="icon:behance; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Pinterest" class="uk-icon-link" data-uk-icon="icon:pinterest; ratio: 0.8"></a>
									</div>
									<div class="uk-width-auto uk-text-right">
										<a data-uk-tooltip="title: Drag this card" href="#" class="uk-icon-link drag-icon" data-uk-icon="icon:move; ratio: 1"></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /card -->
					<!-- card -->
					<div class="design-card" data-tags="how to use space in design - design">
						<div class="uk-card uk-card-small uk-card-default">
							<div class="uk-card-header">
								<div class="uk-grid uk-grid-small uk-text-small" data-uk-grid>
									<div class="uk-width-expand">
										<span class="cat-txt">DESIGN</span>
									</div>
									<div class="uk-width-auto uk-text-right uk-text-muted">
										<span data-uk-icon="icon:clock; ratio: 0.8"></span> 1 day.
									</div>
								</div>
							</div>
							<div class="uk-card-media">
								<div class="uk-inline-clip uk-transition-toggle" tabindex="0">
									<img class="lazy" data-src="https://picsum.photos/400/460/?random=2" data-width="400" data-height="460" data-uk-img alt="" src="img/transp.gif">
									<div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-primary">
										<span data-uk-icon="icon:heart; ratio: 0.8"></span> 12.345 <span data-uk-icon="icon:comment; ratio: 0.8"></span> 12.345
									</div>
								</div>
								
							</div>
							<div class="uk-card-body">
								<h6 class="uk-margin-small-bottom uk-margin-remove-adjacent uk-text-bold">HOW TO USE SPACE IN DESIGN</h6>
								<p class="uk-text-small uk-text-muted">Duis aute irure dolor in reprehenderit in voluptate velit</p>
							</div>
							<div class="uk-card-footer">
								<div class="uk-grid uk-grid-small uk-grid-divider uk-flex uk-flex-middle" data-uk-grid>
									<div class="uk-width-expand uk-text-small">
										John Doe
									</div>
									<div class="uk-width-auto uk-text-right">
										<a href="#" data-uk-tooltip="title: Twitter" class="uk-icon-link" data-uk-icon="icon:twitter; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Instagram" class="uk-icon-link" data-uk-icon="icon:instagram; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Behance" class="uk-icon-link" data-uk-icon="icon:behance; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Pinterest" class="uk-icon-link" data-uk-icon="icon:pinterest; ratio: 0.8"></a>
									</div>
									<div class="uk-width-auto uk-text-right">
										<a data-uk-tooltip="title: Drag this card" href="#" class="uk-icon-link drag-icon" data-uk-icon="icon:move; ratio: 1"></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /card -->
					<!-- card -->
					<div class="music-card" data-tags="remastered record from the clash - music bands">
						<div class="uk-card uk-card-small uk-card-default">
							<div class="uk-card-header">
								<div class="uk-grid uk-grid-small uk-text-small" data-uk-grid>
									<div class="uk-width-expand">
										<span class="cat-txt">MUSIC / BANDS</span>
									</div>
									<div class="uk-width-auto uk-text-right uk-text-muted">
										<span data-uk-icon="icon:clock; ratio: 0.8"></span> 1 day.
									</div>
								</div>
							</div>
							<div class="uk-card-media">
								<div class="uk-inline-clip uk-transition-toggle" tabindex="0">
									<img class="lazy" data-src="https://picsum.photos/400/200/?random=2" data-width="400" data-height="200" data-uk-img alt="" src="img/transp.gif">
									<div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-primary">
										<span data-uk-icon="icon:heart; ratio: 0.8"></span> 12.345 <span data-uk-icon="icon:comment; ratio: 0.8"></span> 12.345
									</div>
								</div>
								
							</div>
							<div class="uk-card-body">
								<h6 class="uk-margin-small-bottom uk-margin-remove-adjacent uk-text-bold">REMASTERED RECORD FROM THE CLASH</h6>
								<p class="uk-text-small uk-text-muted">Duis aute irure dolor in reprehenderit in voluptate velit</p>
							</div>
							<div class="uk-card-footer">
								<div class="uk-grid uk-grid-small uk-grid-divider uk-flex uk-flex-middle" data-uk-grid>
									<div class="uk-width-expand uk-text-small">
										John Doe
									</div>
									<div class="uk-width-auto uk-text-right">
										<a href="#" data-uk-tooltip="title: Twitter" class="uk-icon-link" data-uk-icon="icon:twitter; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Instagram" class="uk-icon-link" data-uk-icon="icon:instagram; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Behance" class="uk-icon-link" data-uk-icon="icon:behance; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Pinterest" class="uk-icon-link" data-uk-icon="icon:pinterest; ratio: 0.8"></a>
									</div>
									<div class="uk-width-auto uk-text-right">
										<a data-uk-tooltip="title: Drag this card" href="#" class="uk-icon-link drag-icon" data-uk-icon="icon:move; ratio: 1"></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /card -->
					<!-- card -->
					<div class="design-card" data-tags="how to use typography in design - design">
						<div class="uk-card uk-card-small uk-card-default">
							<div class="uk-card-header">
								<div class="uk-grid uk-grid-small uk-text-small" data-uk-grid>
									<div class="uk-width-expand">
										<span class="cat-txt">DESIGN</span>
									</div>
									<div class="uk-width-auto uk-text-right uk-text-muted">
										<span data-uk-icon="icon:clock; ratio: 0.8"></span> 2 days.
									</div>
								</div>
							</div>
							<div class="uk-card-media">
								<div class="uk-inline-clip uk-transition-toggle" tabindex="0">
									<img class="lazy" data-src="https://picsum.photos/400/570/?random=3" data-width="400" data-height="570" data-uk-img alt="" src="img/transp.gif">
									<div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-primary">
										<span data-uk-icon="icon:heart; ratio: 0.8"></span> 12.345 <span data-uk-icon="icon:comment; ratio: 0.8"></span> 12.345
									</div>
								</div>
								
							</div>
							<div class="uk-card-body">
								<h6 class="uk-margin-small-bottom uk-margin-remove-adjacent uk-text-bold">HOW TO USE TYPOGRAPHY IN DESIGN</h6>
								<p class="uk-text-small uk-text-muted">Duis aute irure dolor in reprehenderit in voluptate velit</p>
							</div>
							<div class="uk-card-footer">
								<div class="uk-grid uk-grid-small uk-grid-divider uk-flex uk-flex-middle" data-uk-grid>
									<div class="uk-width-expand uk-text-small">
										John Doe
									</div>
									<div class="uk-width-auto uk-text-right">
										<a href="#" data-uk-tooltip="title: Twitter" class="uk-icon-link" data-uk-icon="icon:twitter; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Instagram" class="uk-icon-link" data-uk-icon="icon:instagram; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Behance" class="uk-icon-link" data-uk-icon="icon:behance; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Pinterest" class="uk-icon-link" data-uk-icon="icon:pinterest; ratio: 0.8"></a>
									</div>
									<div class="uk-width-auto uk-text-right">
										<a data-uk-tooltip="title: Drag this card" href="#" class="uk-icon-link drag-icon" data-uk-icon="icon:move; ratio: 1"></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /card -->
					<!-- card -->
					<div class="nature-card" data-tags="wildlife in the uco valley - photograhy outdoor">
						<div class="uk-card uk-card-small uk-card-default">
							<div class="uk-card-header">
								<div class="uk-grid uk-grid-small uk-text-small" data-uk-grid>
									<div class="uk-width-expand">
										<span class="cat-txt">Nature / Outdoor</span>
									</div>
									<div class="uk-width-auto uk-text-right uk-text-muted">
										<span data-uk-icon="icon:clock; ratio: 0.8"></span> 2 days.
									</div>
								</div>
							</div>
							<div class="uk-card-media">
								<div class="uk-inline-clip uk-transition-toggle" tabindex="0">
									<img class="lazy" data-src="https://picsum.photos/400/300/?random=3" data-width="400" data-height="300" data-uk-img alt="" src="img/transp.gif">
									<div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-primary">
										<span data-uk-icon="icon:heart; ratio: 0.8"></span> 12.345 <span data-uk-icon="icon:comment; ratio: 0.8"></span> 12.345
									</div>
								</div>
								
							</div>
							<div class="uk-card-body">
								<h6 class="uk-margin-small-bottom uk-margin-remove-adjacent uk-text-bold">WILDLIFE IN THE UCO VALLEY</h6>
								<p class="uk-text-small uk-text-muted">Duis aute irure dolor in reprehenderit in voluptate velit</p>
							</div>
							<div class="uk-card-footer">
								<div class="uk-grid uk-grid-small uk-grid-divider uk-flex uk-flex-middle" data-uk-grid>
									<div class="uk-width-expand uk-text-small">
										John Doe
									</div>
									<div class="uk-width-auto uk-text-right">
										<a href="#" data-uk-tooltip="title: Twitter" class="uk-icon-link" data-uk-icon="icon:twitter; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Instagram" class="uk-icon-link" data-uk-icon="icon:instagram; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Behance" class="uk-icon-link" data-uk-icon="icon:behance; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Pinterest" class="uk-icon-link" data-uk-icon="icon:pinterest; ratio: 0.8"></a>
									</div>
									<div class="uk-width-auto uk-text-right">
										<a data-uk-tooltip="title: Drag this card" href="#" class="uk-icon-link drag-icon" data-uk-icon="icon:move; ratio: 1"></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /card -->
					<!-- card -->
					<div class="nature-card" data-tags="on top of the mountains - nature outdoor">
						<div class="uk-card uk-card-small uk-card-default">
							<div class="uk-card-header">
								<div class="uk-grid uk-grid-small uk-text-small" data-uk-grid>
									<div class="uk-width-expand">
										<span class="cat-txt">Nature / Outdoor</span>
									</div>
									<div class="uk-width-auto uk-text-right uk-text-muted">
										<span data-uk-icon="icon:clock; ratio: 0.8"></span> 3 days.
									</div>
								</div>
							</div>
							<div class="uk-card-media">
								<div class="uk-inline-clip uk-transition-toggle" tabindex="0">
									<img class="lazy" data-src="https://picsum.photos/400/530/?random=8" data-width="400" data-height="530" data-uk-img alt="" src="img/transp.gif">
									<div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-primary">
										<span data-uk-icon="icon:heart; ratio: 0.8"></span> 12.345 <span data-uk-icon="icon:comment; ratio: 0.8"></span> 12.345
									</div>
								</div>
								
							</div>
							<div class="uk-card-body">
								<h6 class="uk-margin-small-bottom uk-margin-remove-adjacent uk-text-bold">ON TOP OF THE MOUNTAINS</h6>
								<p class="uk-text-small uk-text-muted">Duis aute irure dolor in reprehenderit in voluptate velit</p>
							</div>
							<div class="uk-card-footer">
								<div class="uk-grid uk-grid-small uk-grid-divider uk-flex uk-flex-middle" data-uk-grid>
									<div class="uk-width-expand uk-text-small">
										John Doe
									</div>
									<div class="uk-width-auto uk-text-right">
										<a href="#" data-uk-tooltip="title: Twitter" class="uk-icon-link" data-uk-icon="icon:twitter; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Instagram" class="uk-icon-link" data-uk-icon="icon:instagram; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Behance" class="uk-icon-link" data-uk-icon="icon:behance; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Pinterest" class="uk-icon-link" data-uk-icon="icon:pinterest; ratio: 0.8"></a>
									</div>
									<div class="uk-width-auto uk-text-right">
										<a data-uk-tooltip="title: Drag this card" href="#" class="uk-icon-link drag-icon" data-uk-icon="icon:move; ratio: 1"></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /card -->
					<!-- card -->
					<div class="design-card" data-tags="how to create a custom color palette - design">
						<div class="uk-card uk-card-small uk-card-default">
							<div class="uk-card-header">
								<div class="uk-grid uk-grid-small uk-text-small" data-uk-grid>
									<div class="uk-width-expand">
										<span class="cat-txt">Design</span>
									</div>
									<div class="uk-width-auto uk-text-right uk-text-muted">
										<span data-uk-icon="icon:clock; ratio: 0.8"></span> 4 days.
									</div>
								</div>
							</div>
							<div class="uk-card-media">
								<div class="uk-inline-clip uk-transition-toggle" tabindex="0">
									<img class="lazy" data-src="https://picsum.photos/400/180/?random=2" data-width="400" data-height="180" data-uk-img alt="" src="img/transp.gif">
									<div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-primary">
										<span data-uk-icon="icon:heart; ratio: 0.8"></span> 12.345 <span data-uk-icon="icon:comment; ratio: 0.8"></span> 12.345
									</div>
								</div>
								
							</div>
							<div class="uk-card-body">
								<h6 class="uk-margin-small-bottom uk-margin-remove-adjacent uk-text-bold">HOW TO CREATE CUSTOM COLOR PALETTE</h6>
								<p class="uk-text-small uk-text-muted">Duis aute irure dolor in reprehenderit in voluptate velit</p>
							</div>
							<div class="uk-card-footer">
								<div class="uk-grid uk-grid-small uk-grid-divider uk-flex uk-flex-middle" data-uk-grid>
									<div class="uk-width-expand uk-text-small">
										John Doe
									</div>
									<div class="uk-width-auto uk-text-right">
										<a href="#" data-uk-tooltip="title: Twitter" class="uk-icon-link" data-uk-icon="icon:twitter; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Instagram" class="uk-icon-link" data-uk-icon="icon:instagram; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Behance" class="uk-icon-link" data-uk-icon="icon:behance; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Pinterest" class="uk-icon-link" data-uk-icon="icon:pinterest; ratio: 0.8"></a>
									</div>
									<div class="uk-width-auto uk-text-right">
										<a data-uk-tooltip="title: Drag this card" href="#" class="uk-icon-link drag-icon" data-uk-icon="icon:move; ratio: 1"></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /card -->
					<!-- card -->
					<div class="nature-card" data-tags="wildcats in thailand - nature outdoor">
						<div class="uk-card uk-card-small uk-card-default">
							<div class="uk-card-header">
								<div class="uk-grid uk-grid-small uk-text-small" data-uk-grid>
									<div class="uk-width-expand">
										<span class="cat-txt">Nature / Outdoor</span>
									</div>
									<div class="uk-width-auto uk-text-right uk-text-muted">
										<span data-uk-icon="icon:clock; ratio: 0.8"></span> 1 week.
									</div>
								</div>
							</div>
							<div class="uk-card-media">
								<div class="uk-inline-clip uk-transition-toggle" tabindex="0">
									<img class="lazy" data-src="https://picsum.photos/400/220/?random=7" data-width="400" data-height="220" data-uk-img alt="" src="img/transp.gif">
									<div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-primary">
										<span data-uk-icon="icon:heart; ratio: 0.8"></span> 12.345 <span data-uk-icon="icon:comment; ratio: 0.8"></span> 12.345
									</div>
								</div>
								
							</div>
							<div class="uk-card-body">
								<h6 class="uk-margin-small-bottom uk-margin-remove-adjacent uk-text-bold">WILDCATS IN THAILAND</h6>
								<p class="uk-text-small uk-text-muted">Duis aute irure dolor in reprehenderit in voluptate velit</p>
							</div>
							<div class="uk-card-footer">
								<div class="uk-grid uk-grid-small uk-grid-divider uk-flex uk-flex-middle" data-uk-grid>
									<div class="uk-width-expand uk-text-small">
										John Doe
									</div>
									<div class="uk-width-auto uk-text-right">
										<a href="#" data-uk-tooltip="title: Twitter" class="uk-icon-link" data-uk-icon="icon:twitter; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Instagram" class="uk-icon-link" data-uk-icon="icon:instagram; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Behance" class="uk-icon-link" data-uk-icon="icon:behance; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Pinterest" class="uk-icon-link" data-uk-icon="icon:pinterest; ratio: 0.8"></a>
									</div>
									<div class="uk-width-auto uk-text-right">
										<a data-uk-tooltip="title: Drag this card" href="#" class="uk-icon-link drag-icon" data-uk-icon="icon:move; ratio: 1"></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /card -->
					<!-- card -->
					<div class="photo-card" data-tags="urban picture gallery - photography">
						<div class="uk-card uk-card-small uk-card-default">
							<div class="uk-card-header">
								<div class="uk-grid uk-grid-small uk-text-small" data-uk-grid>
									<div class="uk-width-expand">
										<span class="cat-txt">PHOTOGRAPHY</span>
									</div>
									<div class="uk-width-auto uk-text-right uk-text-muted">
										<span data-uk-icon="icon:clock; ratio: 0.8"></span> 3 hr.
									</div>
								</div>
							</div>
							<div class="uk-card-media">
								<div class="uk-inline-clip uk-transition-toggle" tabindex="0">
									<img class="lazy" data-src="https://picsum.photos/400/330/?random=1" data-width="400" data-height="330" data-uk-img alt="" src="img/transp.gif">
									<div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-primary">
										<span data-uk-icon="icon:heart; ratio: 0.8"></span> 12.345 <span data-uk-icon="icon:comment; ratio: 0.8"></span> 12.345
									</div>
								</div>
								
							</div>
							<div class="uk-card-body">
								<h6 class="uk-margin-small-bottom uk-margin-remove-adjacent uk-text-bold">URBAN PICTURE GALLERY</h6>
								<p class="uk-text-small uk-text-muted">Duis aute irure dolor in reprehenderit in voluptate velit</p>
							</div>
							<div class="uk-card-footer">
								<div class="uk-grid uk-grid-small uk-grid-divider uk-flex uk-flex-middle" data-uk-grid>
									<div class="uk-width-expand uk-text-small">
										John Doe
									</div>
									<div class="uk-width-auto uk-text-right">
										<a href="#" data-uk-tooltip="title: Twitter" class="uk-icon-link" data-uk-icon="icon:twitter; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Instagram" class="uk-icon-link" data-uk-icon="icon:instagram; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Behance" class="uk-icon-link" data-uk-icon="icon:behance; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Pinterest" class="uk-icon-link" data-uk-icon="icon:pinterest; ratio: 0.8"></a>
									</div>
									<div class="uk-width-auto uk-text-right">
										<a data-uk-tooltip="title: Drag this card" href="#" class="uk-icon-link drag-icon" data-uk-icon="icon:move; ratio: 1"></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /card -->
					<!-- card -->
					<div class="photo-card" data-tags="portraits - photograhy">
						<div class="uk-card uk-card-small uk-card-default">
							<div class="uk-card-header">
								<div class="uk-grid uk-grid-small uk-text-small" data-uk-grid>
									<div class="uk-width-expand">
										<span class="cat-txt">PHOTOGRAPHY</span>
									</div>
									<div class="uk-width-auto uk-text-right uk-text-muted">
										<span data-uk-icon="icon:clock; ratio: 0.8"></span> 1 day.
									</div>
								</div>
							</div>
							<div class="uk-card-media">
								<div class="uk-inline-clip uk-transition-toggle" tabindex="0">
									<img class="lazy" data-src="https://picsum.photos/400/350/?random=6" data-width="400" data-height="350" data-uk-img alt="" src="img/transp.gif">
									<div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-primary">
										<span data-uk-icon="icon:heart; ratio: 0.8"></span> 12.345 <span data-uk-icon="icon:comment; ratio: 0.8"></span> 12.345
									</div>
								</div>
								
							</div>
							<div class="uk-card-body">
								<h6 class="uk-margin-small-bottom uk-margin-remove-adjacent uk-text-bold">PORTRAITS</h6>
								<p class="uk-text-small uk-text-muted">Duis aute irure dolor in reprehenderit in voluptate velit</p>
							</div>
							<div class="uk-card-footer">
								<div class="uk-grid uk-grid-small uk-grid-divider uk-flex uk-flex-middle" data-uk-grid>
									<div class="uk-width-expand uk-text-small">
										John Doe
									</div>
									<div class="uk-width-auto uk-text-right">
										<a href="#" data-uk-tooltip="title: Twitter" class="uk-icon-link" data-uk-icon="icon:twitter; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Instagram" class="uk-icon-link" data-uk-icon="icon:instagram; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Behance" class="uk-icon-link" data-uk-icon="icon:behance; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Pinterest" class="uk-icon-link" data-uk-icon="icon:pinterest; ratio: 0.8"></a>
									</div>
									<div class="uk-width-auto uk-text-right">
										<a data-uk-tooltip="title: Drag this card" href="#" class="uk-icon-link drag-icon" data-uk-icon="icon:move; ratio: 1"></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /card -->
					<!-- card -->
					<div class="design-card" data-tags="how to use space in design - design">
						<div class="uk-card uk-card-small uk-card-default">
							<div class="uk-card-header">
								<div class="uk-grid uk-grid-small uk-text-small" data-uk-grid>
									<div class="uk-width-expand">
										<span class="cat-txt">DESIGN</span>
									</div>
									<div class="uk-width-auto uk-text-right uk-text-muted">
										<span data-uk-icon="icon:clock; ratio: 0.8"></span> 1 day.
									</div>
								</div>
							</div>
							<div class="uk-card-media">
								<div class="uk-inline-clip uk-transition-toggle" tabindex="0">
									<img class="lazy" data-src="https://picsum.photos/400/460/?random=2" data-width="400" data-height="460" data-uk-img alt="" src="img/transp.gif">
									<div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-primary">
										<span data-uk-icon="icon:heart; ratio: 0.8"></span> 12.345 <span data-uk-icon="icon:comment; ratio: 0.8"></span> 12.345
									</div>
								</div>
								
							</div>
							<div class="uk-card-body">
								<h6 class="uk-margin-small-bottom uk-margin-remove-adjacent uk-text-bold">HOW TO USE SPACE IN DESIGN</h6>
								<p class="uk-text-small uk-text-muted">Duis aute irure dolor in reprehenderit in voluptate velit</p>
							</div>
							<div class="uk-card-footer">
								<div class="uk-grid uk-grid-small uk-grid-divider uk-flex uk-flex-middle" data-uk-grid>
									<div class="uk-width-expand uk-text-small">
										John Doe
									</div>
									<div class="uk-width-auto uk-text-right">
										<a href="#" data-uk-tooltip="title: Twitter" class="uk-icon-link" data-uk-icon="icon:twitter; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Instagram" class="uk-icon-link" data-uk-icon="icon:instagram; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Behance" class="uk-icon-link" data-uk-icon="icon:behance; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Pinterest" class="uk-icon-link" data-uk-icon="icon:pinterest; ratio: 0.8"></a>
									</div>
									<div class="uk-width-auto uk-text-right">
										<a data-uk-tooltip="title: Drag this card" href="#" class="uk-icon-link drag-icon" data-uk-icon="icon:move; ratio: 1"></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /card -->
					<!-- card -->
					<div class="music-card" data-tags="remastered record from the clash - music bands">
						<div class="uk-card uk-card-small uk-card-default">
							<div class="uk-card-header">
								<div class="uk-grid uk-grid-small uk-text-small" data-uk-grid>
									<div class="uk-width-expand">
										<span class="cat-txt">MUSIC / BANDS</span>
									</div>
									<div class="uk-width-auto uk-text-right uk-text-muted">
										<span data-uk-icon="icon:clock; ratio: 0.8"></span> 1 day.
									</div>
								</div>
							</div>
							<div class="uk-card-media">
								<div class="uk-inline-clip uk-transition-toggle" tabindex="0">
									<img class="lazy" data-src="https://picsum.photos/400/200/?random=2" data-width="400" data-height="200" data-uk-img alt="" src="img/transp.gif">
									<div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-primary">
										<span data-uk-icon="icon:heart; ratio: 0.8"></span> 12.345 <span data-uk-icon="icon:comment; ratio: 0.8"></span> 12.345
									</div>
								</div>
								
							</div>
							<div class="uk-card-body">
								<h6 class="uk-margin-small-bottom uk-margin-remove-adjacent uk-text-bold">REMASTERED RECORD FROM THE CLASH</h6>
								<p class="uk-text-small uk-text-muted">Duis aute irure dolor in reprehenderit in voluptate velit</p>
							</div>
							<div class="uk-card-footer">
								<div class="uk-grid uk-grid-small uk-grid-divider uk-flex uk-flex-middle" data-uk-grid>
									<div class="uk-width-expand uk-text-small">
										John Doe
									</div>
									<div class="uk-width-auto uk-text-right">
										<a href="#" data-uk-tooltip="title: Twitter" class="uk-icon-link" data-uk-icon="icon:twitter; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Instagram" class="uk-icon-link" data-uk-icon="icon:instagram; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Behance" class="uk-icon-link" data-uk-icon="icon:behance; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Pinterest" class="uk-icon-link" data-uk-icon="icon:pinterest; ratio: 0.8"></a>
									</div>
									<div class="uk-width-auto uk-text-right">
										<a data-uk-tooltip="title: Drag this card" href="#" class="uk-icon-link drag-icon" data-uk-icon="icon:move; ratio: 1"></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /card -->
					<!-- card -->
					<div class="design-card" data-tags="how to use typography in design - design">
						<div class="uk-card uk-card-small uk-card-default">
							<div class="uk-card-header">
								<div class="uk-grid uk-grid-small uk-text-small" data-uk-grid>
									<div class="uk-width-expand">
										<span class="cat-txt">DESIGN</span>
									</div>
									<div class="uk-width-auto uk-text-right uk-text-muted">
										<span data-uk-icon="icon:clock; ratio: 0.8"></span> 2 days.
									</div>
								</div>
							</div>
							<div class="uk-card-media">
								<div class="uk-inline-clip uk-transition-toggle" tabindex="0">
									<img class="lazy" data-src="https://picsum.photos/400/570/?random=3" data-width="400" data-height="570" data-uk-img alt="" src="img/transp.gif">
									<div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-primary">
										<span data-uk-icon="icon:heart; ratio: 0.8"></span> 12.345 <span data-uk-icon="icon:comment; ratio: 0.8"></span> 12.345
									</div>
								</div>
								
							</div>
							<div class="uk-card-body">
								<h6 class="uk-margin-small-bottom uk-margin-remove-adjacent uk-text-bold">HOW TO USE TYPOGRAPHY IN DESIGN</h6>
								<p class="uk-text-small uk-text-muted">Duis aute irure dolor in reprehenderit in voluptate velit</p>
							</div>
							<div class="uk-card-footer">
								<div class="uk-grid uk-grid-small uk-grid-divider uk-flex uk-flex-middle" data-uk-grid>
									<div class="uk-width-expand uk-text-small">
										John Doe
									</div>
									<div class="uk-width-auto uk-text-right">
										<a href="#" data-uk-tooltip="title: Twitter" class="uk-icon-link" data-uk-icon="icon:twitter; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Instagram" class="uk-icon-link" data-uk-icon="icon:instagram; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Behance" class="uk-icon-link" data-uk-icon="icon:behance; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Pinterest" class="uk-icon-link" data-uk-icon="icon:pinterest; ratio: 0.8"></a>
									</div>
									<div class="uk-width-auto uk-text-right">
										<a data-uk-tooltip="title: Drag this card" href="#" class="uk-icon-link drag-icon" data-uk-icon="icon:move; ratio: 1"></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /card -->
					<!-- card -->
					<div class="nature-card" data-tags="wildlife in the uco valley - photograhy outdoor">
						<div class="uk-card uk-card-small uk-card-default">
							<div class="uk-card-header">
								<div class="uk-grid uk-grid-small uk-text-small" data-uk-grid>
									<div class="uk-width-expand">
										<span class="cat-txt">Nature / Outdoor</span>
									</div>
									<div class="uk-width-auto uk-text-right uk-text-muted">
										<span data-uk-icon="icon:clock; ratio: 0.8"></span> 2 days.
									</div>
								</div>
							</div>
							<div class="uk-card-media">
								<div class="uk-inline-clip uk-transition-toggle" tabindex="0">
									<img class="lazy" data-src="https://picsum.photos/400/300/?random=3" data-width="400" data-height="300" data-uk-img alt="" src="img/transp.gif">
									<div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-primary">
										<span data-uk-icon="icon:heart; ratio: 0.8"></span> 12.345 <span data-uk-icon="icon:comment; ratio: 0.8"></span> 12.345
									</div>
								</div>
								
							</div>
							<div class="uk-card-body">
								<h6 class="uk-margin-small-bottom uk-margin-remove-adjacent uk-text-bold">WILDLIFE IN THE UCO VALLEY</h6>
								<p class="uk-text-small uk-text-muted">Duis aute irure dolor in reprehenderit in voluptate velit</p>
							</div>
							<div class="uk-card-footer">
								<div class="uk-grid uk-grid-small uk-grid-divider uk-flex uk-flex-middle" data-uk-grid>
									<div class="uk-width-expand uk-text-small">
										John Doe
									</div>
									<div class="uk-width-auto uk-text-right">
										<a href="#" data-uk-tooltip="title: Twitter" class="uk-icon-link" data-uk-icon="icon:twitter; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Instagram" class="uk-icon-link" data-uk-icon="icon:instagram; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Behance" class="uk-icon-link" data-uk-icon="icon:behance; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Pinterest" class="uk-icon-link" data-uk-icon="icon:pinterest; ratio: 0.8"></a>
									</div>
									<div class="uk-width-auto uk-text-right">
										<a data-uk-tooltip="title: Drag this card" href="#" class="uk-icon-link drag-icon" data-uk-icon="icon:move; ratio: 1"></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /card -->
					<!-- card -->
					<div class="nature-card" data-tags="on top of the mountains - nature outdoor">
						<div class="uk-card uk-card-small uk-card-default">
							<div class="uk-card-header">
								<div class="uk-grid uk-grid-small uk-text-small" data-uk-grid>
									<div class="uk-width-expand">
										<span class="cat-txt">Nature / Outdoor</span>
									</div>
									<div class="uk-width-auto uk-text-right uk-text-muted">
										<span data-uk-icon="icon:clock; ratio: 0.8"></span> 3 days.
									</div>
								</div>
							</div>
							<div class="uk-card-media">
								<div class="uk-inline-clip uk-transition-toggle" tabindex="0">
									<img class="lazy" data-src="https://picsum.photos/400/530/?random=8" data-width="400" data-height="530" data-uk-img alt="" src="img/transp.gif">
									<div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-primary">
										<span data-uk-icon="icon:heart; ratio: 0.8"></span> 12.345 <span data-uk-icon="icon:comment; ratio: 0.8"></span> 12.345
									</div>
								</div>
								
							</div>
							<div class="uk-card-body">
								<h6 class="uk-margin-small-bottom uk-margin-remove-adjacent uk-text-bold">ON TOP OF THE MOUNTAINS</h6>
								<p class="uk-text-small uk-text-muted">Duis aute irure dolor in reprehenderit in voluptate velit</p>
							</div>
							<div class="uk-card-footer">
								<div class="uk-grid uk-grid-small uk-grid-divider uk-flex uk-flex-middle" data-uk-grid>
									<div class="uk-width-expand uk-text-small">
										John Doe
									</div>
									<div class="uk-width-auto uk-text-right">
										<a href="#" data-uk-tooltip="title: Twitter" class="uk-icon-link" data-uk-icon="icon:twitter; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Instagram" class="uk-icon-link" data-uk-icon="icon:instagram; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Behance" class="uk-icon-link" data-uk-icon="icon:behance; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Pinterest" class="uk-icon-link" data-uk-icon="icon:pinterest; ratio: 0.8"></a>
									</div>
									<div class="uk-width-auto uk-text-right">
										<a data-uk-tooltip="title: Drag this card" href="#" class="uk-icon-link drag-icon" data-uk-icon="icon:move; ratio: 1"></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /card -->
					<!-- card -->
					<div class="design-card" data-tags="how to create a custom color palette - design">
						<div class="uk-card uk-card-small uk-card-default">
							<div class="uk-card-header">
								<div class="uk-grid uk-grid-small uk-text-small" data-uk-grid>
									<div class="uk-width-expand">
										<span class="cat-txt">Design</span>
									</div>
									<div class="uk-width-auto uk-text-right uk-text-muted">
										<span data-uk-icon="icon:clock; ratio: 0.8"></span> 4 days.
									</div>
								</div>
							</div>
							<div class="uk-card-media">
								<div class="uk-inline-clip uk-transition-toggle" tabindex="0">
									<img class="lazy" data-src="https://picsum.photos/400/180/?random=2" data-width="400" data-height="180" data-uk-img alt="" src="img/transp.gif">
									<div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-primary">
										<span data-uk-icon="icon:heart; ratio: 0.8"></span> 12.345 <span data-uk-icon="icon:comment; ratio: 0.8"></span> 12.345
									</div>
								</div>
								
							</div>
							<div class="uk-card-body">
								<h6 class="uk-margin-small-bottom uk-margin-remove-adjacent uk-text-bold">HOW TO CREATE CUSTOM COLOR PALETTE</h6>
								<p class="uk-text-small uk-text-muted">Duis aute irure dolor in reprehenderit in voluptate velit</p>
							</div>
							<div class="uk-card-footer">
								<div class="uk-grid uk-grid-small uk-grid-divider uk-flex uk-flex-middle" data-uk-grid>
									<div class="uk-width-expand uk-text-small">
										John Doe
									</div>
									<div class="uk-width-auto uk-text-right">
										<a href="#" data-uk-tooltip="title: Twitter" class="uk-icon-link" data-uk-icon="icon:twitter; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Instagram" class="uk-icon-link" data-uk-icon="icon:instagram; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Behance" class="uk-icon-link" data-uk-icon="icon:behance; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Pinterest" class="uk-icon-link" data-uk-icon="icon:pinterest; ratio: 0.8"></a>
									</div>
									<div class="uk-width-auto uk-text-right">
										<a data-uk-tooltip="title: Drag this card" href="#" class="uk-icon-link drag-icon" data-uk-icon="icon:move; ratio: 1"></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /card -->
					<!-- card -->
					<div class="nature-card" data-tags="wildcats in thailand - nature outdoor">
						<div class="uk-card uk-card-small uk-card-default">
							<div class="uk-card-header">
								<div class="uk-grid uk-grid-small uk-text-small" data-uk-grid>
									<div class="uk-width-expand">
										<span class="cat-txt">Nature / Outdoor</span>
									</div>
									<div class="uk-width-auto uk-text-right uk-text-muted">
										<span data-uk-icon="icon:clock; ratio: 0.8"></span> 1 week.
									</div>
								</div>
							</div>
							<div class="uk-card-media">
								<div class="uk-inline-clip uk-transition-toggle" tabindex="0">
									<img class="lazy" data-src="https://picsum.photos/400/220/?random=7" data-width="400" data-height="220" data-uk-img alt="" src="img/transp.gif">
									<div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-primary">
										<span data-uk-icon="icon:heart; ratio: 0.8"></span> 12.345 <span data-uk-icon="icon:comment; ratio: 0.8"></span> 12.345
									</div>
								</div>
								
							</div>
							<div class="uk-card-body">
								<h6 class="uk-margin-small-bottom uk-margin-remove-adjacent uk-text-bold">WILDCATS IN THAILAND</h6>
								<p class="uk-text-small uk-text-muted">Duis aute irure dolor in reprehenderit in voluptate velit</p>
							</div>
							<div class="uk-card-footer">
								<div class="uk-grid uk-grid-small uk-grid-divider uk-flex uk-flex-middle" data-uk-grid>
									<div class="uk-width-expand uk-text-small">
										John Doe
									</div>
									<div class="uk-width-auto uk-text-right">
										<a href="#" data-uk-tooltip="title: Twitter" class="uk-icon-link" data-uk-icon="icon:twitter; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Instagram" class="uk-icon-link" data-uk-icon="icon:instagram; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Behance" class="uk-icon-link" data-uk-icon="icon:behance; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Pinterest" class="uk-icon-link" data-uk-icon="icon:pinterest; ratio: 0.8"></a>
									</div>
									<div class="uk-width-auto uk-text-right">
										<a data-uk-tooltip="title: Drag this card" href="#" class="uk-icon-link drag-icon" data-uk-icon="icon:move; ratio: 1"></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /card -->
					<!-- card -->
					<div class="photo-card" data-tags="urban picture gallery - photography">
						<div class="uk-card uk-card-small uk-card-default">
							<div class="uk-card-header">
								<div class="uk-grid uk-grid-small uk-text-small" data-uk-grid>
									<div class="uk-width-expand">
										<span class="cat-txt">PHOTOGRAPHY</span>
									</div>
									<div class="uk-width-auto uk-text-right uk-text-muted">
										<span data-uk-icon="icon:clock; ratio: 0.8"></span> 3 hr.
									</div>
								</div>
							</div>
							<div class="uk-card-media">
								<div class="uk-inline-clip uk-transition-toggle" tabindex="0">
									<img class="lazy" data-src="https://picsum.photos/400/330/?random=1" data-width="400" data-height="330" data-uk-img alt="" src="img/transp.gif">
									<div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-primary">
										<span data-uk-icon="icon:heart; ratio: 0.8"></span> 12.345 <span data-uk-icon="icon:comment; ratio: 0.8"></span> 12.345
									</div>
								</div>
								
							</div>
							<div class="uk-card-body">
								<h6 class="uk-margin-small-bottom uk-margin-remove-adjacent uk-text-bold">URBAN PICTURE GALLERY</h6>
								<p class="uk-text-small uk-text-muted">Duis aute irure dolor in reprehenderit in voluptate velit</p>
							</div>
							<div class="uk-card-footer">
								<div class="uk-grid uk-grid-small uk-grid-divider uk-flex uk-flex-middle" data-uk-grid>
									<div class="uk-width-expand uk-text-small">
										John Doe
									</div>
									<div class="uk-width-auto uk-text-right">
										<a href="#" data-uk-tooltip="title: Twitter" class="uk-icon-link" data-uk-icon="icon:twitter; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Instagram" class="uk-icon-link" data-uk-icon="icon:instagram; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Behance" class="uk-icon-link" data-uk-icon="icon:behance; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Pinterest" class="uk-icon-link" data-uk-icon="icon:pinterest; ratio: 0.8"></a>
									</div>
									<div class="uk-width-auto uk-text-right">
										<a data-uk-tooltip="title: Drag this card" href="#" class="uk-icon-link drag-icon" data-uk-icon="icon:move; ratio: 1"></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /card -->
					<!-- card -->
					<div class="photo-card" data-tags="portraits - photograhy">
						<div class="uk-card uk-card-small uk-card-default">
							<div class="uk-card-header">
								<div class="uk-grid uk-grid-small uk-text-small" data-uk-grid>
									<div class="uk-width-expand">
										<span class="cat-txt">PHOTOGRAPHY</span>
									</div>
									<div class="uk-width-auto uk-text-right uk-text-muted">
										<span data-uk-icon="icon:clock; ratio: 0.8"></span> 1 day.
									</div>
								</div>
							</div>
							<div class="uk-card-media">
								<div class="uk-inline-clip uk-transition-toggle" tabindex="0">
									<img class="lazy" data-src="https://picsum.photos/400/350/?random=6" data-width="400" data-height="350" data-uk-img alt="" src="img/transp.gif">
									<div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-primary">
										<span data-uk-icon="icon:heart; ratio: 0.8"></span> 12.345 <span data-uk-icon="icon:comment; ratio: 0.8"></span> 12.345
									</div>
								</div>
								
							</div>
							<div class="uk-card-body">
								<h6 class="uk-margin-small-bottom uk-margin-remove-adjacent uk-text-bold">PORTRAITS</h6>
								<p class="uk-text-small uk-text-muted">Duis aute irure dolor in reprehenderit in voluptate velit</p>
							</div>
							<div class="uk-card-footer">
								<div class="uk-grid uk-grid-small uk-grid-divider uk-flex uk-flex-middle" data-uk-grid>
									<div class="uk-width-expand uk-text-small">
										John Doe
									</div>
									<div class="uk-width-auto uk-text-right">
										<a href="#" data-uk-tooltip="title: Twitter" class="uk-icon-link" data-uk-icon="icon:twitter; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Instagram" class="uk-icon-link" data-uk-icon="icon:instagram; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Behance" class="uk-icon-link" data-uk-icon="icon:behance; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Pinterest" class="uk-icon-link" data-uk-icon="icon:pinterest; ratio: 0.8"></a>
									</div>
									<div class="uk-width-auto uk-text-right">
										<a data-uk-tooltip="title: Drag this card" href="#" class="uk-icon-link drag-icon" data-uk-icon="icon:move; ratio: 1"></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /card -->
					<!-- card -->
					<div class="design-card" data-tags="how to use space in design - design">
						<div class="uk-card uk-card-small uk-card-default">
							<div class="uk-card-header">
								<div class="uk-grid uk-grid-small uk-text-small" data-uk-grid>
									<div class="uk-width-expand">
										<span class="cat-txt">DESIGN</span>
									</div>
									<div class="uk-width-auto uk-text-right uk-text-muted">
										<span data-uk-icon="icon:clock; ratio: 0.8"></span> 1 day.
									</div>
								</div>
							</div>
							<div class="uk-card-media">
								<div class="uk-inline-clip uk-transition-toggle" tabindex="0">
									<img class="lazy" data-src="https://picsum.photos/400/460/?random=2" data-width="400" data-height="460" data-uk-img alt="" src="img/transp.gif">
									<div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-primary">
										<span data-uk-icon="icon:heart; ratio: 0.8"></span> 12.345 <span data-uk-icon="icon:comment; ratio: 0.8"></span> 12.345
									</div>
								</div>
								
							</div>
							<div class="uk-card-body">
								<h6 class="uk-margin-small-bottom uk-margin-remove-adjacent uk-text-bold">HOW TO USE SPACE IN DESIGN</h6>
								<p class="uk-text-small uk-text-muted">Duis aute irure dolor in reprehenderit in voluptate velit</p>
							</div>
							<div class="uk-card-footer">
								<div class="uk-grid uk-grid-small uk-grid-divider uk-flex uk-flex-middle" data-uk-grid>
									<div class="uk-width-expand uk-text-small">
										John Doe
									</div>
									<div class="uk-width-auto uk-text-right">
										<a href="#" data-uk-tooltip="title: Twitter" class="uk-icon-link" data-uk-icon="icon:twitter; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Instagram" class="uk-icon-link" data-uk-icon="icon:instagram; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Behance" class="uk-icon-link" data-uk-icon="icon:behance; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Pinterest" class="uk-icon-link" data-uk-icon="icon:pinterest; ratio: 0.8"></a>
									</div>
									<div class="uk-width-auto uk-text-right">
										<a data-uk-tooltip="title: Drag this card" href="#" class="uk-icon-link drag-icon" data-uk-icon="icon:move; ratio: 1"></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /card -->
					<!-- card -->
					<div class="music-card" data-tags="remastered record from the clash - music bands">
						<div class="uk-card uk-card-small uk-card-default">
							<div class="uk-card-header">
								<div class="uk-grid uk-grid-small uk-text-small" data-uk-grid>
									<div class="uk-width-expand">
										<span class="cat-txt">MUSIC / BANDS</span>
									</div>
									<div class="uk-width-auto uk-text-right uk-text-muted">
										<span data-uk-icon="icon:clock; ratio: 0.8"></span> 1 day.
									</div>
								</div>
							</div>
							<div class="uk-card-media">
								<div class="uk-inline-clip uk-transition-toggle" tabindex="0">
									<img class="lazy" data-src="https://picsum.photos/400/200/?random=2" data-width="400" data-height="200" data-uk-img alt="" src="img/transp.gif">
									<div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-primary">
										<span data-uk-icon="icon:heart; ratio: 0.8"></span> 12.345 <span data-uk-icon="icon:comment; ratio: 0.8"></span> 12.345
									</div>
								</div>
								
							</div>
							<div class="uk-card-body">
								<h6 class="uk-margin-small-bottom uk-margin-remove-adjacent uk-text-bold">REMASTERED RECORD FROM THE CLASH</h6>
								<p class="uk-text-small uk-text-muted">Duis aute irure dolor in reprehenderit in voluptate velit</p>
							</div>
							<div class="uk-card-footer">
								<div class="uk-grid uk-grid-small uk-grid-divider uk-flex uk-flex-middle" data-uk-grid>
									<div class="uk-width-expand uk-text-small">
										John Doe
									</div>
									<div class="uk-width-auto uk-text-right">
										<a href="#" data-uk-tooltip="title: Twitter" class="uk-icon-link" data-uk-icon="icon:twitter; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Instagram" class="uk-icon-link" data-uk-icon="icon:instagram; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Behance" class="uk-icon-link" data-uk-icon="icon:behance; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Pinterest" class="uk-icon-link" data-uk-icon="icon:pinterest; ratio: 0.8"></a>
									</div>
									<div class="uk-width-auto uk-text-right">
										<a data-uk-tooltip="title: Drag this card" href="#" class="uk-icon-link drag-icon" data-uk-icon="icon:move; ratio: 1"></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /card -->
					<!-- card -->
					<div class="design-card" data-tags="how to use typography in design - design">
						<div class="uk-card uk-card-small uk-card-default">
							<div class="uk-card-header">
								<div class="uk-grid uk-grid-small uk-text-small" data-uk-grid>
									<div class="uk-width-expand">
										<span class="cat-txt">DESIGN</span>
									</div>
									<div class="uk-width-auto uk-text-right uk-text-muted">
										<span data-uk-icon="icon:clock; ratio: 0.8"></span> 2 days.
									</div>
								</div>
							</div>
							<div class="uk-card-media">
								<div class="uk-inline-clip uk-transition-toggle" tabindex="0">
									<img class="lazy" data-src="https://picsum.photos/400/570/?random=3" data-width="400" data-height="570" data-uk-img alt="" src="img/transp.gif">
									<div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-primary">
										<span data-uk-icon="icon:heart; ratio: 0.8"></span> 12.345 <span data-uk-icon="icon:comment; ratio: 0.8"></span> 12.345
									</div>
								</div>
								
							</div>
							<div class="uk-card-body">
								<h6 class="uk-margin-small-bottom uk-margin-remove-adjacent uk-text-bold">HOW TO USE TYPOGRAPHY IN DESIGN</h6>
								<p class="uk-text-small uk-text-muted">Duis aute irure dolor in reprehenderit in voluptate velit</p>
							</div>
							<div class="uk-card-footer">
								<div class="uk-grid uk-grid-small uk-grid-divider uk-flex uk-flex-middle" data-uk-grid>
									<div class="uk-width-expand uk-text-small">
										John Doe
									</div>
									<div class="uk-width-auto uk-text-right">
										<a href="#" data-uk-tooltip="title: Twitter" class="uk-icon-link" data-uk-icon="icon:twitter; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Instagram" class="uk-icon-link" data-uk-icon="icon:instagram; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Behance" class="uk-icon-link" data-uk-icon="icon:behance; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Pinterest" class="uk-icon-link" data-uk-icon="icon:pinterest; ratio: 0.8"></a>
									</div>
									<div class="uk-width-auto uk-text-right">
										<a data-uk-tooltip="title: Drag this card" href="#" class="uk-icon-link drag-icon" data-uk-icon="icon:move; ratio: 1"></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /card -->
					<!-- card -->
					<div class="nature-card" data-tags="wildlife in the uco valley - photograhy outdoor">
						<div class="uk-card uk-card-small uk-card-default">
							<div class="uk-card-header">
								<div class="uk-grid uk-grid-small uk-text-small" data-uk-grid>
									<div class="uk-width-expand">
										<span class="cat-txt">Nature / Outdoor</span>
									</div>
									<div class="uk-width-auto uk-text-right uk-text-muted">
										<span data-uk-icon="icon:clock; ratio: 0.8"></span> 2 days.
									</div>
								</div>
							</div>
							<div class="uk-card-media">
								<div class="uk-inline-clip uk-transition-toggle" tabindex="0">
									<img class="lazy" data-src="https://picsum.photos/400/300/?random=3" data-width="400" data-height="300" data-uk-img alt="" src="img/transp.gif">
									<div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-primary">
										<span data-uk-icon="icon:heart; ratio: 0.8"></span> 12.345 <span data-uk-icon="icon:comment; ratio: 0.8"></span> 12.345
									</div>
								</div>
								
							</div>
							<div class="uk-card-body">
								<h6 class="uk-margin-small-bottom uk-margin-remove-adjacent uk-text-bold">WILDLIFE IN THE UCO VALLEY</h6>
								<p class="uk-text-small uk-text-muted">Duis aute irure dolor in reprehenderit in voluptate velit</p>
							</div>
							<div class="uk-card-footer">
								<div class="uk-grid uk-grid-small uk-grid-divider uk-flex uk-flex-middle" data-uk-grid>
									<div class="uk-width-expand uk-text-small">
										John Doe
									</div>
									<div class="uk-width-auto uk-text-right">
										<a href="#" data-uk-tooltip="title: Twitter" class="uk-icon-link" data-uk-icon="icon:twitter; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Instagram" class="uk-icon-link" data-uk-icon="icon:instagram; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Behance" class="uk-icon-link" data-uk-icon="icon:behance; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Pinterest" class="uk-icon-link" data-uk-icon="icon:pinterest; ratio: 0.8"></a>
									</div>
									<div class="uk-width-auto uk-text-right">
										<a data-uk-tooltip="title: Drag this card" href="#" class="uk-icon-link drag-icon" data-uk-icon="icon:move; ratio: 1"></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /card -->
					<!-- card -->
					<div class="nature-card" data-tags="on top of the mountains - nature outdoor">
						<div class="uk-card uk-card-small uk-card-default">
							<div class="uk-card-header">
								<div class="uk-grid uk-grid-small uk-text-small" data-uk-grid>
									<div class="uk-width-expand">
										<span class="cat-txt">Nature / Outdoor</span>
									</div>
									<div class="uk-width-auto uk-text-right uk-text-muted">
										<span data-uk-icon="icon:clock; ratio: 0.8"></span> 3 days.
									</div>
								</div>
							</div>
							<div class="uk-card-media">
								<div class="uk-inline-clip uk-transition-toggle" tabindex="0">
									<img class="lazy" data-src="https://picsum.photos/400/530/?random=8" data-width="400" data-height="530" data-uk-img alt="" src="img/transp.gif">
									<div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-primary">
										<span data-uk-icon="icon:heart; ratio: 0.8"></span> 12.345 <span data-uk-icon="icon:comment; ratio: 0.8"></span> 12.345
									</div>
								</div>
								
							</div>
							<div class="uk-card-body">
								<h6 class="uk-margin-small-bottom uk-margin-remove-adjacent uk-text-bold">ON TOP OF THE MOUNTAINS</h6>
								<p class="uk-text-small uk-text-muted">Duis aute irure dolor in reprehenderit in voluptate velit</p>
							</div>
							<div class="uk-card-footer">
								<div class="uk-grid uk-grid-small uk-grid-divider uk-flex uk-flex-middle" data-uk-grid>
									<div class="uk-width-expand uk-text-small">
										John Doe
									</div>
									<div class="uk-width-auto uk-text-right">
										<a href="#" data-uk-tooltip="title: Twitter" class="uk-icon-link" data-uk-icon="icon:twitter; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Instagram" class="uk-icon-link" data-uk-icon="icon:instagram; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Behance" class="uk-icon-link" data-uk-icon="icon:behance; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Pinterest" class="uk-icon-link" data-uk-icon="icon:pinterest; ratio: 0.8"></a>
									</div>
									<div class="uk-width-auto uk-text-right">
										<a data-uk-tooltip="title: Drag this card" href="#" class="uk-icon-link drag-icon" data-uk-icon="icon:move; ratio: 1"></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /card -->
					<!-- card -->
					<div class="design-card" data-tags="how to create a custom color palette - design">
						<div class="uk-card uk-card-small uk-card-default">
							<div class="uk-card-header">
								<div class="uk-grid uk-grid-small uk-text-small" data-uk-grid>
									<div class="uk-width-expand">
										<span class="cat-txt">Design</span>
									</div>
									<div class="uk-width-auto uk-text-right uk-text-muted">
										<span data-uk-icon="icon:clock; ratio: 0.8"></span> 4 days.
									</div>
								</div>
							</div>
							<div class="uk-card-media">
								<div class="uk-inline-clip uk-transition-toggle" tabindex="0">
									<img class="lazy" data-src="https://picsum.photos/400/180/?random=2" data-width="400" data-height="180" data-uk-img alt="" src="img/transp.gif">
									<div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-primary">
										<span data-uk-icon="icon:heart; ratio: 0.8"></span> 12.345 <span data-uk-icon="icon:comment; ratio: 0.8"></span> 12.345
									</div>
								</div>
								
							</div>
							<div class="uk-card-body">
								<h6 class="uk-margin-small-bottom uk-margin-remove-adjacent uk-text-bold">HOW TO CREATE CUSTOM COLOR PALETTE</h6>
								<p class="uk-text-small uk-text-muted">Duis aute irure dolor in reprehenderit in voluptate velit</p>
							</div>
							<div class="uk-card-footer">
								<div class="uk-grid uk-grid-small uk-grid-divider uk-flex uk-flex-middle" data-uk-grid>
									<div class="uk-width-expand uk-text-small">
										John Doe
									</div>
									<div class="uk-width-auto uk-text-right">
										<a href="#" data-uk-tooltip="title: Twitter" class="uk-icon-link" data-uk-icon="icon:twitter; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Instagram" class="uk-icon-link" data-uk-icon="icon:instagram; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Behance" class="uk-icon-link" data-uk-icon="icon:behance; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Pinterest" class="uk-icon-link" data-uk-icon="icon:pinterest; ratio: 0.8"></a>
									</div>
									<div class="uk-width-auto uk-text-right">
										<a data-uk-tooltip="title: Drag this card" href="#" class="uk-icon-link drag-icon" data-uk-icon="icon:move; ratio: 1"></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /card -->
					<!-- card -->
					<div class="nature-card" data-tags="wildcats in thailand - nature outdoor">
						<div class="uk-card uk-card-small uk-card-default">
							<div class="uk-card-header">
								<div class="uk-grid uk-grid-small uk-text-small" data-uk-grid>
									<div class="uk-width-expand">
										<span class="cat-txt">Nature / Outdoor</span>
									</div>
									<div class="uk-width-auto uk-text-right uk-text-muted">
										<span data-uk-icon="icon:clock; ratio: 0.8"></span> 1 week.
									</div>
								</div>
							</div>
							<div class="uk-card-media">
								<div class="uk-inline-clip uk-transition-toggle" tabindex="0">
									<img class="lazy" data-src="https://picsum.photos/400/220/?random=7" data-width="400" data-height="220" data-uk-img alt="" src="img/transp.gif">
									<div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-primary">
										<span data-uk-icon="icon:heart; ratio: 0.8"></span> 12.345 <span data-uk-icon="icon:comment; ratio: 0.8"></span> 12.345
									</div>
								</div>
								
							</div>
							<div class="uk-card-body">
								<h6 class="uk-margin-small-bottom uk-margin-remove-adjacent uk-text-bold">WILDCATS IN THAILAND</h6>
								<p class="uk-text-small uk-text-muted">Duis aute irure dolor in reprehenderit in voluptate velit</p>
							</div>
							<div class="uk-card-footer">
								<div class="uk-grid uk-grid-small uk-grid-divider uk-flex uk-flex-middle" data-uk-grid>
									<div class="uk-width-expand uk-text-small">
										John Doe
									</div>
									<div class="uk-width-auto uk-text-right">
										<a href="#" data-uk-tooltip="title: Twitter" class="uk-icon-link" data-uk-icon="icon:twitter; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Instagram" class="uk-icon-link" data-uk-icon="icon:instagram; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Behance" class="uk-icon-link" data-uk-icon="icon:behance; ratio: 0.8"></a>
										<a href="#" data-uk-tooltip="title: Pinterest" class="uk-icon-link" data-uk-icon="icon:pinterest; ratio: 0.8"></a>
									</div>
									<div class="uk-width-auto uk-text-right">
										<a data-uk-tooltip="title: Drag this card" href="#" class="uk-icon-link drag-icon" data-uk-icon="icon:move; ratio: 1"></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /card -->
					
				</div>
			</div>
		</section>
		<!--/CARDS WRAPPER-->
		<!--FOOTER-->
		<!--footer id="site-foot" class="uk-section uk-section-secondary uk-section-xsmall">
			<div class="uk-container uk-text-small uk-text-center">
				<a href="https://github.com/zzseba78/Kick-Off">Created by KickOff</a> | Built with <a href="http://getuikit.com" title="Visit UIkit 3 site" target="_blank" data-uk-tooltip><span data-uk-icon="uikit"></span></a>
			</div>
		</footer-->
		<!--/FOOTER-->
		<!-- OFFCANVAS -->
		<div id="offcanvas-nav" data-uk-offcanvas="flip: true; overlay: true">
			<div class="uk-offcanvas-bar uk-offcanvas-bar-animation uk-offcanvas-slide">
				<button class="uk-offcanvas-close uk-close uk-icon" type="button" data-uk-close></button>
				<ul class="uk-nav uk-nav-default">
					<li class="uk-active"><a href="#">Active</a></li>
					<li class="uk-parent">
						<a href="#">Parent</a>
						<ul class="uk-nav-sub">
							<li><a href="#">Sub item</a></li>
							<li><a href="#">Sub item</a></li>
						</ul>
					</li>
					<li class="uk-nav-header">Header</li>
					<li><a href="#js-options"><span class="uk-margin-small-right uk-icon" data-uk-icon="icon: table"></span> Item</a></li>
					<li><a href="#"><span class="uk-margin-small-right uk-icon" data-uk-icon="icon: thumbnails"></span> Item</a></li>
					<li class="uk-nav-divider"></li>
					<li><a href="#"><span class="uk-margin-small-right uk-icon" data-uk-icon="icon: trash"></span> Item</a></li>
				</ul>
				<h3>Title</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			</div>
		</div>
		<!-- /OFFCANVAS -->
		
		<!-- JS FILES -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/js/uikit.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/js/uikit-icons.min.js"></script>
		<script src="js/cards.js"></script>	
		<script>
			setTimeout(function(){
				UIkit.notification('Ahora puedes filtrar las tarjetas con el campo de búsqueda!<br>Escribe "increible", "musica" o "naturaleza"');
			}, 100);
		</script>	

		<script>
			$(document).ready(function () {
	            if (!$.browser.webkit) {
	               $('.wrapper').html('<p>Sorry! Non webkit users. :(</p>');
	            } 
		    });
		</script>
		<style>
			.scrollbar
			{
				margin-left: 30px;
				float: left;
				height: 300px;
				width: 65px;
				background: #F5F5F5;
				overflow-y: scroll;
				margin-bottom: 25px;
			}

			.force-overflow
			{
				min-height: 450px;
			}

			#wrapper
			{
				text-align: center;
				width: 500px;
				margin: auto;
			}


			/*
			 *  STYLE 3
			 */

			#style-3::-webkit-scrollbar-track
			{
				-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
				background-color: #F5F5F5;
			}

			#style-3::-webkit-scrollbar
			{
				width: 6px;
				background-color: #F5F5F5;
			}

			#style-3::-webkit-scrollbar-thumb
			{
				background-color: #000000;
			}


		</style>
	</body>
</html>
