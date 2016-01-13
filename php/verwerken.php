<?php 
// Controle of een formulier gepost is
if($_SERVER['REQUEST_METHOD'] == 'POST')
	
/* Velden uit een POST formulier: 
- leeftijd 
- string 
- email  
*/ 
$aData = array();
$filters = array( 
    'leeftijd' => FILTER_VALIDATE_INT, 
    'string' => FILTER_SANITIZE_SPECIAL_CHARS, 
    'email' => FILTER_VALIDATE_EMAIL,  );

$resultaten = filter_input_array(INPUT_POST, $filters); 

foreach($resultaten as $veld => $resultaat) 
{ 
    if(is_null($resultaat)) 
    { 
        echo 'Je bent vergeten om '.$veld.' in te vullen.'; 
    } 
	
    elseif($resultaat === FALSE) 
    { 
        echo 'Je hebt geen geldige waarde ingevuld voor: '.$veld; 
    } 
   
} 



?>