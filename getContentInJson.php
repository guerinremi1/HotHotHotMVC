<?php
ini_set('user_agent','Mozilla/4.0 (compatible; MSIE 6.0)');
date_default_timezone_set('Europe/Paris');

$J_content = file_get_contents("https://hothothot.dog/api/capteurs/");

$J_content_parsed = json_decode($J_content);

$date = $J_content_parsed->{'capteurs'}[0]->{'Timestamp'};
$I_valeur_int = $J_content_parsed->{'capteurs'}[0]->{'Valeur'};
$I_valeur_ext = $J_content_parsed->{'capteurs'}[1]->{'Valeur'};

$date = date('m/d/Y H', $date);

$lectureJson = json_decode(file_get_contents('json/donnees.json'));
$date_last = $lectureJson[sizeof($lectureJson)-1]->{'date'};

if($date != $date_last){
    $tab=["date" => $date, "int" => $I_valeur_int , "ext"=> $I_valeur_ext];
    array_push($lectureJson,$tab);
    file_put_contents('json/donnees.json', json_encode($lectureJson));
}
