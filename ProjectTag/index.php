<?php

include_once "autoload.php";

echo "<!DOCTYPE html>";
$html=Tag::html();
$head=Tag::head()->appendTo($html);
$body=Tag::body()->appendTo($html);

$container= Tag::div()->appendBody($body);
$container->setAttributes('class','container');
echo $html;




