<?php
get_header();
?>

<?php the_content(); ?>

<?php
echo esc_html( get_template_part( 'template-parts/pagination', 'infinite-scroll' ) );
?>

<section class="loginpage-background">
		<div class="loginpage-form">
			<h1 class="loginpage-form__header">
				Log in
			</h1>
			<p class="loginpage-form__description">
				Log in with your data that you received from the photographer
			</p>
			<form>
				<label>
					<input class="loginpage-form__input" type="email" placeholder="E-mail">
				</label>
				<label>
					<input class="loginpage-form__input" type="password" placeholder="Password">
				</label>
				<div class="loginpage-btn">
					<a class="loginpage-btn__link" href="#">Forgot password?</a>
					<input class="loginpage-btn__submit" type="submit" value="Log in">
				</div>
			</form>
		</div>
	</section>

<?php
get_footer();
?>