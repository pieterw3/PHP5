<?php include('header.php') ?>

<div class="container">
<div class="row">
	<div class="col-md-3">
		<h1>PHP 5 FILTERS</h1>
	</div>
	<div class="col-md-6">
<?php

//php5 filters printed
echo '<pre>';
print_r(filter_list());
echo '</pre>';



//http://phphulp.jorendewit.nl/view/24/4/
?>

	</div>
 
	<div class="col-md-3">
		<h1></h1>
	</div>
</div>

 <div class="row">
	<div class="col-md-12">
	
	<?php
	
	//filter voor nummer
$leeftijd = 'D22';
$leeftijd = filter_var($leeftijd, FILTER_VALIDATE_INT);

if ($leeftijd === FALSE) {
	echo 'Dit is geen nummer ';
} else {
	echo 'Uw leeftijd is 22 ';
}
// FILTER HTML IN STRING
$stringetje = 'Deze string <b>bevat</b> verschillende <i>html</i> tags'; 
$stringetje = filter_var($stringetje, FILTER_SANITIZE_SPECIAL_CHARS);
echo $stringetje;

//filters in arrays
$nawgegevens = array (
	'leeftijd' => 22,
	'adres' => 'Liefdes Laan 3',
	'email' => 'info@example.com',
	'land' => 'Nederland'
);

$filtergegevens = array (
	'leeftijd' => FILTER_VALIDATE_INT,
	'adres' => FILTER_SANITIZE_SPECIAL_CHARS,
	'email' => FILTER_VALIDATE_EMAIL,
	'land' => FILTER_SANITIZE_SPECIAL_CHARS
);

$resultaat = filter_var_ARRAY($nawgegevens, $filtergegevens);
echo '<pre>'; 
var_dump($resultaat); 
echo '</pre>'; 
?>


</div>
   



    <div class="row">
<div class="col-md-3">
<h1>FORMULIER PHP FILTERS TEST</h1>
</div>
   
<div class="col-md-6">
<br><br>

<form role="form" action="php/verwerken.php" method="post">

<div class="form-group">
<label for="voornaam">Voornaam:</label>
<input type="text" id="voornaam" class="form-control" name="voornaam">
</div>

<div class="form-group">
<label for="achternaam">Achternaam:</label>
<input type="text" id="achternaam" class="form-control" name="achternaam">
</div>

<div class="form-group">
<label for="email">Email:</label>
<input type="email" id="email" class="form-control" name="email">
</div>
<button type="submit" class="btn btndefault">Verzenden</button>
</form>
</div>

   
<div class="col-md-3">
</div></div>

	</div>
 
 </div>
 </div>
 <?php include('footer.php')?>