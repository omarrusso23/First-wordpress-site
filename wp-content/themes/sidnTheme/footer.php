<?php $footer_image = get_field('footer_image'); ?>
<footer class="flex_footer">
    <div class="flex-items_1_footer"><img src="<?php echo $footer_image; ?>"></div>
    <div class="flex-items_2_footer"><div class="footer_sperator"></div><span class="footer_legal"><?php the_field('footer_legal_info'); ?></span></div>
</footer>

<?php wp_footer(); ?>
</body>

</html>