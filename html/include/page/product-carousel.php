
<section class="products">
	<div class="container">
		<h2 class="product-carousel-title">
			Nossos Produtos
		</h2>
		<div class="product-carousel product-list">
			<?php for ($i=0; $i < 3; $i++) { ?>
				<div class="product col-md-4">
					<a href="produto.php" class="product-image">

						<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						width="359px" height="388px" viewBox="0 0 359 388" enable-background="new 0 0 359 388" xml:space="preserve">
							<g>
								<defs>
									<path id="SVGID_1_" d="M0.058,5.444c0,0,14,274,0,379.333c95.332,0,132.666,1.666,159,2.334c26.333,0.666,142.334,4.332,194.666,0
									c2-22.668,10.668-104,0-211.333c-10.666-107.333,0-170.334,0-170.334S204.058,9.778,156.391,2.778
									C108.391,1.444,30.726-0.224,0.058,5.444z"/>
								</defs>
								<clipPath id="SVGID_2_">
									<use xlink:href="#SVGID_1_"  overflow="visible"/>
								</clipPath>
								<g id="UcjeDO_1_" clip-path="url(#SVGID_2_)">

									<image overflow="visible" width="370" height="420" id="UcjeDO" xlink:href="<?php 
									$path = "public/assets/image/temp/product_default.jpg";
									$imgData = base64_encode(file_get_contents($path));
									echo 'data: '.mime_content_type($path).';base64,'.$imgData; 
									?>">
									</image>
								</g>
							</g>
						</svg>
					</a>
					<div class="product-extra">
						<h4 class="product-name">
							Mini volei
						</h4>
						<div class="product-buttons">
							<a href="javascript: void(0);" class="button button-yellow product-link" title="ver produto">
								ver produto
							</a>
						</div>
					</div>
				</div>
				<div class="product col-md-4">
					<a href="produto.php" class="product-image">

						<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						width="359px" height="388px" viewBox="0 0 359 388" enable-background="new 0 0 359 388" xml:space="preserve">
							<g>
								<defs>
									<path id="SVGID_1_" d="M0.058,5.444c0,0,14,274,0,379.333c95.332,0,132.666,1.666,159,2.334c26.333,0.666,142.334,4.332,194.666,0
									c2-22.668,10.668-104,0-211.333c-10.666-107.333,0-170.334,0-170.334S204.058,9.778,156.391,2.778
									C108.391,1.444,30.726-0.224,0.058,5.444z"/>
								</defs>
								<clipPath id="SVGID_2_">
									<use xlink:href="#SVGID_1_"  overflow="visible"/>
								</clipPath>
								<g id="UcjeDO_1_" clip-path="url(#SVGID_2_)">

									<image overflow="visible" width="370" height="420" id="UcjeDO" xlink:href="<?php 
									$path = "public/assets/image/temp/product_default2.jpg";
									$imgData = base64_encode(file_get_contents($path));
									echo 'data: '.mime_content_type($path).';base64,'.$imgData; 
									?>">
									</image>
								</g>
							</g>
						</svg>
					</a>
					<div class="product-extra">
						<h4 class="product-name">
							Mini basquete
						</h4>
						<div class="product-buttons">
							<a href="javascript: void(0);" class="button button-yellow product-link" title="ver produto">
								ver produto
							</a>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
		<div class="clearfix"></div>
	</div>
</section>