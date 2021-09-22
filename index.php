<?php

require "vendor/autoload.php";

use App\Classes\TransformText;

$text = new TransformText();

echo $text->stringRevers("Привет! Давно не виделись.");