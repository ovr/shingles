<?php
/**
 * @author Patsura Dmitry @ovr <talk@dmtry.me>
 */

include_once __DIR__ . '/../vendor/autoload.php';

$class = new Shingles\MD5();
$class->addStopSymbols(array('1', '2', '3', '4', '5', '6', '7', '8', '9'));