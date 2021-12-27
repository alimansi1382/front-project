<?php
session_start();

$baseroot = '../';
$assetsroot = '../assets/';

// error_reporting(E_ALL & ~E_NOTICE);


$plugins = glob($baseroot.'/*_plugin.php');

foreach ($plugins as $plugin) {
    include_once($plugin);
}

function include_view($baseroot,$name)
{
    include($baseroot.'views/'.$name);
}