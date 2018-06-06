<?php get_header(); ?>

<div id="layoutpozadi-sekce">
  <div id="container-sekce">
  <div id="uvodni-o-mne"></div>
  <div id="uvodni-info-sekce">
      <h1>O mně</h1>
 
 
      </div>
 
 
 
 
  </div>
</div>
 
<div id="obal">

     <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
 <?php get_template_part( 'content', get_post_format() ); ?>
<!--BEGIN .entry-content -->
	  <?php endwhile; else: ?>
<div id="post-0" <?php post_class() ?>>
<h1 class="entry-title">
<?php _e('Error 404 - Not Found', 'theme') ?>
                        </h1>
<!--BEGIN .entry-content-->
<div class="entry-content">
<p><?php _e("Sorry, but you are looking for 
something that isn't here.", "theme") ?></p>
</div>
</div>
<?php endif; ?>
 

<div id="ctyrprogram">
	<div id="program1">
		<h3>Pro začátečnice</h3>
		<a class="na-program" href="pro-zacatecnice.php" title="Osobní tréninky pro začátečnice">Více o programu</a>
	</div>
 
	<div id="program2">
		<h3>Pro pokročilé</h3>
		<a class="na-program" href="pro-pokrocile.php" title="Osobní tréninky pro pokročilé">Více o programu</a>
	</div>
 
	<div id="program3">
		<h3>Pro pro zkušené</h3>
		 <a class="na-program" href="pro-pokrocile.php" title="Osobní tréninky pro pokročilé">Více o programu</a>
	</div>
 
	<div id="program4">
		<h3>Vlastní cesta</h3>
		 <a class="na-program" href="vlastni-cesta.php" title="Individuální osobní tréniky">Více o programu</a>
	</div>
	<div class="cistic"></div>
</div>
 
<div id="delicicara">
</div>

<?php get_footer(); ?>