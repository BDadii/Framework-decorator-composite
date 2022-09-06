<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Decorator\{Paragraph, Italic, Text};

echo (new Paragraph((new Italic(new Text('hello world'))))); 