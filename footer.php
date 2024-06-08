
</main>

<?php do_action( 'pfadispeicher_content_end' ); ?>

</div>

<?php do_action( 'pfadispeicher_content_after' ); ?>

<footer class="site-footer py-12" role="contentinfo">
	<?php do_action( 'pfadispeicher_footer' ); ?>

	<div class="flex justify-between">
		<div>&copy; Pfadi Speicher <?php echo date_i18n( 'Y' );?></div>
		<div>Pfadi Speicher, 9042 Speicher</div>
	</div>
</footer>

</div>

<?php wp_footer(); ?>

</body>
</html>
