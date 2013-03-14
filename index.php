<?php
// Load the Config
$config_file = "config.ini";

// Decide what to display.
$rand = rand(0, count($config['cars'][$state])-1);
$car = ucfirst($config['cars'][$rand]);

$rand = rand(0, count($config['taglines']['tagline'])-1);
$tagline = $config['taglines']['tagline'][$rand];

// Render the template.
require("template.phtml");
