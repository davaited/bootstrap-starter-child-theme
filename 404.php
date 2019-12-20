<?php get_header(); ?>

<div id="main-content">
	<div class="container">
		<div id="content-area" class="clearfix">
			<article <?php post_class( 'et_pb_post not_found' ); ?>>
				<h1><?php esc_html_e('Страница не найдена','WP Loop'); ?></h1>
				<p><?php esc_html_e('Ой! Страница, на которую вы пытаетесь перейти не существует, попробуйте ссылки ниже.', 'WP Loop'); ?></p>
				<button class="btn btn-primary" type="button" onclick="document.location.href='/'">Вернуться на главную </button>
				<button class="btn btn-primary" type="button" onclick="window.history.go(-1); return false;">Назад</button>
			</article> <!-- .et_pb_post -->
		</div> <!-- #content-area -->
	</div> <!-- .container -->
</div> <!-- #main-content -->

<?php get_footer(); ?>
