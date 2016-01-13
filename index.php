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

?>
	</div>
 
 </div>
 </div>
 <?php include('footer.php')?>