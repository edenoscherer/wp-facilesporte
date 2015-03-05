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
		<section id="main-content" class="page contact">
			<header class="page-header">
				<h1 class="page-title">Contato</h1>
			</header>
			<div class="page-data">
				<div class="container">
					<form action="" method="post" class="form-horizontal col-md-6 col-md-offset-3" style="margin-bottom: 35px">
						<p class="block-title" style="margin-right: 15px">Preencha os dados abaixo e envie-nos, entraremos em contato com você o mais breve possível.</p>
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
						<div class="form-group col-md-9 pull-right" style="margin-right: 15px">
							<select class="form-control" id="city" required>
								<option value="">- Cidade -</option>
							</select>
						</div>
						<div class="form-group col-md-12">
							<textarea class="form-control" id="message" rows="5" placeholder="* Deixe uma mensagem" required></textarea>
						</div>
						<div class="clearfix"></div>
						<p>Os campos que possuem * são de preenchimento obrigatório</p>
						<button class="button button-yellow" type="submit">Enviar dados</button>
					</form>
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