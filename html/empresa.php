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
		<section id="main-content" class="page enterprise">
			<header class="page-header">
				<h1 class="page-title">A empresa</h1>
			</header>
			<div class="page-data">
				<div class="container">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris a enim mi. Aenean lobortis massa et risus fringilla, molestie tincidunt ante malesuada. Donec in elit quis ligula dictum mattis quis id ex. Maecenas molestie quam vitae nisl scelerisque placerat eu nec magna. Nunc mollis eros sem, ut condimentum justo rutrum ut. Vivamus porttitor tempus quam, vel tincidunt dui facilisis auctor. Nunc finibus imperdiet nisl eget venenatis. Maecenas nec arcu pretium, ultrices metus sit amet, ullamcorper velit. Mauris dapibus dolor non imperdiet dictum. Sed tempus sodales nulla, quis mattis orci tincidunt nec.</p>

					<p>Sed odio mi, vehicula a sodales ac, euismod a leo. Phasellus consequat varius risus at egestas. Phasellus eget metus posuere, dictum nibh quis, hendrerit turpis. Maecenas et aliquam arcu, nec ornare erat. Donec eget turpis id elit viverra ultrices non non libero. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam nec quam eu metus ultrices vestibulum.</p>

					<p>Etiam tristique ipsum in mauris varius, non congue nulla cursus. Cras malesuada nibh erat. Sed accumsan ornare arcu, id tincidunt mauris rhoncus sit amet. Nunc sodales gravida purus, sed iaculis metus porta id. Nullam sem orci, sollicitudin viverra mauris a, placerat mattis nulla. Aliquam sit amet leo est. Nam faucibus pulvinar augue, sit amet rutrum sapien euismod vel. Aliquam eu viverra dolor. Nullam aliquet feugiat eros. Suspendisse sed vehicula metus. Vivamus sed efficitur enim. Quisque at elit ac quam molestie rhoncus sit amet ut enim.</p>

					<p>Nam sit amet urna mollis nisl finibus cursus. Donec ac ante aliquam, luctus eros sit amet, aliquam tellus. Aenean id tortor a quam fringilla vulputate. Donec a ligula quis urna bibendum convallis. Donec rutrum tempus maximus. Mauris elementum orci ac ex ultricies faucibus at non magna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut rhoncus ipsum sed orci efficitur, a porttitor elit mattis. Praesent finibus ligula nec cursus scelerisque. Fusce sapien lacus, egestas quis placerat a, dictum ut lorem. Praesent odio urna, bibendum a nibh at, volutpat varius ante. Donec eget mi nisl. Donec quam nulla, molestie in orci nec, gravida molestie nulla.</p>

					<p>Nunc molestie, ante blandit congue consectetur, velit diam euismod libero, nec convallis leo ipsum congue ligula. Mauris vel mauris nec nisi vehicula eleifend id eu erat. Suspendisse vel nisi in eros pulvinar mattis id a ante. Ut augue neque, sollicitudin vel mi vel, condimentum elementum nisl. Donec tincidunt viverra pretium. Suspendisse potenti. Vestibulum odio dui, mollis non molestie nec, sollicitudin at mi. Aliquam feugiat tempor neque, a rutrum lorem porttitor sed. </p>
				</div>
				<div class="mission">
					<div class="container">
						<h2 class="data-title">
							Missão
						</h2>
						<p>Oferecer aos nossos clientes brinquedos que ajudem com qualidade o desenvolvimento físico e na coordenação motora de todas as crianças.</p>
					</div>
				</div>
				<div class="vision">
					<div class="container">
						<h2 class="data-title">
							Visão
						</h2>
						<p>Ser referência pela qualidade e segurança em todos os produtos comercializados.</p>
					</div>
				</div>
				<div class="values">
					<div class="container">
						<h2 class="data-title">
							Valores
						</h2>
						<p>Ética e respeito ao cliente e seus colaboradores, trabalhando com profissionalismo na busca constante de oferecer os melhores produtos com os melhores preços, onde você está em primeiro lugar.</p>
					</div>
				</div>
			</div>
			<footer class="page-footer">
				<?php include_once('include/page/product-carousel.php'); ?>
			</footer>
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