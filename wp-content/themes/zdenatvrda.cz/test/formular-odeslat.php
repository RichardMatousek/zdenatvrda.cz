<?php
  $nazevformulare=$_POST[nazevformulare];
  $vzkaz=$_POST[vzkaz];
  $jmeno=$_POST[jmeno];
  $posta=$_POST[posta];
  $town=$_POST[town];
  $message = "
Jméno:					".$jmeno."
E-mail:					".$posta."	
--------------------------------------------

Zpráva:
".$vzkaz."
";
  $headers="MIME-Version: 1.0\n";
  $headers.="Content-type: text/plain; charset=UTF-8\n";
  $headers.="From: <$posta>\n";
if ($town) {header("Location: neodeslany-formular.php");}
else {
			mail ("webonaut@gmail.com,gottvaldovaz@seznam.cz",$nazevformulare,$message,$headers);
			echo '<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>Odeslaný formulář</title>

<link rel="stylesheet" href="style.css">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,700" rel="stylesheet" type="text/css">
</head>
<body>
<div id="formuvnitr">
<div id="hlaseni">
	Formulář byl úspěšně odeslán. Děkuji!<br>
	Nenechám vás čekat na odpověď déle než dva pracovní dny. :-)<br><br>
	S pozdravem,<br>
	Zdenka Tvrdá
</div>
</div>
</body>
</html>
';}
?>