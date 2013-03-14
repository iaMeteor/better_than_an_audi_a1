<?php
// Load the Config
$config_file = "config.ini";
if(!file_exists($config_file)){
    die("No config");
}
$config = parse_ini_file($config_file, true);

// Decide what to display.
$rand = rand(0, count($config['cars']['car'][$state])-1);
$car = ucfirst($config['cars']['car'][$rand]);

$rand = rand(0, count($config['taglines']['tagline'])-1);
$tagline = $config['taglines']['tagline'][$rand];

// Render the template.
require("template.phtml");
