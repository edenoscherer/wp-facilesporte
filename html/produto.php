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
		<section id="main-content" class="page product">
			<article class="page-data">
				<div class="product-images">
					<figure class="selected-image">
						<img src="http://lorempixel.com/1920/1400" alt="">
						<span class="loading">Carregando...</span>
					</figure>
					<div class="image-list">
						<div class="container">
							<div class="col-md-7">
								<h3 class="title">
									Olha só, tem mais fotos!
								</h3>
								<div class="images">
									<?php for ($i=0; $i < 15; $i++) { ?>
									<div class="image">
										<a href="javascript: void(0);" <?php if($i == 0) echo 'class="active"'; ?> onclick="change('http://lorempixel.com/1920/1400/animals', this);">
											<span class="image-icon" style="background-image: url('http://lorempixel.com/100/100/animals')"></span>	
										</a>
									</div>
									<?php } ?>
								</div>
							</div>
							<div class="col-md-4 col-md-offset-1">
								<a href="javascriot: void(0);" class="go-budget">
									<h3 class="title">
										Orçamento
									</h3>
									<p class="desc">
										Clique aqui para fazer um orçamento desse produto!
									</p>
									<i class="go-budget-icon"></i>
								</a>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="col-md-6">
						<h3 class="block-title">
							Descrição
						</h3>
						<div class="description">
							<p>A Mini Trave Profissional da GOOOL90 é a melhor opção quando o assunto é diversão. Fabricada com materiais resistentes, a Mini Trave pode ser desmontada com facilidade. <br>Mini Trave Profissional, Futebol de gente grande.</p>
						</div>
						
						<h3 class="block-title">
							O que eu recebo comprando esse produto?
						</h3>
						<div class="following-products">
							<p>
								01 Mini Trave
								<br>01 Rede de Nylon
								<br>01 Bola Nº 01
								<br>01 Bomba de Ar
							</p>
						</div>
					</div>
					<div class="col-md-6 content-budget">
						<form action="" method="post" class="form-horizontal">
							<h2 class="block-title">Orçamento</h2>
							<div class="form-group col-md-12">
								<input type="text" class="form-control" id="name" placeholder="* Seu nome" required>
							</div>
							<div class="form-group col-md-12">
								<input type="email" class="form-control" id="email" placeholder="* Seu e-mail" required>
							</div>
							<div class="form-group col-md-12">
								<input type="tel" class="form-control" id="phone" placeholder="* Seu telefone" required>
							</div>
							<div class="form-group col-md-12">
								<input type="tel" class="form-control" id="enterprise" placeholder="Empresa">
							</div>
							<div class="form-group col-md-3">
								<select class="form-control" id="uf" required>
									<option value="">- Estado -</option>
								</select>
							</div>
							<div class="form-group col-md-9 pull-right" style="padding-right: 30px">
								<select class="form-control" id="city" required>
									<option value="">- Cidade -</option>
								</select>
							</div>
							<div class="form-group col-md-12">
								<textarea class="form-control" id="message" rows="5" placeholder="* Deixe uma mensagem" required></textarea>
							</div>
							<div class="clearfix"></div>
							<p>Os campos que possuem * são de preenchimento obrigatório</p>
							<button class="button button-yellow" type="submit">Enviar orçamento</button>
						</form>
					</div>
				</div>
			</article>
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
		$('.go-budget').click(function(){
		    $("html, body").animate({ scrollTop: $('.content-budget').offset().top }, 600);
		    return false;
		 });
		var $window = $(window);
		var $image = $('.selected-image');

		$(window).scroll(function() {
			var docViewTop = $window.scrollTop();
		    var docViewBottom = docViewTop + $window.height();

		    var imageTop = $image.offset().top;
		    var imageBottom = imageTop + $image.height();

			if(imageBottom <= docViewBottom) {
				$('.image-list').addClass('poa');
			} else {
				$('.image-list').removeClass('poa');
			}
		});
		$(document).ready(function() {
			var docViewTop = $window.scrollTop();
		    var docViewBottom = docViewTop + $window.height();

		    var imageTop = $image.offset().top;
		    var imageBottom = imageTop + $image.height();

			if(imageBottom <= docViewBottom) {
				$('.image-list').addClass('poa');
			} else {
				$('.image-list').removeClass('poa');
			}
		});


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
		});
		$('.images').owlCarousel({
		   	loop:false,
		    margin:3,
		    nav:true,
		    dots: false,
		    responsive:{
		        0:{
		            items:4
		        },
		        1350:{
		            items:5
		        }
		    }
		});
	</script>
	<script type="text/javascript">
		function loadImage(options, callback) {
			var seconds = 0,
			maxSeconds = 10,
			complete = false,
			done = false;

			if (options.maxSeconds) {
				maxSeconds = options.maxSeconds;
			}

			function tryImage() {
				if (done) { return; }
				if (seconds >= maxSeconds) {
					callback({ err: 'timeout' });
					done = true;
					return;
				}
				if (complete && img.complete) {
					if (img.width && img.height) {
						callback({ img: img });
						done = true;
						return;
					}
					callback({ err: '404' });
					done = true;
					return;
				} else if (img.complete) {
					complete = true;
				}
				seconds++;
				callback.tryImage = setTimeout(tryImage, 1000);
			}
			var img = new Image();
			img.onload = tryImage();
			img.src = options.src;
			tryImage();
		}
		function change(url, that) {
			$('.selected-image').addClass('is-loading');
			loadImage({ src : url, maxSeconds : 10 }, function(status) {
				$('.selected-image').removeClass('is-loading');
				// console.log(status);
				if(status.err) {
					// handle error
					return;
				} else {
					$('.selected-image img').attr('src', status.img.src);
					$('.images .image a').removeClass('active');
					$(that).addClass('active');
				}
			}); 
		}
	</script>
</body>
</html>