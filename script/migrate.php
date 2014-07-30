<?php
/**
 * Created by PhpStorm.
 * User: adamkopec
 * Date: 30.07.2014
 * Time: 23:29
 */
include __DIR__ . '/../vendor/autoload.php';

$migration = new Adam\Migration();
$migration->execute();