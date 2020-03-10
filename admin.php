<?php

session_start();

if ( !isset($_SESSION['username']) ) {
    die('Anda belum login! silahkan login untuk mengakses halaman ini..');
}

if ( isset($_GET['halaman']) ) {
    $halaman = $_GET['halaman'];
}

require 'header.php';

if (file_exists("{$halaman}.php")) {
    require "{$halaman}.php";
} else {
    require "404.php";
}

require 'footer.php';