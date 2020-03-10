<?php

require 'db.php';

$id     = $_POST['id'];

$id_outlet  = $_POST['id_outlet'];
$nama_paket = $_POST['nama_paket'];
$jenis      = $_POST['jenis'];
$harga      = $_POST['harga'];

$db = new Database();

$update = $db->update('paket', [
    'id_outlet'  => $id_outlet,
    'nama_paket' => $nama_paket,
    'jenis'      => $jenis,
    'harga'      => $harga
], [ 'id_paket' => $id ] );

if ( $update > 0 ) {
    header('Location: admin.php?halaman=paket');
} else {
    echo "Gagal mengubah data..".mysqli_error($db->connect());
}