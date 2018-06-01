<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>Zdena Tvrdá - kontaktní formulář</title>
<meta name="description" content="Jmenuji se Mgr. Zdenka Tvrdá, vedu profesionální fitness kurzy pro ženy a pracuji jako osobní trenérka v Big One Fitness v Brně.">
<meta name="keywords" content="Zdenka Tvrdá, Zdena Tvrdá, Zdena Gottwaldová, Big One Fitness, Big One Brno, fitness">

<link rel="stylesheet" href="style.css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
</head>
<body>
<div id="formuvnitr">
	<h2>Skvělé rozhodnutí :-)</h2>
	<p class="vetsi">Nejdříve se seznámíme...</p>
	<p>Prosím, zanechejte mi na sebe kontakt. Ozvu se obratem a probereme spolu detaily vašeho budoucího tréninkového plánu. Tato konzultace je <strong>nezávazná</strong> a <strong>zdarma</strong>.</p>
	<p class="vetsi">...a poté se pustíme do práce!</p>
	
	
	<div id="forma">
	<form method="post" action="formular-odeslat.php">
	<?php echo'
		<input type="hidden" name="nazevformulare" value="ZdenaTvrda.cz - '.$_GET["var"].'">
		  <div class="form-group1"><div class="popis">Váš program:</div><div class="hodnota"><strong>'.$_GET["var"].'</strong></div></div>
		<div class="cistic"></div>';
	?>
		  <div class="form-group"><div class="popis"><label for="jmeno">Vaše jméno:<sup>*</sup></label></div><div class="hodnota"><input name="jmeno" required></div></div>
		  <div class="form-group"><div class="popis"><label for="posta">E-mail:<sup>*</sup></label></div><div class="hodnota"><input name="posta" required></div> </div>
		  <div class="form-group"><div class="popis"><label for="vzkaz">Ptejte se,<br>zanechte  mi vzkaz:</label></div><div class="hodnota"><textarea name="vzkaz"></textarea></div></div>
		  <div class="mobilni-verze"><label for="town">Town:</label>									<input name="town" type="text"></div>
		  
		  <button type="submit" class="button-posta">Odeslat formulář</button>
		
	</form>	
	</div>
</div>
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


