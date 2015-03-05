<!DOCTYPE html>
<html lang="br">
<head>
	<?php include 'include/head.php'; ?>
</head>
<body>
	<section id="all">
		<!-- header -->
		<?php include 'include/header.php'; ?>
		<!-- /header -->
		<!-- main content -->
		<section id="main-content" class="index">
			<section id="slider" class="cycle-slideshow" 
			data-cycle-fx=fade
			data-cycle-timeout=3000
			data-cycle-delay=1000
			data-cycle-slides="> .slide"
			data-cycle-pause-on-hover="true"
			data-cycle-pager=".cycle-pager">

				<div class="slide">
					<img src="http://lorempixel.com/600/600" class="slide-image" alt="">
					<div class="slide-data">
						<h2 class="slide-title">
							Mini trave <strong>Goool90</strong>
						</h2>
						<h3 class="slide-desc">
							Um jeito fácil e rápido de praticar futebol em qualquer lugar
						</h3>
						<a href="http://google.com" class="slide-link">
							saiba mais
						</a>
					</div>
				</div>
				<div class="slide">
					<img src="http://lorempixel.com/600/600/animals" class="slide-image" alt="">
					<div class="slide-data">
						<h2 class="slide-title">
							Mini trave <strong>Goool90</strong>
						</h2>
						<h3 class="slide-desc">
							Um jeito fácil e rápido de praticar futebol em qualquer lugar
						</h3>
						<a href="http://google.com" class="slide-link">
							saiba mais
						</a>
					</div>
				</div>
				<div class="slide">
					<img src="http://lorempixel.com/600/600/animals" class="slide-image" alt="">
					<div class="slide-data">
						<h2 class="slide-title">
							Mini trave <strong>Goool90</strong>
						</h2>
						<h3 class="slide-desc">
							Um jeito fácil e rápido de praticar futebol em qualquer lugar
						</h3>
						<a href="http://google.com" class="slide-link">
							saiba mais
						</a>
					</div>
				</div>
				<div class="slide">
					<img src="http://lorempixel.com/600/600/animals" class="slide-image" alt="">
					<div class="slide-data">
						<h2 class="slide-title">
							Mini trave <strong>Goool90</strong>
						</h2>
						<h3 class="slide-desc">
							Um jeito fácil e rápido de praticar futebol em qualquer lugar
						</h3>
						<a href="http://google.com" class="slide-link">
							saiba mais
						</a>
					</div>
				</div>

			</section>
			<div class="cycle-pager"></div>

			<?php include_once('include/page/product-carousel.php'); ?>

			<section class="history">
				<div class="container">
					<h2 class="title">Como tudo começou</h2>
					<p class="desc">
						Nullam dapibus mauris et augue facilisis pellentesque ut ac eros. Donec pretium orci vitae volutpat 
						cursus. Sed purus turpis, volutpat non sem eget, pellentesque convallis quam. Mauris vel suscipit sem. 
						Aliquam urna nulla, tristique vitae orci vel, viverra dictum nibh. <br>
						Donec sapien nisl, pretium vulputate efficitur in, posuere aliquam purus. Donec tortor ipsum, 
						commodo in cursus a, suscipit sed enim. Quisque vehicula aliquam tellus, quis commodo leo tempus 
						et. Integer lobortis ac justo eu scelerisque. Morbi varius, nisi at placerat eleifend, diam metus volutpat 
						metus, eu vehicula massa nibh vitae nisl. Morbi sit amet tellus id sem porttitor finibus. Morbi auctor 
						euismod neque sed blandit. Donec ac posuere odio. Proin mauris lorem, cursus volutpat pulvinar vitae, 
						porta in neque. Fusce rutrum libero id lorem laoreet, ac convallis magna vulputate.
					</p>
					<a href="javascript: void(0);" class="button">veja mais</a>
				</div>
			</section>
			<section class="accessibility">
					<h2 class="title">Acessibilidade</h2>
					<span class="tip">
						Nosso objetivo é trazer a felicidade para todas as pessoas de uma forma especial
					</span>
					<div class="desc">
						<div class="container">
							Nullam dapibus mauris et augue facilisis pellentesque ut ac eros. Donec pretium orci vitae volutpat 
							cursus. Sed purus turpis, volutpat non sem eget, pellentesque convallis quam. Mauris vel suscipit sem. 
							Aliquam urna nulla, tristique vitae orci vel, viverra dictum nibh. <br>
							Donec sapien nisl, pretium vulputate efficitur in, posuere aliquam purus. Donec tortor ipsum, 
							commodo in cursus a, suscipit sed enim. Quisque vehicula aliquam tellus, quis commodo leo tempus 
							et. Integer lobortis ac justo eu scelerisque. Morbi varius, nisi at placerat eleifend, diam metus volutpat 
							metus, eu vehicula massa nibh vitae nisl. Morbi sit amet tellus id sem porttitor finibus. Morbi auctor 
							euismod neque sed blandit. Donec ac posuere odio. Proin mauris lorem, cursus volutpat pulvinar vitae, 
							porta in neque. Fusce rutrum libero id lorem laoreet, ac convallis magna vulputate.
							<br>
							<div class="text-center" style="margin-top: 30px">
								<a href="" class="button button-blue button-large">Conheça nossos produtos adaptados</a>
							</div>
						</div>
					</div>
					<ul class="gallery unstyled">
						<?php for ($i=0; $i < 4; $i++) { ?>
						<li>
							<a href="http://10.0.0.122/facilesporte/public/assets/image/default/logo.png" rel="gallery" class="fancybox">
								<span class="zoom">Zoom</span>
								<img src="http://lorempixel.com/600/600" alt="">
							</a>
						</li>
						<li>
							<a href="http://10.0.0.122/facilesporte/public/assets/image/default/logo.png" rel="gallery" class="fancybox">
								<span class="zoom">Zoom</span>
								<img src="http://lorempixel.com/600/600" alt="">
							</a>
						</li>
						<?php } ?>
					</ul>
			</section>
		</section>
		<!-- / main content -->
		<!-- footer -->
		<?php include 'include/footer.php'; ?>
		<!-- /footer -->
	</section>
	<script type="text/javascript">
		$('.fancybox').fancybox();
	</script>
	<script type="text/javascript">
		$('.product-carousel').owlCarousel({
		    loop:true,
		    margin:10,
		    nav:true,
		    dots: false,
		    responsive:{
		        0:{
		            items:2
		        },
		        1350:{
		            items:3
		        }
		    }
		})
	</script>
</body>
</html>