<?php

$days = [];
/*
  $days["lun"] = "lunedi";
  $days["mar"] = "martedi";
  $days["mer"] = "mercoledi";
  $days["gio"] = "giovedi";
  $days["ven"] = "venerdi";
  $days["sab"] = "sabato";
  $days["dom"] = "domenica"; */

$days = [
    "mon" => ["it" => "lunedi", "en" => "monday"],
    "tue" => ["it" => "martedi", "en" => "tuesday"]
];

/* var_dump($days);
  echo json_encode($days);

  echo "lunedi in inglese si dice: {$days["mon"]["en"]}";
 */
foreach ($days as $key => $value) {
    echo "{$key}: \n";
    foreach ($value as $language => $day) {
        echo "\t{$language}: {$day}\n";
    }
}

$numeri = [];
$numeri[0] = 102;
$numeri[1] = 12;

foreach ($numeri as $key => $value) {
    echo "key: {$key}, value: {$value}\n";
}

foreach ($numeri as $value) {
    echo "value: {$value}\n";
}