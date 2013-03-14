<?php
// Load the Config
$config_file = "config.ini";

// Decide what to display.
$rand = rand(0, count($config['adjectives'][$state])-1);
$adjective = ucfirst($config['adjectives'][$state][$rand]);

$rand = rand(0, count($config['taglines']['tagline'])-1);
$tagline = $config['taglines']['tagline'][$rand];

// Render the template.
require("template.phtml");
