<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mi~Doc
 */

?>

	<footer>
	  <div class="container py-4">
	    <div class="row">
	      <div class="col-6 text-left">
	        <img src="<?php echo site_url(); ?>/wp-content/uploads/2020/10/Logo.png" class="img-fluid"> 
	      </div>
	      <div class="col-6 text-right MD---link_color">
	        <a href="#"><i class="fab fa-facebook-f"></i></a>
	        <a href="#"><i class="fab fa-twitter"></i></a>
	        <a href="#"><i class="fab fa-instagram"></i></a>
	      </div>
	    </div>
	  </div>
	  <div class="container py-4" style="border-top:1px solid #464646;">
	    <div class="row">
	      <div class="col-12 col-md-6 text-center text-md-left">
	        <p>Copyright &copy; 2020. All Right Reserved.</p>
	      </div>
	      <div class="col-12 col-md-6 text-center text-md-right">
	        <a href="#">Terms and Conditions</a>
	        <a href="#">Privacy Policy</a>
	      </div>
	    </div>
	  </div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
