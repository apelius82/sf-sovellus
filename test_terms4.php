<?php
// test_terms4.php - simuloi oikea sovelluksen latausjärjestys
error_reporting(E_ALL);
ini_set('display_errors', '1');

echo '<h2>Simuloidaan sovelluksen lataus</h2>';

// Ladataan sovellus kuten index.php tekee
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/app/includes/auth.php';
require_once __DIR__ . '/assets/lib/sf_terms.php';

// Nyt testataan
$terms = sf_terms();
$total = count($terms);

$displayKeys = array_filter(array_keys($terms), function($k) {
    return strpos($k, 'display_') === 0 || strpos($k, 'ttl_') === 0 || strpos($k, 'duration_') === 0;
});

echo "<p>Total terms: <strong>{$total}</strong></p>";
echo "<p>Display terms: <strong>" . count($displayKeys) . "</strong></p>";

echo '<p>display_ttl_heading = <strong>' . sf_term('display_ttl_heading', 'fi') . '</strong></p>';

// Tarkista onko display.php jo ladattu included_files -listassa
$included = get_included_files();
$displayIncludes = array_filter($included, function($f) {
    return strpos($f, 'display.php') !== false;
});

echo '<hr><h3>Tiedostot jotka sisältävät "display.php":</h3>';
foreach ($displayIncludes as $idx => $f) {
    echo "<p>{$idx}: <code>{$f}</code></p>";
}

echo '<hr><h3>Kaikki ladatut tiedostot (järjestyksessä):</h3>';
echo '<ol>';
foreach ($included as $f) {
    $highlight = (strpos($f, 'display') !== false || strpos($f, '_index') !== false) ? 'style="color:red;font-weight:bold"' : '';
    echo "<li {$highlight}><code>{$f}</code></li>";
}
echo '</ol>';