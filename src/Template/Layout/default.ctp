<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'Frankchela';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?> | 
        <?= $this->fetch('title') ?>
    </title>
	<link rel="icon" type="image/png" href="/frankchela/img/icons/favicon.png"/>
	<?= $this->Html->css('bootstrap/css/bootstrap.min.css') ?>
	<?= $this->Html->css('font-awesome-4.7.0/css/font-awesome.min.css') ?>
	<?= $this->Html->css('themify/themify-icons.css') ?>
	<?= $this->Html->css('animate/animate') ?>
	<?= $this->Html->css('css-hamburgers/hamburgers.min.css') ?>
	<?= $this->Html->css('animsition/css/animsition.min.css') ?>
	<?= $this->Html->css('select2/select2.min.css') ?>
	<?= $this->Html->css('daterangepicker/daterangepicker.css') ?>
	<?= $this->Html->css('slick/slick.css') ?>
	<?= $this->Html->css('lightbox2/css/lightbox.min.css') ?>
	<?= $this->Html->css('util') ?>
	<?= $this->Html->css('main') ?>
	<?= $this->Html->css('me') ?>
</head>
<body class="animsition">
    <!-- Header -->
	<header style="position:static">
		<!-- Header desktop -->
		<div class="wrap-menu-header gradient1 trans-0-4">
			<div class="container h-full">
				<div class="wrap_header trans-0-3">
					<!-- Logo -->
					<div class="logo">
						<a href="index.html">
							<img src="/frankchela/img/icons/logo.png" alt="IMG-LOGO" data-logofixed="/frankchela/img/icons/logo2.png">
						</a>
					</div>

					<!-- Menu -->
					<div class="wrap_menu p-l-45 p-l-0-xl">
						<nav class="menu">
							<ul class="main_menu">
								<li>
									<a href="index.html">Inicio</a>
								</li>

								<li>
									<a href="menu.html">Servicios</a>
								</li>

								<li>

								<?= $this->Html->link('Cotizador', [
									'controller' => 'Events',
									'action' => 'create']) ?>
								</li>
								
								<li>
								<?= $this->Html->link('Login', [
									'controller' => 'Users',
									'action' => 'login']) ?>
								</li>

								<li>
									<a href="about.html">Nosotros</a>
								</li>

								<li>
									<a href="contact.html">Contacto</a>
								</li>
							</ul>
						</nav>
					</div>

					<!-- Social -->
					<div class="social flex-w flex-l-m p-r-20">
						<a href="#"><i class="fa fa-tripadvisor" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-facebook m-l-21" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-twitter m-l-21" aria-hidden="true"></i></a>

						<button class="btn-show-sidebar m-l-33 trans-0-4"></button>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Sidebar -->
	<aside class="sidebar trans-0-4">
		<!-- Button Hide sidebar -->
		<button class="btn-hide-sidebar ti-close color0-hov trans-0-4"></button>

		<!-- - -->
		<ul class="menu-sidebar p-t-95 p-b-70">
			<li class="t-center m-b-13">
				<a href="index.html" class="txt19">Inicio</a>
			</li>

			<li class="t-center m-b-13">
				<a href="menu.html" class="txt19">Eventos</a>
			</li>

			<li class="t-center m-b-13">
				<div class="txt19">
					<?= $this->Html->link('Cotizador', [
						'controller' => 'Events',
						'action' => 'create']) ?>
				</div>
			</li>

			<li class="t-center m-b-13">
				<div class="txt19">
					<?= $this->Html->link('Login', [
						'controller' => 'Users',
						'action' => 'login']) ?>
				</div>
			</li>

			<li class="t-center m-b-13">
				<a href="about.html" class="txt19">Nosotros</a>
			</li>

			<li class="t-center m-b-33">
				<a href="contact.html" class="txt19">Contacto</a>
			</li>

			<li class="t-center">
				<!-- Button3 -->
				<div class="btn3 flex-c-m size13 txt11 trans-0-4 m-l-r-auto">
					<?= $this->Html->link('Cotizador', [
						'controller' => 'Events',
						'action' => 'create']) ?>
				</div>		
			</li>
		</ul>

		<!-- - -->
		<div class="gallery-sidebar t-center p-l-60 p-r-60 p-b-40">
			<!-- - -->
			<h4 class="txt20 m-b-33">
				Galería
			</h4>

			<!-- Gallery -->
			<div class="wrap-gallery-sidebar flex-w">
				<a class="item-gallery-sidebar wrap-pic-w" href="img/photo-gallery-01.jpg" data-lightbox="gallery-footer">
					<?= $this->Html->image('photo-gallery-thumb-01.jpg', ['alt' => 'GALLERY']) ?>
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="img/photo-gallery-02.jpg" data-lightbox="gallery-footer">
					<?= $this->Html->image('photo-gallery-thumb-02.jpg', ['alt' => 'GALLERY']) ?>
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="img/photo-gallery-03.jpg" data-lightbox="gallery-footer">
					<?= $this->Html->image('photo-gallery-thumb-03.jpg', ['alt' => 'GALLERY']) ?>
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="img/photo-gallery-05.jpg" data-lightbox="gallery-footer">
					<?= $this->Html->image('photo-gallery-thumb-05.jpg', ['alt' => 'GALLERY']) ?>
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="img/photo-gallery-06.jpg" data-lightbox="gallery-footer">
					<?= $this->Html->image('photo-gallery-thumb-06.jpg', ['alt' => 'GALLERY']) ?>
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="img/photo-gallery-07.jpg" data-lightbox="gallery-footer">
					<?= $this->Html->image('photo-gallery-thumb-07.jpg', ['alt' => 'GALLERY']) ?>
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="img/photo-gallery-09.jpg" data-lightbox="gallery-footer">
					<?= $this->Html->image('photo-gallery-thumb-09.jpg', ['alt' => 'GALLERY']) ?>
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="img/photo-gallery-10.jpg" data-lightbox="gallery-footer">
					<?= $this->Html->image('photo-gallery-thumb-10.jpg', ['alt' => 'GALLERY']) ?>
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="img/photo-gallery-11.jpg" data-lightbox="gallery-footer">
					<?= $this->Html->image('photo-gallery-thumb-11.jpg', ['alt' => 'GALLERY']) ?>
				</a>
			</div>
		</div>
	</aside>

    <?= $this->Flash->render() ?>
    <div class="container-full">
        <?= $this->fetch('content') ?>
    </div>

	<!-- Footer -->
	<footer class="bg1 w-100" style="bottom:0;position:static">
		<div class="end-footer bg2">
			<div class="container">
				<div class="flex-sb-m flex-w p-t-22 p-b-22">
					<div class="p-t-5 p-b-5">
						<a href="#" class="fs-15 c-white"><i class="fa fa-tripadvisor" aria-hidden="true"></i></a>
						<a href="#" class="fs-15 c-white"><i class="fa fa-facebook m-l-18" aria-hidden="true"></i></a>
						<a href="#" class="fs-15 c-white"><i class="fa fa-twitter m-l-18" aria-hidden="true"></i></a>
					</div>

					<div class="txt17 p-r-20 p-t-5 p-b-5">
						Copyright &copy; 2018 All rights reserved  |  This template is made with <i class="fa fa-heart"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection1 -->
	<div id="dropDownSelect1"></div>
<!--===============================================================================================-->
	<?= $this->Html->script('jquery/jquery-3.2.1.min') ?>
<!--===============================================================================================-->
	<?= $this->Html->script('animsition/js/animsition.min') ?>
<!--===============================================================================================-->
	<?= $this->Html->script('bootstrap/js/popper') ?>
	<?= $this->Html->script('bootstrap/js/bootstrap.min') ?>
<!--===============================================================================================-->
	<?= $this->Html->script('select2/select2.min') ?>
<!--===============================================================================================-->
	<?= $this->Html->script('daterangepicker/moment.min') ?>
	<?= $this->Html->script('daterangepicker/daterangepicker') ?>
<!--===============================================================================================-->
	<?= $this->Html->script('slick/slick.min.js') ?>
	<?= $this->Html->script('slick-custom.js') ?>
<!--===============================================================================================-->
	<?= $this->Html->script('parallax100/parallax100.js') ?>
	<script type="text/javascript">
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<?= $this->Html->script('countdowntime/countdowntime') ?>
<!--===============================================================================================-->
	<?= $this->Html->script('lightbox2/js/lightbox.min') ?>
<!--===============================================================================================-->
	<?= $this->Html->script('main') ?>
</body>
</html>
