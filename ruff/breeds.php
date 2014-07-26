<?php>

$rows = array_map('str_getcsv', file('breeds.csv'));

$csv = array();
foreach ($rows as $row) {
  $csv[] = implode('', $row);
}

print_r($csv);