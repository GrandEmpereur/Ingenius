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
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<main>
	<div class="hero">
		<div class="hero__content">
			<div class="deco"></div>
			<div class="text">
				<h1>A unique learning and networking experience</h1>
				<p>The International University of Monaco (Licensed &recognized by the Government of the Principality of Monaco and Accredited by AMBA & AACSB) offers outstanding teaching in its small, connected, stimulating, cross-cultural environment fostering an entrepreneurial spirit, collaborative work, experiential learning and mutual understanding among students, faculty and staff.</p>
			</div>
		</div>

		<div class="hero__form">
			<form action="./functions.php" method="POST">
				<h2>Ask for program brochure</h2>

				<div class="form__input">
					<label for="">Title (Mr. Ms.)</label>
					<input class="input_text" type="text" name="firstname" id="">
				</div>

				<div class="form__input">
					<label for="">First Name</label>
					<input class="input_text" type="text" name="firstname" id="">
				</div>

				<div class="form__input">
					<label for="">Last Name</label>
					<input class="input_text" type="text" name="lastname" id="">
				</div>

				<div class="form__input--checkbox">
					<input  class="input_checkbox" type="checkbox" name="" id="">
					<label for="">I consent to the processing of my personal data and certify that I am over 15 years of age or, failing that, have the authorization of the holder of parental authority *</label>
				</div>

				<div class="form__input--submit">
					<input class="input__submit" type="submit" value="Envoyer">
				</div>

				<p>INSEEC U is committed to ensuring that the collection and processing of your data carried out from this site complies with the General Data Protection Regulation (RGPD) and the Data Protection Act.</p>
				
				<a href="">Learn more</a>
			</form>
		</div>
	</div>
</main>

<?php
get_footer();
