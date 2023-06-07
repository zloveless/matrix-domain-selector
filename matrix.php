<?php
// matrix.php?domain=$host
$input = filter_input_array(INPUT_GET, FILTER_SANITIZE_STRING);
$domain = $input["domain"];

$config = json_decode(file_get_contents("matrix-domain-selector.json"),$true);

header("Content-Type: application/json");

$result = array();

if (empty($config) || empty($config->{$domain})) {
	$result["m.server"] = "matrix.org:443";
}
else {
	$result["m.server"] = $config->{$domain};
}

echo json_encode($result);