<?php

require_once 'People.php';
$person = new People();
$person->name = 'Tom';
$person->age = 10;
$person->go();

$person2 = new People();
$person2->name = 'Bob';
$person2->age = 15;
$person2->go();
