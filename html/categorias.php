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
		<section id="main-content" class="page products-categories">
			<header class="page-header">
				<h1 class="page-title">Nossos produtos</h1>
			</header>
			<div class="select-category">
				<a href="produtos.php" class="category">
					<div class="content-icon">
						<svg class="category-icon" version="1.1" id="Layer_1" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns"
							 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="256.5px" height="256.5px"
							 viewBox="0 0 256.5 256.5" enable-background="new 0 0 256.5 256.5" xml:space="preserve">
							<circle cx="43.546" cy="230.488" r="25.527"/>
							<circle cx="145.655" cy="26.271" r="25.527"/>
							<polygon points="166.077,91.365 139.272,160.288 78.008,143.696 100.982,87.536 109.917,56.903 160.972,70.943 "/>
							<path fill="none" stroke="#000000" stroke-width="26" stroke-miterlimit="10" d="M58.862,123.273l6.382-14.04
								c6.382-14.039,16.593-25.526,29.356-33.185l0,0c10.211-6.382,21.698-8.935,34.461-6.382l21.699,5.105
								c8.935,1.276,16.593,5.105,25.526,8.935L235,115.615"/>
							<line fill="none" stroke="#000000" stroke-width="26" stroke-linejoin="round" stroke-miterlimit="10" x1="135.443" y1="134.762" x2="94.601" y2="243.251"/>
							<line fill="none" stroke="#000000" stroke-width="26" stroke-linejoin="round" stroke-miterlimit="10" x1="104.812" y1="115.615" x2="75.455" y2="180.71"/>
						</svg>
					</div>
					<h2 class="category-name">
						Linha esporte
					</h2>
				</a>
				<a href="produtos.php" class="category">
					<div class="content-icon">
						<svg class="category-icon" version="1.1" id="Layer_1" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns"
							 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="256.5px" height="256.5px"
							 viewBox="0 0 256.5 256.5" enable-background="new 0 0 256.5 256.5" xml:space="preserve">
							<g id="Page-1">
								<g id="Core" transform="translate(-3.000000, -2.000000)">
									<g id="accessibility" transform="translate(3.000000, 2.000000)">
										<path id="Shape" d="M128,0.625c14.017,0,25.493,11.471,25.493,25.493S142.017,51.611,128,51.611
											c-14.022,0-25.493-11.471-25.493-25.493S113.978,0.625,128,0.625L128,0.625z M242.719,89.851H166.24v165.705h-25.494v-76.479
											h-25.492v76.479H89.761V89.851H13.281V64.357h229.438V89.851L242.719,89.851z"/>
									</g>
								</g>
							</g>
						</svg>
					</div>
					<h2 class="category-name">
						Linha esporte <span class="highlight"><em>adaptada</em></span>
					</h2>
				</a>
					
			</div>
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