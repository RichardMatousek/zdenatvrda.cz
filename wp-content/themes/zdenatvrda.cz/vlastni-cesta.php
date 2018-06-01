<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>Zdena Tvrdá - osobní fitness trenérka pro ženy</title>

<link rel="stylesheet" href="style.css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>

<script src="http://code.jquery.com/jquery.min.js"></script>

<script src="fancybox/jquery.fancybox.pack.js"></script>
<script src="fancybox/jquery.mousewheel-3.0.6.pack.js"></script>
<link rel="stylesheet" href="fancybox/jquery.fancybox.css">


<script>
$(document).ready(function() {
	$(".form").fancybox({
		Width	: 800,
		Height	: 600,
		fitToView	: false,
		type		: 'iframe',
		autoSize	: false,
		closeClick	: false,
		openEffect	: 'fade',
		closeEffect	: 'fade'
	});
});
</script>
<script>
$(document).ready(function() {
	$(".galerie").fancybox({
		openEffect	: 'fade',
		closeEffect	: 'fade'
	});
});
</script>

<script>
jQuery(window).scroll(function(){
    var fromTopPx = 772; // distance to trigger
    var scrolledFromtop = jQuery(window).scrollTop();
    if(scrolledFromtop > fromTopPx){
        jQuery('#zdenatvrda2').addClass('scrolled');
    }else{
        jQuery('#zdenatvrda2').removeClass('scrolled');
    }
});
</script>



</head>
<body>

<div id="menu">
    <div id="menuobsah">
    Tréninky:
    	<nav>
    		<ul>
    			<li><a href="pro-zacatecnice.php" title="Osobní tréninky pro začátečnice">Pro začátečnice</a></li>
    			<li><a id="druhy" href="pro-pokrocile.php" title="Osobní tréninky pro pokročilé">Pro pokročilé</a></li>
				  <li><a id="treti" href="pro-zkusene.php" title="Osobní tréninky pro zkušené">Pro zkušené</a></li>
				<div class="cistic"></div>
    		</ul>
    	</nav>
      <div id="druhe-menu">
        <ul>
          <li><a href="akce.php" title="Akce">Akce</a></li>
          <li><a href="kontakt.php" title="Kontakt na Zdenku Tvrdou">Kontakt</a></li>
          <li><a href="clanky.php" title="Články Zdenky Tvrdé">Články</a></li>
          <li><a href="fotogalerie.php" title="Fotogalerie Zdenky Tvrdé">Fotogalerie</a></li>
          <li><a href="o-mne.php" title=" O osobní trénérce Zdeně Tvrdé">O mně</a></li>
          <li><a href="index.php" title="Úvodní stránka">Úvod</a></li>
        <div class="cistic"></div>
        </ul>
      </div>
    </div>
</div>

<div id="layoutpozadi-sekce">
  <div id="container-sekce">
  <div id="uvodni-diamond-zeleny"></div>
  <div id="uvodni-info-sekce">
      <h1>Vlastní cesta</h1>


      </div>




  </div>
</div>

<div id="obal">
<div id="obsah">
	<h3>O programu</h3>
<p>Pokud vám vyhovuje nejdříve osobně probrat vaše představy o cvičebním programu, <a class="form blue" href="formular.php?var=Chci jít vlastní cestou" alt="krátký formulář">vyplňte krátký formulář</a>.<br>Obratem se ozvu a společně vám vytvoříme plán přímo na míru.</p>


<div class="jdudotoho">
	 <a class="tlacitko form" href="formular.php?var=Chci jít vlastní cestou" title="Osobní tréninky s vlasntí cestou">Jdu do toho!</a>
</div>

</div>

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

<div id="paticka">
	<p><a href="index.php" title="Úvod">Úvod</a> <a href="o-mne.php" title="O mně">O mně</a><a href="fotogalerie.php" title=“Fotogalerie”>Fotogalerie</a><a href="pro-zacatecnice.php" title="Pro začátečnice">Pro začátečnice</a> <a href="pro-pokrocile.php" title="Pro pokročilé">Pro pokročilé</a> <a href="pro-zkusene.php" title="Pro zkušené">Pro zkušené</a> <a href="vlastni-cesta.php" title="Vlastní cesta">Vlastní cesta</a> <a href="clanky.php" title="Články Zdenky Tvrdé">Články</a> <a href="kontakt.php" title="Kontakt">Kontakt</a> <a href="akce.php" title="Akce">Akce</a></p>
	<a href="https://www.facebook.com/zdena.tvrda.trenerka/?fref=ts" target="_blank" title="Facebook" id="facebook-male">Zdena Tvrdá Facebook</a>

</div></div>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-6085453-37', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>
