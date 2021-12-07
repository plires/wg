<header class="show">

	<div class="container">
		<div class="col-md-12">
			
			<a class="close_subnavigation" href="./">
				<img class="img-fluid" src="./img/header/logo-wg.png" alt="logo wg">
			</a>

			<div id="toggleIcon">
				<i id="hamburger" class="fas fa-bars"></i>
			</div>

			<section class="navigation_container" id="menu">

				<nav>

					<ul id="navigation">
						<li>
							<?php $res = $current == 'quienes_somos' ? 'active' : ''; ?>
							<a class="close_subnavigation <?= $res ?>" href="./quienes-somos.php">QUIÉNES SOMOS</a>
						</li>
						<li>
							<?php $res = $current == 'seguros' ? 'active' : ''; ?>
							<button class="transition  <?= $res ?>" id="btn_products">COTIZÁ TU SEGURO</button>
						</li>
						<li>
							<?php $res = $current == 'clientes' ? 'active' : ''; ?>
							<a class="close_subnavigation <?= $res ?>" href="./clientes.php">CLIENTES</a>
						</li>
						<!-- <li>
							<?php $res = $current == 'blog' ? 'active' : ''; ?>
							<a class="close_subnavigation" href="#">BLOG</a>
						</li> -->
						<li>
							<?php $res = $current == 'contacto' ? 'active' : ''; ?>
							<a class="close_subnavigation <?= $res ?>" href="./contacto.php">CONTACTO</a>
						</li>
						<li>
							<?php $res = $current == 'sumate' ? 'active' : ''; ?>
							<a class="close_subnavigation <?= $res ?>" href="./seguros-sumate.php" class="btn btn-primary">SUMATE</a>
						</li>
					</ul>

					<ul class="transition" id="sub_navigation">
						<div class="submenu_desktop">
							<li><a id="close_products" href="#"><i class="fas fa-arrow-left"></i></a></li>

							<li>
								<?php $res_sub = $current_sub == 'vida' ? 'active' : ''; ?>
								<a class="transition <?= $res_sub ?>" href="./seguro-vida.php">Seguros de Vida</a>
							</li>

							<li>
								<?php $res_sub = $current_sub == 'agro' ? 'active' : ''; ?>
								<a class="transition <?= $res_sub ?>" href="./seguro-agricola.php">Seguros Agrícolas</a>
							</li>

							<li>
								<?php $res_sub = $current_sub == 'patrimonial' ? 'active' : ''; ?>
								<a class="transition <?= $res_sub ?>" href="./seguro-patrimoniales.php">Seguros Patrimoniales</a>
							</li>

						</div>
					</ul>

				</nav>

			</section>
			
		</div>
	</div>

</header>