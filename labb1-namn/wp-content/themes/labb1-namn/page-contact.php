<?php
/** 
* Template Name: Front Page Template
* Description:frontpage
* @package labb1-namn
* @subpackage labb1-namn
*/
get_header(); ?>


<main>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-md-8 col-md-offset-2">
							<h1>Kontakt</h1>
							<form>
								<label>Namn</label>
								<input type="text" />
								<label>E-post</label>
								<input type="email" />
								<label>Meddelande</label>
                                <br>
								<textarea></textarea>
								<input type="submit" value="Skicka" />
							</form>
						</div>
					</div>
				</div>
			</section>
</main>

<?php get_footer(); ?>