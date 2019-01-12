<?php
include_once('vendor/autoload.php');

$obj = new App\Classes\Reverter();
echo $obj->revertPunctuationMarks('Hello! How are you?');
