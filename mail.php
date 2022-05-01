<?php

$recepient = "dvs.service.kiev@gmail.com";
$sitename = "Новая заявка";

$name = trim($_POST["name"]);
$number = trim($_POST["number"]);
$name1 = trim($_POST["name1"]);
$name2 = trim($_POST["name2"]);


$message = "Имя: $name \nТелефон: $number \nМарка авто: $name1 \nМодель авто: $name2";

$pagetitle = "Новая заявка с сайта \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");