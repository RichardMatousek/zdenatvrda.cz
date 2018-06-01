<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>Zdena Tvrdá - osobní fitness trenérka pro ženy, Brno</title>
<meta name="description" content="Jmenuji se Mgr. Zdenka Tvrdá, vedu profesionální fitness kurzy pro ženy a pracuji jako osobní trenérka v Big One Fitness v Brně.">
<meta name="keywords" content="Zdenka Tvrdá, Zdena Tvrdá, Zdena Gottwaldová, Big One Fitness, Big One Brno, fitness">

<link rel="stylesheet" href="style.css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>

<script src="http://code.jquery.com/jquery.min.js"></script>

<script src="fancybox/jquery.fancybox.js"></script>
<script src="fancybox/jquery.mousewheel-3.0.6.pack.js"></script>
<link rel="stylesheet" href="fancybox/jquery.fancybox.css">


<script type="text/javascript">

 $(document).ready(function() {

	$.fancybox.open([
    {
    	type: 'image',
        href : 'grafika/plakat-2.jpg',

    }

], {
    padding : 0
});
	});

</script>


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

<div id="layoutpozadi">
  <div id="container"><div id="uvodni-pozadi">
  <div id="uvodni-info">
      <h1>Dobrý den,<br>jmenuji se Zdenka Tvrdá,</h1>
      <h2>jsem profesionální osobní fitness trenérka<br>pro ženy. Působím v Brně a okolí.</h2>

      <p>Dvojnásobná mistryně světa v kulturistice žen (1995, 1996).<br>
         Mistryně Evropy (1995).<br>
         6. násobná mistryně České republiky.<br>
         Absolutní vítězka GP Oděsa 1998.<br>
         Účastnice nejvyšší profesionální kulturistické soutěže žen,<br>
         Olympia 1997 v New Yorku a 1998 v Praze.</p>
         <a class="tlacitko" href="o-mne.php" title="Osobní tréninky pro pokročilé">Více o mně</a>
        <div id="uvodni-info-odznak"></div>

      <div id="vyberte">
      </div>
      </div>

      <div id="zdenatvrda2"></div>
      <div id="zdenatvrda"></div>



  <div class="cistic"></div></div>
</div></div>

<div id="obal">
<div id="programy">
 <div id="levy">
 <div id="levy-diamond"></div>
 <h3>Pro začátečnice</h3>
 <p>Do fitness centra pravidelně nechodíte, případně jste v něm nikdy nebyla? Pojďme začít společně. Tento trénink je určený přesně pro vás.</p>
 <a class="tlacitko form" href="formular.php?var=Osobní tréninky pro začátečnice" title="Osobní tréninky pro začátečnice">Jdu do toho!</a>
<a class="na-program" href="pro-zacatecnice.php" title="Osobní tréninky pro začátečnice">Více o programu</a>
 </div>

 <div id="prostredni">
 <div id="prostredni-diamond"></div>
 <h3>Pro pokročilé</h3>
 <p> Sport je vaší oblíbenou zábavou a víte, že díky němu budete vypadat skvěle co nejdéle? Pojďte se mnou čelit novým výzvám a posunout své hranice.</p>
 <a class="tlacitko form" href="formular.php?var=Osobní tréninky pro pokročilé" title="Osobní tréninky pro pokročilé">Jdu do toho!</a>
  <a class="na-program" href="pro-pokrocile.php" title="Osobní tréninky pro pokročilé">Více o programu</a>
 </div>

 <div id="pravy">
 <div id="pravy-diamond"></div>
 <h3>Pro zkušené</h3>
 <p>Život bez sportu si nedovedete vůbec představit a věnujete mu většinu volného času. Pomohu vám připravit se i na ty nejodvážnější výzvy a cíle.</p>
 <a class="tlacitko form" href="formular.php?var=Osobní tréninky pro zkušené" title="Osobní tréninky pro zkušené">Jdu do toho!</a>
  <a class="na-program" href="pro-pokrocile.php" title="Osobní tréninky pro pokročilé">Více o programu</a>
 </div>
</div>


<div id="vlastni">
<h3>Chcete jít vlastní cestou?</h3>
<p>Pokud vám vyhovuje nejdříve osobně probrat vaše představy o cvičebním programu, <a class="form link" href="formular.php?var=Chci jít vlastní cestou" alt="krátký formulář">vyplňte krátký formulář</a>.<br>Obratem se ozvu a společně vám vytvoříme plán přímo na míru.

 <a class="tlacitko form" href="formular.php?var=Chci jít vlastní cestou" title="Osobní tréninky s vlasntí cestou">Jdu do toho!</a>
</p>
</div>

<div id="delicicara">
</div>

<div id="paticka">
	<p><a href="index.php" title="Úvod">Úvod</a> <a href="o-mne.php" title="O mně">O mně</a><a href="fotogalerie.php" title=“Fotogalerie”>Fotogalerie</a><a href="pro-zacatecnice.php" title="Pro začátečnice">Pro začátečnice</a> <a href="pro-pokrocile.php" title="Pro pokročilé">Pro pokročilé</a> <a href="pro-zkusene.php" title="Pro zkušené">Pro zkušené</a> <a href="vlastni-cesta.php" title="Vlastní cesta">Vlastní cesta</a> <a href="clanky.php" title="Články Zdenky Tvrdé">Články</a> <a href="kontakt.php" title="Kontakt">Kontakt</a> <a href="akce.php" title="Akce">Akce</a></p>
  <a href="https://www.facebook.com/zdena.tvrda.trenerka/?fref=ts" target="_blank" title="Facebook" id="facebook-male">Zdena Tvrdá Facebook</a>


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
