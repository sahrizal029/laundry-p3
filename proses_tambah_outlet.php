<?php

require 'db.php';

$nama   = $_POST['nama'];
$telp   = $_POST['telp'];
$alamat = $_POST['alamat'];

$db = new Database();
$insert = $db->insert('outlet', [
    'id_outlet' => '',
    'nama'      => $nama,
    'alamat'    => $alamat,
    'telp'      => $telp,
]);

if ( $insert > 0 ) {
    header('Location: admin.php?halaman=outlet');
} else {
    echo "Gagal menambahkan data!".mysqli_error($db->connect());
}