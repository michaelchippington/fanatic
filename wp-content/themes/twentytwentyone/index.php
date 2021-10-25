<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header(); ?>

<?php if ( is_home() && ! is_front_page() && ! empty( single_post_title( '', false ) ) ) : ?>
	<header class="page-header alignwide">
		<h1 class="page-title"><?php single_post_title(); ?></h1>
	</header><!-- .page-header -->
<?php endif; ?>

<div class="container">

<form id="regForm" action="">

<p>Login:</p>

<!-- One "tab" for each step in the form: -->
<div class="tab step1">Username:
    <p><input placeholder="Username..." class="required username" ></p>
  
    <button type="button" class="next">Next</button>
  
</div>

<div class="tab step2">Password:
    <p><input placeholder="Password..."  class="required password" ></p>
  
    <button type="button" class="login">Login</button>
      
</div>

</form>

<div class="message"></div>

</div>

<script>

</script>




<?php

get_footer();
