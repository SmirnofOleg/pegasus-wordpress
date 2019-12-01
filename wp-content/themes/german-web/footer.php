<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package german-web
 */

?>
<!--Подвал-->
<footer class="footer">
		<div class="wrapper">
			<div class="foot-cont">
				<div class="foot-cont__cont-item">
					<h1 href="#">Наши Машины</h1>
					<ul>

						<?php wp_nav_menu(array( 'theme_location' => 'footer-menu-1', 'menu_class' => '' )); ?>
						
					</ul>
				</div>
				<div class="foot-cont__cont-item">
					<h1 href="#"">Наш Сервис</h1>
					
				<ul>

					<?php wp_nav_menu(array( 'theme_location' => 'footer-menu-2', 'menu_class' => '' )); ?>
				
				</ul>
				</div>
				<div class="foot-cont__cont-item">
					<h1 href="#">О Нас</h1>
					<ul>
						<li><a href="#">Правила и Условия</a></li>
						<li><a href="#">О нас</a></li>
						<li><a href="#">Аэропорты</a></li>
						<li><a href="#">Контакты</a></li>
						<li><a href="#">Блог</a></li>
						<li><a href="#">Автопарк</a></li>
					</ul>
				</div>
				<div class="foot-cont__cont-item">
					<div class="cont-link">
						<a href="#" class="link last-link">Сделать заказ</a>
						<a href="#" class="link last-link">Узнать тариф</a>
					</div>
					<!-- <div class="overlay"></div> -->
					<div class="contacts-footer">

						<div class="phone-footer overlay">
							<a class="phone-footer__phone" href="tel:+442077198816">+44 20 7719 8816 <br>
								<span>круглосуточно</span>
							</a><br>

							<a class="phone-footer__phone" href="tel:+447771007676">+44 777 100 7676 <br>
								<span>viber & whats up</span>
							</a><br>
						</div>

						<div class="icons">
							<a href="#" title="instagram" target="_blank"><i class="fab fa-instagram"
									aria-hidden="true"></i></a>
							<a href="#" title="facebook" target="_blank"><i class="fab fa-facebook-square"
									aria-hidden="true"></i></a>
							<a href="#" title="google-plus" target="_blank"><i class="fab fa-google-plus-square"
									aria-hidden="true"></i></a>
							<a href="#" title="linkedin" target="_blank"><i class="fab fa-linkedin"
									aria-hidden="true"></i></a>
						</div>
					</div>



				</div>
			</div>


			<div class="date-foot">
				<p>
					2010-2018 ©Pegasus Luxury Services Ltd. Company Number: 08104782. PCO-Operator Licence:
					0086810101.
					All rights reserved.
				</p>
			</div>

		</div>
	</footer>

<?php wp_footer(); ?>

</body>
</html>
