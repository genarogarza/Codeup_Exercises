<?php

parks = [
    ['name' => 'Acadia', 'location' => 'Maine', 'date_established' => 'February 26, 1919', 'area' => '47389.67'],
    ['name' => 'Arches', 'location' => 'Utah', 'date_established' => 'November 12, 1971', 'area' = '76518.98'],
    ['name' => 'Badlands', 'location' => 'South Dakota', 'date_established' => 'November 10, 1978', 'area' => '242755.94'],
    ['name' => 'Big Bend', 'location' => 'Texas', 'date_established' => 'June 12, 1944', 'area' => '801163.21'],
    ['name' => 'Biscayne', 'location' => 'Florida', 'date_established' => 'June 28, 1980', 'area' => '172924.07'],
    ['name' => 'Canyonlands','location' => 'Utah', 'date_established' => 'September 12, 1964', 'area' => '337597.83'],
    ['name' => 'Denali', 'location' => 'Alaska', 'date_established' => 'February 26, 1917', 'area' => '4740911.72'],
    ['name' => 'Everglades', 'location' => 'Florida', 'date_established' => 'May 30, 1934', 'area' => '1508537.90'],
    ['name' => 'Glacier', 'location' => 'Montana', 'date_established' => 'May 11, 1910', 'area' => '1013572.41'],
    ['name' => 'Grand Canyon','location' => 'Arizona', 'date_established' => 'February 26, 1919', 'area' => '1217403.32']
];
foreach ($parks AS $park) {
    $QUERY = "INSERT INTO national_parks (name, location, date_established, area) VALUES ('{$parks['name']}','{$parks['location']}', '{$parks['date_established']}','{$parks['area']}')";

    $dbc->exec($QUERY);

    echo "Inserted ID: " . $dbc->lastInsertId() . PHP_EOL;
}