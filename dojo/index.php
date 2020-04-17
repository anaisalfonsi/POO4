<?php
require 'Team.php';

$team1 = new Team();
$team1Name = "Les Branks";
$team1->setName($team1Name);
var_dump($team1);

$team2 = new Team();
$team2Name = "We-loose";
$team2->setName($team2Name);
var_dump($team2);

$boss = new Team();
$boss->setName('Jenny');
var_dump($boss);


$boss->kick($team1); // $team1->life - 20
var_dump($team1);

$boss->kick($team2);
var_dump($team2);
