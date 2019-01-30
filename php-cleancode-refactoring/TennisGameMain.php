<?php
/**
 * Created by PhpStorm.
 * User: hoa
 * Date: 30/01/2019
 * Time: 14:26
 */

include "TennisGame.php";
$tennisGame = new TennisGame();
$tennisGame->getResult(3, 3);
echo $tennisGame;